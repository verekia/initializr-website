
<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    //Find+replace XXX Amount and XXXamount to the asset code
    
    $email_to = "YOUREMAIL@DOMAIN.COM";
 
    $email_subject = "X Deposit";
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(
 
        !isset($_POST['email']) ||
        
        !isset($_POST['ripple']) ||
		
		!isset($_POST['XXXamount']))
 
        //!isset($_POST['comments']))
      
      {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');
 
    }
 
    
	
	
	
    $email_from = $_POST['email']; // required
 
    $XXXamount = $_POST['XXXamount'];
	
	$ripple = $_POST['ripple']; // not required
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    $ripple_exp = '/^r[rpshnaf39wBUDNEGHJKLM4PQRST7VWXYZ2bcdeCg65jkm8oFqi1tuvAxyz]{27,35}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
	
	if(is_numeric($XXXamount) == false) {
 
    $error_message .= 'The amount you entered does not appear to be valid.<br />';
 
  }
	
	if($XXXamount <= 19.99) { //Change this number if you do not want the user to withdraw less than an amount.
 
    $error_message .= 'The amount you entered does not appear to be valid.  Minimum CAD deposit is 20$.<br />';
 
  }
	
	//$serviceFee = 0.5;
	
	//$totalCAD = $XXXamount  - $serviceFee;
	
	if(strlen($ripple) > 53) {
 
    $error_message .= 'The Ripple address you entered does not appear to be valid.<br />';
 
  }  elseif (!preg_match($ripple_exp,$ripple)) {
	$error_message .= 'The Ripple address you entered does not appear to be valid.  If you are sure your address is valid, <a href="mailto:YOUREMAIL@DOMAIN.COM">please send us an email</a>.<br />';
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Ripple: ".clean_string($ripple)."\n";
	
	$email_message .= "XXX Amount: ".clean_string($XXXamount)."\n";
	
	//$email_message .= "Service Fee: ".clean_string($serviceFee)."\n";
	
	//$email_message .= "Total: ".clean_string($totalCAD)."\n";
  
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);
 
?>
<!-- include your own success html here -->
 
