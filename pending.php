<?php
//Usage: domain.tld/pending.php
//Provides an audit of all current pending transactions

require_once 'config.php';
$conn = mysql_connect($db_host,$db_user,$db_pass)
or die ('Error connecting to mysql!  Please check config.php and your database for any inconsistencies.');

//SQL query executed returning an array
//Use a while loop to print each line by ID then append with the newline character
//assign SQL to a variable for query execution

$sql = "SELECT id, crypto_symbol, crypto_address, external_address, direction,  timestamp, finished FROM coin_index WHERE finished = false;";

//connect to the database, execute the $sql, store the returned array within $result
//script exits gracefully if connection cannot be established

$result = $conn->query($sql);

//if the returned array has data

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Crypto Symbol: " . $row["crypto_symbol"]. " - Cryptocurrency Address: " . $row["crypto_address"].
" - External Address: " . $row["external_address"].
 " - Time-stamp: " . $row["timestamp"]. " - Direction: " . $row["direction"]. " - Finished: " . $row["finished"]. "<br />";
    }
} else {
          //else there were no results, notify RC operator
    echo "0 results";
}

$conn->close();
?>
