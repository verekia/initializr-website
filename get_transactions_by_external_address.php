<?php
//Usage: domain.tld/get_transactions_by_external_address.php?external=external_address
//Provides an audit of all transactions for any specified external address

require_once 'config.php';
$conn = mysql_connect($db_host,$db_user,$db_pass)
or die ('Error connecting to mysql!  Please check config.php and your database for any inconsistencies.');

//SQL query executed returning an array
//Use a while loop to print each line by ID then append with the newline character
//assign SQL to a variable for query execution

//GET external address

$external = htmlspecialchars($_GET["external"])

//Comment this below section an modify it to your liking if implementing your own custom external addresses

//the regular expression for validating ripple addresses
$ripple_exp = '/^r[rpshnaf39wBUDNEGHJKLM4PQRST7VWXYZ2bcdeCg65jkm8oFqi1tuvAxyz]{27,35}$/';

//validate the passed external address, first by maximum valid length then by regular expression
if(strlen($external) > 53) {
    $error_message .= 'The external address you entered does not appear to be valid.<br />';
  }  elseif (!preg_match($ripple_exp,$external)) {
	  $error_message .= 'The external address you entered does not appear to be valid.<br />';
  }
 
 //produce error messages, if any
if(strlen($error_message) > 0) {
    died($error_message);
  }
  
$sql = "SELECT id, crypto_symbol, crypto_address, external_address, is_inbound,  rc_timestamp, finished, bc_blockhash, bc_amount, bc_txid FROM blockchain_transactions WHERE external_address = ". $external .";";
//connect to the database, execute the $sql, store the returned array within $result
//script exits gracefully if connection cannot be established
$result = $conn->query($sql);
//if the returned array has data
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Crypto Symbol: " . $row["crypto_symbol"]. " - Cryptocurrency Address: " . $row["crypto_address"].
" - External Address: " . $row["external_address"].
 " - Time-stamp: " . $row["rc_timestamp"]. " - Is Inbound: " . $row["is_inbound"]. " - Finished: " . $row["finished"]. " - Blockhash: ". $row["bc_blockhash"]. " Amount: " . $row["bc_txid"]. " TxID: " . $row["bc_txid"].  "<br />";
    }
} else {
          //else there were no results, notify RC operator
    echo "0 results";
}

$conn->close();
?>
