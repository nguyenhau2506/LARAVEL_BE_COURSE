echo "Ngồi yên chờ em chạy nha mấy ace đẹp trai | xinh gái"
echo "Bước 1 : Em tắt cái apache2 nek"
sudo service apache2 stop

echo "Bước 2 : Giờ em tiến hành tắt mysql nek nha "
sudo service mysql stop

echo "Bước 3 : Giờ em tiến hành tắt redis server nek nha "
sudo service redis-server stop

echo "Bước 4 : Em bắt đầu bước kế cuối. start máy docker lên nek "
docker-compose up