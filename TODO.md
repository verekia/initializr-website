
Create a front end statistics API for Roast Coins (see https://github.com/RoastBeefSandwichCo/Roast-Coins+

GETs without variables, used to query the database about its current state for daily operation

Get all data regarding all currently pending transactions, page name is pending:  SELECT * FROM coin_index WHERE finished = false;

Get all data regarding all completed transactions, page name is completed:  SELECT * FROM coin_index WHERE finished = true;

Get all data regarding all accounts from the coin_index table, the following will be made on loading the full_index page: SELECT * FROM coin_index;

GETs with variables, used to audit clients' past and/or current transactions with the operator

Get all data from the crypto index table about a specific external address, page name is tentatively named
get_external_address_transactions?external=<external address>: SELECT FROM coin_index * WHERE external_address = <external address>;  
This would provide all of the information about all crypto symbols and all addresses for all cryptos, conversely..

Get all data from the crypto index table about a specific <crypto symbol> for any specified <external address>, page name is tentatively named 
get_crypto_symbol_external_address?external=<external address>?cryptocode=<crypto symbol>: 
SELECT FROM coin_index WHERE crypto_symbol = <crypto symbol> AND WHERE external_address = <external address>;   
This would conversely provide only information about a specified crypto and ripple account.

This second query can be modified slightly to receive information about any specified <external address> and 
any <crypto address> to fetch the same information but with another selector:  
SELECT FROM coin_index WHERE crypto_address = <crypto address> AND WHERE external_address = <external address>
Tentatively named get_ripple_address_timestamp?ripple=<ripple address>?timestamp=<timestamp>.
