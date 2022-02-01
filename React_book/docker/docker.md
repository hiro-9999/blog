https://learning.oreilly.com/videos/the-complete-practical/9781803247892/9781803247892-video8_1/

docker --help

docker ps -a

docker exec -it 57 bash

ps -e

docker run mongo

docker inspect 57

docker pull mongo

docker exec -it 57 mongo 

docker stop 57

docker ps

show dbs


docker start 57

docker container prune

docker exec -it 57 bash

docker rm 57

docker run -d -v $PWD/db:/data/db mongo

docker run  wordpress

docker run -d -p 8080:80 wordpress

localhost:808:80

docker run -it busybox

hostname -i

docker inspect hostname ->IPaddress

env

docker run -it ubuntu

docker run mysql


docker run -e MYSQL_ROOT_PASSWORD=test mysql

docker ps

docker exec 49 env

docker hub
phpmyadmin

docker pull phpmyadmin/phpmyadmin

docker images

docker run phpmyadmin/phpmyadmin

docker ps

docker run -p 8080:80 phpmyadmin/phpmyadmin

root/test

docker exec 48 sh

hostname -i

docker inspect hostname

docker run -p 8080:80 -e PMA_HOST=172.17.0.2  phpmyadmin/phpmyadmin

docker run --help



















docker ps


