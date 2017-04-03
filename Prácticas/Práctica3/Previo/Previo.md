importamos la clave del repositorio
~~~
cd /tmp/
wget http://nginx.org/keys/nginx_signing.key
apt-key add /tmp/nginx_signing.key
rm -f /tmp/nginx_signing.key
~~~

añadimos el repositorio
~~~
echo "deb http://nginx.org/packages/ubuntu/ lucid nginx" >> /etc/apt/sources.list
echo "deb-src http://nginx.org/packages/ubuntu/ lucid nginx" >> /etc/apt/sources.list
~~~
actualizamos los repositorios
~~~
apt-get update
~~~
instalamos nginx
~~~
apt-get install nginx
~~~
