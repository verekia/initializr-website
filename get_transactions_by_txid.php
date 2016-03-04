<?php
//Usage: domain.tld/get_transactions_by_txid.php?txid=blockchain_transactionID
//Provides an audit of all transactions for any specified transaction ID.

require_once 'config.php';
$conn = mysql_connect($db_host,$db_user,$db_pass)
or die ('Error connecting to mysql!  Please check config.php and your database for any inconsistencies.');
//SQL query executed returning an array
//Use a while loop to print each line by ID then append with the newline character
//assign SQL to a variable for query execution
//GET txid
$txid = htmlspecialchars($_GET["txid"])

$sql = "SELECT id, crypto_symbol, crypto_address, external_address, is_inbound,  rc_timestamp, finished, bc_blockhash, bc_amount, bc_txid FROM blockchain_transactions WHERE bc_txid = ". $txid .";";
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
