# Pruebas previas con Docker
## Iniciar contenedores 
* Iniciamos un contenedor con una imagen de ubuntu básica y asignado al puerto 80 al puerto 1111 del host (Instalación por pasos) 
~~~
sudo docker run -d -p 1111:80 -i -t --name server1 ubuntu bash
~~~

![img](https://github.com/amdnr/swap1617/blob/master//Prácticas/Práctica1/Previo/1.png)

![img](https://github.com/amdnr/swap1617/blob/master//Prácticas/Práctica1/Previo/2.png)

  * Actualizamos los repositorios
~~~
apt-get update
~~~
  * Instalamos LAMP (introducimos password para MySQL "root")
~~~
apt-get install apache2 mysql-server php libapache2-mod-php php-mysql
~~~
  * Instalamos herramientas de red (ifconfig)
~~~
apt-get install net-tools
~~~

  * Cambiamos al directorio que apache ha creado
~~~
cd var/www/html/
~~~

  * Creamos un archivo nuevo
~~~
echo "<HTML><BODY>Esto funciona :). ESTO ES SWAP </BODY></HTML>">hola.html
~~~

  * Reiniciamos servicio de Apache
~~~
service apache2 restart
~~~

  * Interfaces de redes en el contenedor
![img](https://github.com/amdnr/swap1617/blob/master/Prácticas/Práctica1/Previo/3.png)

  * En la máquina host(anfitriona) en un navegador web
~~~
http://localhost:1111/hola.html
http://172.17.0.1:1111/hola.html
~~~

  *  y comprobamos que funciona el servidor y hay conexión

![img](https://github.com/amdnr/swap1617/blob/master//Prácticas/Práctica1/Previo/4.png)