<!DOCTYPE html>
<html class="no-js">
    <head>
        
         <!-- README
        1.  Preamble
        QuickGatewayKit was produced in most part with Initializr.
        Many thanks and praise for http://www.initializr.com/ and Jonathan Verrecchia
        Many thanks and praise to the twbs/bootstrap team!!
        
        This web-kit is offered AS IS and WITHOUT WARRANTY.
        This web-kit is released under Creative Commons.  See footer for details.
        
        QuickGatewayKit was first authored on May 11, 2015 by Taylor Warden.
        
        QGK was created for interested developers to begin a Ripple-based business.  Please do your own due diligence
        when developing a Ripple business such as a Gateway.  You must do your own research as well as contact
        relevent Government regulatory bodies within your country, in writing, with the final version of your Terms of
        Service before you conduct any business.
        
        It is VERY much suggested that before you continue any further to consult all of the Ripple Whitepapers found
        @ https://forum.ripple.com/viewtopic.php?t=4301
        
        I, TAYLOR WARDEN, HEREBY CLAIM NO RESPONSIBILITY THEREIN FOR ANY INDIVIDUAL, INDIVIDUALS, ENTITY, OR ENTITIES THAT MAY
        RECEIVE LEGAL ACTION, DIRECTLY OR INDIRECTLY, FOR THE USAGE OF THIS OR ANY PORTION OF THESE DOCUMENTS, IN PART
        OR IN FULL.  YOU HAVE BEEN WARNED.
        
        2. TABLE OF CONTENTS
        
        1.  Preamble
        2.  Table of Contents
        3.  Getting Started
        
        The contents of this web-kit include the following:
        
        index.php:  It is the home page of your Gateway website.  The default deposit action is linked to this page
        via deposit.php
        
        tpl.php:  this is your template file that you can copy, rename, and edit for a new page.
        
        tos.php:  this is an extremely basic Terms of Service template.  You ABSOLUTELY MUST have registered a LEGAL BUSINESS
        within your legal jurisidiction BEFORE YOU CONDUCT BUSINESS as a Ripple Gateway.  If you have problems with writing            your terms, hire a lawyer or consult twarden on the Official Ripple forums @ https://forum.ripple.com for the possibil         -ity of consulting or further resources.
        
        irba.php:  The International Ripple Business Association (IRBA) is an organization in which member Gateways must abide
        by a strict business practices and disclosure agreements.  The IRBA verifies important information such as banking             information.  This page includes more information on the IRBA an a simple template.  It is highly suggested if you
        are serious about operating a Gateway to one day apply for membership.  This page becomes more important as your               Gateway project becomes more established.
        
        deposit.php:  the script that processes the asset offered by default on index.php.
        
        withdrawals.php:  the page to fill out a form to process a withdrawal notification via withdraw.php.
        
        xdeposit.php:  the page for a dedicated deposit form for a second option.  Processed via xd.php
        
        xwithdraw.php:  the page for a dedicated withdrawal form for a second option.  Processed via xw.php
        
        ydeposit.php:  the page for a dedicated deposit form for a second option.  Processed via xd.php
        
        ywithdraw.php:  the page for a dedicated withdrawal form for a second option.  Processed via xw.php
        
        3.  Getting Started
        
        By now, you should have read the Ripple Whitepapers, know of how legal it is to operate a Gateway in your legal                jurisdiction, and have an idea of what you would like to offer to the Ripple network.
        
        First, open index.php.  Read the page entirely an replace what placeholder text is there with your information.
        When editing the form, change XXXamount and XXX Amount to the default asset ticket.
        
        4.  Editing the Front-end
        
        When you have figured out your service fees an accepted assets, edit the remaining pages xdeposit.php, ydeposit.php
        xwithdraw.php, and ywithdraw.php.
        
        Once you have completed that, you are nearly half way there.  Now, you must complete your Terms of Service.
        A template to get you started is found within tos.php.  Be sure to edit YOUR-LEGAL-JURISDICTION and
        MY-BUSINESS'-LEGALLY-REGISTERED-NAME.
        
        5.  Editing the Back-end
        
        xd.php, xw.php, yd.php, yw.php, deposit.php, and withdraw.php are all back-end PHP scripts which process a
        deposit notification for the Gateway operator to process.
        
        Replace YOUREMAIL@DOMAIN.COM with your operating email address.  Replace XXXamount and XXX amount with the
        proper asset codes.
        
        Index.php links to deposit.php
        Withdrawals.php links to withdraw.php
        xdeposit.php links to xd.php
        xwithdraw.php links to xw.php
        ydeposit.php links to yd.php
        ywithdraw.php links to yw.php
        
        6.  You are now have a Mock Gateway!  Now is the time to advertise your site and start market making over Ripple.
        The last step is to edit irba.php with the required information as outlined by ripplebusiness.org before applying for
        membership.
        
        7.  Please consider donating a small amount of XRP or Bitcoin to rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C or
        18DDswfzZ4QMZKxNhbgffxgN8WdnLy3mXM respectively if this web-kit was of help to you starting your Ripple-based
        business.
       
       8.  Join us at the official Ripple forums!  https://forum.ripple.com/
       
        -->
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>QWK</title> <!-- THE TITLE OF THIS PAGE-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<a class="navbar-brand" href="index.php">QWK</a><!-- YOUR HOMEPAGE LINK-->
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>My big message to the world!</h1>
        <p>We have a major marketing statement here:
		<ul><li>Here is the first supporting fact</li>
		<ul><li>Here is the second one, I can copy and paste it below for more supporting facts</li>
		</li><li><b>This is the last important fact in bold</b></li></ul><br />
        <p><a class="btn btn-primary btn-lg" role="button" id="learnMore">Learn more &raquo;</a></p><br />
		<div id="more" style="display: none">  <!-- A Learn More button displays more information to the user -->
			<h2>What is Lorem Ipsum?</h2>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
			<h3>Why do we use it?</h3>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
<br /><!-- Remove this line an below if you do not need a second paragraph -->
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
      </div>
    </div>
    <div class="container">
    
    Thank you for contacting us. We will be mailing instructions for deposit to the provided email address.<br />
Please note that it may take up to two weeks to receive and process your order.<br /><br />

Return to <a href="index.php">the index</a>.<br />
</body>
    
      </div>
      <hr>
      <footer>
        <p>&copy; MY-BUSINESS'-LEGALLY-REGISTERED-NAME 20XX ~~~ Please read our <a href="/tos.php">Terms of Service</a>.</p>
        <p><a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">QuickGatewayKit</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/whotooktwarden/QuickGatewayKit" property="cc:attributionName" rel="cc:attributionURL">Taylor Warden</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/verekia/initializr-website" rel="dct:source">https://github.com/verekia/initializr-website</a>.</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
		<script>
			$(  "#viewFirstDetails").click(function() {
  $( getElementById = firstDetails ).show( "slow", function() {
    // Animation complete.
  });
});
			$(  "#viewSecondDetails").click(function() {
  $( getElementById = secondDetails ).show( "slow", function() {
    // Animation complete.
  });
});

			$(  "#viewThirdDetails").click(function() {
  $( getElementById = thirdDetails ).show( "slow", function() {
    // Animation complete.
  });
});
			$(  "#learnMore").click(function() {
  $( getElementById = more ).show( "slow", function() {
    // Animation complete.
  });
});
				</script>
    </body>
</html>
<?php
 
}
 
?>
