# Debian LAMP Stack
**L**inux, **A**pache HTTP Server, **M**ySQL/**M**ariaDB, **P**HP/**P**erl/**P**ython

### Docker

> View provision file `./docker-compose.yml` and folder `./docker`

- Apache (HTTPD)  
- PHP (FPM)  
 \- CURL  
 \- MBSTRING  
 \- MySQLi & PDO  
 \- Xdebug  
 \- Zip  
- Composer  
- MySQL (5.6)  
- Adminer  

[https://docker.com/](https://www.docker.com/)  
[https://hub.docker.com/](https://www.docker.com/products/docker-hub)  
[https://compose.docker.com/](https://docs.docker.com/compose/)

---

### Install

> Install [Docker](https://www.docker.com/) to use command `docker` and `docker-compose`.  
Copy files in your project folder or clone this project with [Git](https://git-scm.com/).  
Open console:

    cd /go/in/your/project/folder/
    docker-compose up

> View APP : [http://localhost:8080/](http://localhost:8080/)  
> View ADMINER : [http://localhost:8181/](http://localhost:8181/)

---

### Notes

- Virtualization must be enabled in BIOS
- Hyper-V must be enabled in Windows (in conflict with VirtualBox)