## THBDT-full

**Requirements:**

* [Docker](https://www.docker.com/get-docker)
* [Docker-compose](https://docs.docker.com/compose/gettingstarted/)

> You could use ```ctop``` for monitoring docker containers. Please visit https://github.com/bcicen/ctop

**About this stack:**

* **[nginx:1.16-alpine]** :  Use ```https://www.thbdt.primary``` with this configuration : ```sudo sh -c "echo '127.0.0.1   www.thbdt.primary' >> /etc/hosts"```
* **[php:7.3-fpm-alpine]** 
* **[memcached:latest]** 
* **[mysql:lastest]**

### Manipulate containers

| **For short** | **Custom command**                  | **Purpose**                          |
|---------------|-------------------------------------|---------------------------------------|
| BUILD         | ```bin/docker build```              | Build the app                         |
| RUN           | ```bin/docker run```                | Run the app                           |
| STOP          | ```bin/docker stop```               | Stop the app                          |
| DESTROY       | ```bin/docker destroy```            | Destroy the app                       |
| INSTALL       | ```bin/docker install```            | Install the app                       |
| EXPELLIARMUS  | ```bin/docker expelliarmus```       | Prune docker env                      |
| AVADAKEDAVRA  | ```bin/docker avadakedavra```       | Stop then destroy containers + images |

### Access to containers

| **For short** | **Custom command**                    | **Purpose**                                            |
|---------------|---------------------------------------|--------------------------------------------------------|
| EXEC-PHP      | ```bin/docker exec-php [ARGS]```      | Execute a command inside the php container             |
| EXEC-ROOT     | ```bin/docker exec-php-root [ARGS]``` | Execute a command as ROOT inside the php container     |
| SH            | ```bin/docker sh```                   | Access sh                                              |
| COMPOSER      | ```bin/docker composer [ARGS]```      | Execute composer                                       |
| SYMFONY       | ```bin/docker console [ARGS]```       | Execute Symfony's console (bin/console)                |

### Informations about containers

| **For short** | **Custom command**                           | **Purpose**                           |
|---------------|----------------------------------------------|---------------------------------------|
| PS            | ```bin/docker ps```                          | List all running containers           |
