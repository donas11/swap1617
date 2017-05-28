si ejecutamos el comando

~~~
netstat -tulpn
~~~

podemos observar que el servidor no escucha en el puerto 443
al ejecutar

~~~
a2enmod ssl
~~~

y 

~~~
service apache2 restart
~~~
podemos comprobar otra vez con 

~~~
netstat -tulpn
~~~

que el servidor ya si escucha en el puerto 443


creación de certificados
directorio

~~~
mkdir /etc/apache2/ssl
~~~
certificado

~~~
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/apache2/ssl/apache.key -out /etc/apache2/ssl/apache.crt
~~~
introducimos los datos que nos pide

copiamos los certificados al servidor 2

~~~
scp /etc/apache2/ssl/apache.key 172.17.0.3:/tmp/keys/
~~~



Modificamos el archivo /etc/apache2/sites-available/default-ssl.conf
agregando las lineas
~~~
SSLCertificateFile /etc/apache2/ssl/apache.crt
SSLCertificateKeyFile /etc/apache2/ssl/apache.key
~~~
Activamos el sitio default--ss
~~~
a2ensite default-ssl
~~~
reiniciamos apache
~~~
service apache2 reload
~~~



![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica4/Previo/activacionssl.jng)


configuracion nginx /etc/nginx/conf.d/default.conf

~~~
upstream apaches {
    server 172.17.0.2;
    server 172.17.0.3;
}

server{

    listen 80;
    listen 443 ssl;
    ssl on;
    ssl_certificate /tmp/keys/apache.crt;
    ssl_certificate_key /tmp/keys/apache.key;


    server_name balanceador;

    access_log /var/log/nginx/balanceador.access.log;
    error_log /var/log/nginx/balanceador.error.log;
    root /var/www/;

    location /
    {
       proxy_pass http://apaches;
       proxy_set_header Host $host;
       proxy_set_header X-Real-IP $remote_addr;
       proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
       proxy_http_version 1.1;
       proxy_set_header Connection "";
    }
}

~~~


Guardamos el certicado en un archivo pem para introducirlo en la configuración de haproxy 

~~~
cat /tmp/keys/apache.crt /tmp/keys/apache.key | tee /tmp/keys/apache.pem
~~~

Configuración haproxy /etc/haproxy/haproxy.cfg


~~~
global
        daemon
        maxconn 256
        tune.ssl.default-dh-param 2048
defaults
        mode    http
        timeout connect 4000
        timeout client  42000
        timeout server  43000
        errorfile 400 /etc/haproxy/errors/400.http
        errorfile 403 /etc/haproxy/errors/403.http
        errorfile 408 /etc/haproxy/errors/408.http
        errorfile 500 /etc/haproxy/errors/500.http
        errorfile 502 /etc/haproxy/errors/502.http
        errorfile 503 /etc/haproxy/errors/503.http
        errorfile 504 /etc/haproxy/errors/504.http
frontend http-in
        bind *:80
        bind *:443 ssl crt /tmp/keys/apache.pem
        redirect scheme https if !{ ssl_fc }
        default_backend servers
backend servers
        server m1 172.17.0.2 maxconn 32
        server m2 172.17.0.3 maxconn 32
~~~