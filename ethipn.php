<?php
    // Fill these in with the information from your CoinPayments.net account.
    // Fill these in with the information from your CoinPayments.net account.
    $cp_merchant_id = 'CoinPayment.net Merchant ID';
    $cp_ipn_secret = 'Your Instant Payment Notification Secret';
    $cp_debug_email = 'Your Debug Email';
    $email_to = 'Your Email';
    $headers = 'From NXT IPN Script';    $headers = 'From ETH IPN Script';

    function clean_string($string) {

      $bad = array('content-type','bcc:','to:','cc:','href');

      return str_replace($bad,'',$string);

     }

    //These would normally be loaded from your database, the most common way is to pass the Order ID through the 'custom' POST field.
    $order_currency = 'ETH';
    $order_minimum = 1;

    function errorAndDie($error_msg) {
        global $cp_debug_email;
        if (!empty($cp_debug_email)) {
            $report = 'Error: '.$error_msg."\n\n";
            $report .= "POST Data\n\n";
            foreach ($_POST as $k => $v) {
                $report .= "|$k| = |$v|\n";
            }
            mail($cp_debug_email, 'CoinPayments IPN Error', $report);
        }
        die('IPN Error: '.$error_msg);
    }

    if (!isset($_POST['ipn_mode']) || $_POST['ipn_mode'] != 'hmac') {
        errorAndDie('IPN Mode is not HMAC');
    }

    if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) {
        errorAndDie('No HMAC signature sent.');
    }

    $request = file_get_contents('php://input');
    if ($request === FALSE || empty($request)) {
        errorAndDie('Error reading POST data');
    }

    if (!isset($_POST['merchant']) || $_POST['merchant'] != trim($cp_merchant_id)) {
        errorAndDie('No or incorrect Merchant ID passed');
    }

    $hmac = hash_hmac("sha512", $request, trim($cp_ipn_secret));
    if ($hmac != $_SERVER['HTTP_HMAC']) {
        errorAndDie('HMAC signature does not match');
    }

    if (!isset($_POST['custom']) || empty($_POST['custom'])) {
        errorAndDie('No ripple address sent.');
    }

   /* VALIDATE RIPPLE ADDRESS */
   $rippleRegex = '/^r[rpshnaf39wBUDNEGHJKLM4PQRST7VWXYZ2bcdeCg65jkm8oFqi1tuvAxyz]{27,35}$/';

   if (preg_match($rippleRegex, $_POST['custom'], $matches) == 0 || FALSE){
        errorAndDie('Ripple address invalid');
    }

    // HMAC Signature verified at this point, load some variables.

    $txn_id = $_POST['txn_id'];
    $item_name = $_POST['item_name'];
    //$item_number = $_POST['item_number'];
    $amount1 = floatval($_POST['amount1']);
    $amount2 = floatval($_POST['amount2']);
    $currency1 = $_POST['currency1'];
    $currency2 = $_POST['currency2'];
    $status = intval($_POST['status']);
    $status_text = $_POST['status_text'];
    $receivedAmount = $_POST['received_amount'];
    $ripple = $_POST['custom'];
    $SF = floatval(0.00035);

    //depending on the API of your system, you may want to check and see if the transaction ID,
    //$txn_id, has already been handled before at this point

    //check if the currently incoming IPN is passing a completed transaction from this list, die if so
    //else the transaction has not been handled yet and the script can continue

    $lines = file('https://xagate.com/completedtxns.out');

    // Loop through our array to check for already processed payments
    foreach ($lines as $line_num => $line) {
      echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
    if ($txn_id == trim((string)$line)) {
      echo "<b>Found a match!</b><br />";
      echo "Line variable is set to $line<br />";
      echo "Equal! ".$txn_id."<br />";
      die('This TXN_ID has already been confirmed!  DO NOT SEND ANOTHER PAYMENT!!');
   }
  }
  // Then continue on with the original file from here...

    if ($currency1 != $order_currency) {
        errorAndDie('Original currency mismatch!');
    }

    // Check amount against order total
    if ($amount1 < $order_minimum) {
        errorAndDie('Amount is less than order total!');
    }

    if ($status == 100) {
   /*
   This next section builds the command for executing the ruby script on the server
   This ruby script will take in the ripple address, the amount of IOUs to issue, a currency, and the txn_id
   */
   $sendAmount = $amount1 - $SF;
   $data = $ripple." ".$sendAmount." ".$currency1." ".$txn_id;
   $command = "ruby submit.rb"." ".$data;
   $output = shell_exec("ruby /full_path_to/submit.rb"." ".$data);//executes the command, receives an array and integer for the return values
   echo "<pre>$output</pre>";

   $email_message = 'An ETH deposit has been confirmed!   ';

   $email_message .= ' Ripple: '.clean_string($ripple).'   ';

   $email_message .= ' Currency1 '.clean_string($currency1).'  ';

   $email_message .= ' ETH Amount: '.clean_string(($amount1 - $SF)).'   ';

   $email_message .= ' Transaction ID: '.clean_string($txn_id).'   ';

   $email_message .= 'Received Amount: '.clean_string($receivedAmount).'   ';

   $email_message .= 'Currency2: '.clean_string($currency2).'  ';

   $email_message .= ' The script has completed.  If anything went wrong, the client will be refunded in 6 hours or contact support.';

   $email_message .= ' The output from submit.rb follows:  '.$output.'  ';

   $subject = "ETH IPN: Script Completed";

   'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $subject, $email_message, $headers);

    die("IPN OK.  Hit end of success block.");
  }
?>
