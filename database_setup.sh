#!/bin/sh
mysql -u qgk_user -ppw12345 -e "create database qgk; GRANT ALL PRIVILEGES ON qgk.* TO qgk_user@localhost IDENTIFIED BY 'pw12345'"
