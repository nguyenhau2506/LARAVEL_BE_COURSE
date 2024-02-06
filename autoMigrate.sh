dockerId=`docker ps -aqf "name=^laravel_be_course-app*"`
echo $dockerId
docker exec -it $dockerId bash -c "cd course && composer install && php artisan migrate"