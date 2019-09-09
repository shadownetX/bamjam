## THBDT-full

**Requirements:**

* [Docker](https://www.docker.com/get-docker)
* [Docker-compose](https://docs.docker.com/compose/gettingstarted/)

> You could use ```ctop``` for monitoring docker containers. Please visit https://github.com/bcicen/ctop

**About this stack:**

* **[nginx:1.15-alpine]** :  Use ```http://www.thbdt.primary``` with this configuration : ```sudo sh -c "echo '127.0.0.1   www.thbdt.primary' >> /etc/hosts"```
* **[php:7.3-fpm-alpine]** 
* **[mysql:lastest]**
* **[node:10-alpine]**

### Manipulate containers

| **For short** | **Custom command**                  | **Purpose**                           |
|---------------|-------------------------------------|---------------------------------------|
| BUILD         | ```bin/app build```                 | Build the app                         |
| RUN           | ```bin/app run```                   | Run the app                           |
| STOP          | ```bin/app stop```                  | Stop the app                          |
| DESTROY       | ```bin/app destroy```               | Destroy the app                       |
| INSTALL       | ```bin/app install```               | Install the app                       |
| EXPELLIARMUS  | ```bin/app expelliarmus```          | Prune docker env                      |
| AVADAKEDAVRA  | ```bin/app avadakedavra```          | Stop then destroy containers + images |

### Access to containers

| **For short** | **Custom command**                 | **Purpose**                                            |
|---------------|------------------------------------|--------------------------------------------------------|
| EXEC-PHP      | ```bin/app exec-php [ARGS]```      | Execute a command inside the php container             |
| EXEC-PHP-ROOT | ```bin/app exec-php-root [ARGS]``` | Execute a command as ROOT inside the php container     |
| EXEC-NODE     | ```bin/app exec-node [ARGS]```     | Execute a command inside the node container            |
| SH            | ```bin/app sh```                   | Access sh                                              |
| COMPOSER      | ```bin/app composer [ARGS]```      | Execute composer                                       |
| SYMFONY       | ```bin/app console [ARGS]```       | Execute Symfony's console (bin/console)                |

### Informations about containers

| **For short** | **Custom command**                           | **Purpose**                           |
|---------------|----------------------------------------------|---------------------------------------|
| PS            | ```bin/app ps```                             | List all running containers           |
