#!/bin/bash
Echo "Testing the database's user table by inserting a test record:";
mysql -D qgk -u qgk_user -pPASSWORD -e "INSERT INTO authors (id,email,ripple) VALUES(1,"taylor.warden@sympatico.ca","rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C");"
Echo " Testing if the insert was successful by reading the data.";
mysql -u qgk_user -pPASSWORD -D qgk -e "SELECT * FROM users"
Echo "Testing is complete; delete the test record in the users table.";
mysql -u qgk_user -pPASSWORD -D qgk -e "DELETE * FROM users";
Echo "If you receive an error during running this script, first ensure you refactor setup_tables.sh and this script to reflect your qgk database's password";
Echo "If errors persist, please raise an issue on the qgk git.  Please provide as many details as possible and label the issue with the bug tag";
