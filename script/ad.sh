#!/bin/bash
#Script ini digunakan untuk backup harian. Backup meliputi backup gambar, backup video dan backup database


datebackup=`cat /www/injen/logcam/current/date.txt`
tglbackup=`cat /www/injen/logcam/current/date.txt | awk '{print $1}' `
tgl=`date | awk '{print $3}'`
date=`date | awk '{print $3$2$6}'`


if [ $tglbackup != $tgl ]; then
#membuat folder untuk backup hasil tangkapan webcam 
mkdir /www/injen/logcam/backup/$datebackup
mv /www/injen/logcam/current/*.* /www/injen/logcam/backup/$datebackup

#konvert video
cd /www/injen/logcam/backup/$datebackup
rm motion_$datebackup.mp4
cat *.jpg | ffmpeg -f image2pipe -r 1 -vcodec mjpeg -i - motion_$datebackup.mp4 

#backup database log
mysqldump -u root --password=dewi injen log > /www/injen/backuplog/backuplog.sql

#set tanggal
echo $date > /www/injen/logcam/current/date.txt 

fi


