cat *.jpg | ffmpeg -f image2pipe -r 1 -vcodec mjpeg -i - motion_$tanggal.mp4
mv /www/lalin/cameralog/current/*.mp4 /www/lalin/cameralog/backup/sh /www/lalin/script/backup.sh
