#!bin/bash
#setup.sh was first authored on May 31, 2015 by Taylor Warden
#This shell script will attempt to provide the following functionality:
#Fetch the recently updated package list via apt-get and upgrade the system.
#Run the apt-get command to install Apache, MySQL, PHP5, webmin, and phpMyadmin.
#Suggest to run sudo apt-get install proftpd for FTP access to the server.

echo "NOTE:  If you would like to run this script and avoid any errors, refer to the README.md file.";
echo "Attempting to run sudo apt-get update && sudo apt-get upgrade, Ubuntu will now ask you for your sudo/root password.";
echo "This script will now attempt to install Apache, MySQL, PHP5, webmin, and phpMyadmin";
echo "IMPORTANT:  When you encounter the installation of phpMyadmin, Choose Apache and then YES for dbconfig-common.";
echo "Attempting to run command sudo apt-get install python-software-properties -f, Ubuntu will now ask you for your sudo/root password.";
sudo apt-get install python-software-properties -f
echo "Attempting to run command sudo add-apt-repository ppa:ondrej/php5-oldstable.";
echo "Ubuntu will now as you to confirm, select YES and enter your password if prompted.";
sudo add-apt-repository ppa:ondrej/php5-oldstable
echo "Attempting to run command sudo apt-get update, if Ubuntu asks you for your sudo/root password, please enter it.";
sudo apt-get update
echo "Attempting to run command sudo apt-get install php5 php5-gd php5-mysql php5-curl php5-cli php5-cgi php5-dev php5-fpm -f";
echo "If Ubuntu asks you for your sudo/root password, please enter it.";
sudo apt-get install php5 php5-gd php5-mysql php5-curl php5-cli php5-cgi php5-dev php5-fpm -f
echo "Attempting to run command sudo apt-get install apache2 libapache2-mod-php5 -f";
echo "If Ubuntu asks you for your sudo/root password, please enter it.";
sudo apt-get install apache2 libapache2-mod-php5 -f
echo "Attempting to run command sudo apt-get install mysql-server mysql-client -f";
echo "If Ubuntu asks you for your sudo/root password, please enter it.";
sudo apt-get install mysql-server mysql-client -f
echo "Attempting to run command sudo apt-get install phpmyadmin.  If Ubuntu asks you for your sudo/root password, please enter it.";
sudo apt-get install phpmyadmin
echo "Attempting to fetch jcameron-key.asc via wget http://www.webmin.com/jcameron-key.asc";
wget http://www.webmin.com/jcameron-key.asc
echo "Attempting to run command sudo apt-key add jcameron-key.asc.";
echo "Ubuntu will now as you to confirm, select YES and enter your password if prompted.";
sudo apt-key add jcameron-key.asc
echo "Attempting to run command sudo apt-get update.  If Ubunutu asks you for your sudo/root password, please enter it.";
sudo apt-get update
echo "Attempting to run command sudo apt-get install webmin -f.  If Ubuntu asks you for your sudo/root password, please enter it.";
sudo apt-get install webmin -f
echo "Assuming the installation of webmin was successful.  Attempting to run command sudo /etc/webmin/start to start webmin.";
sudo /etc/webmin/start
echo "If you need to edit the phpMyadmin config then run : sudo nano /etc/dbconfig-common/phpmyadmin.conf";
echo "If this is a fresh install of Ubuntu (or if you do not know your password), you can run sudo passwd ubuntu to set a new one.";
echo "If you would prefer FTP access to this server instead of SSH, consider running sudo apt-get install proftpd to install an FTP server.";
echo "This script has executed. If you experience an error from apt-get, please make a post @ http://bit.ly/1KvzXX8";
