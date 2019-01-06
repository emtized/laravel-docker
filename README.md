<p align="center"><img src="https://github.com/emtized/laravel-docker/blob/master/img/docker_laravel-emtized.png" /></p>
<p align="center">This Repo Will Create new Docker Compose for use in Laravel Apllications.</p>


<p>&nbsp;</p>
<p>&nbsp;</p>

## Pre-requisites

- Docker 
- Docker compose 
- Basic knowledge of Docker.

<p>&nbsp;</p>

## Installation

To get started, the following steps needs to be taken:

- Clone the repo.
- `cd` to the project directory.
- `cd` to `laravel-docker`.
- Run `docker-compose up -d` to start the containers.
- Visit **http://localhost** to see your Laravel application.

<p>&nbsp;</p>

## Checking Containers 

To Check containers Status, Names and other info you can use 

`docker ps`

Will show list on Runnig Containers 

<img src="https://github.com/emtized/laravel-docker/blob/master/img/docker-ps.png" />

## Connectiong to a Container 
You can use container name to connet by using below command : 

`docker exec -it <CONTAINER NAME> sh `


