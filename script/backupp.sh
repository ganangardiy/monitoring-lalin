tanggal=`date | awk '{print $3$2}'`
cd /www/lalin/cameralog/current/
cat *.jpg | ffmpeg -f image2pipe -r 1 -vcodec mjpeg -i - motion.mp4