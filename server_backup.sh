#chmod 750 this script
#place this script within /server_backup/server_backup.sh
#Copy your backup to the root of your system's file tree
#Execute this command to restore your tarball:  tar xvpfz backup.tgz -C /
#Documentation for this script: http://ubuntuforums.org/showthread.php?t=35087
sudo tar czf /server_backup.tar.gz --exclude=/server_backup.tar.gz --exclude=/home --exclude=/media --exclude=/dev --exclude=/mnt --exclude=/proc --exclude=/tmp /.
