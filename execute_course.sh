dockerId=`docker ps -aqf "name=^laravel_be_course_app*"`
echo $dockerId
docker exec -it $dockerId bash