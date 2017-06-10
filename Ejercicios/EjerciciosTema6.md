# Ejercicios Tema 6

## Ejercicio 6.1 Aplicar con iptables una política de denegar todo el tráfico en una de las máquinas de prácticas. Comprobar el funcionamiento. Aplicar con iptables una política de permitir todo el tráfico en una de las máquinas de prácticas. Comprobar el funcionamiento.

* Denegar el tráfico
~~~
iptables -P INPUT ACCEPT
iptables -P FORWARD ACCEPT
iptables -P OUTPUT ACCEPT
iptables -F
iptables -t nat -F
iptables -A INPUT -i lo -j DROP
sudo iptables -A INPUT -i eth0 -j DROP
~~~
Tanto por ssh,http,https probamos y no tenemos ningun acceso


* Aceptar todo el tráfico
~~~
iptables -P INPUT ACCEPT
iptables -P FORWARD ACCEPT
iptables -P OUTPUT ACCEPT
iptables -F
iptables -t nat -F
iptables -A INPUT -i lo -j ACCEPT
iptables -A INPUT -i eth0 -j ACCEPT
~~~

Tanto por ssh,http,https probamos y tenemos acceso

## Ejercicio 6.2 Comprobar qué puertos tienen abiertos nuestras máquinas, su estado, y qué programa o demonio lo ocupa.

Podemos utilizar
~~~
netstat -putna
~~~
que nos muestra:

* Muestra las conexiones para el protocolo especificado que puede ser TCP o UDP
* Lista todos los puertos UDP
* Lista todos los puertos TCP
* Nos muestra el numero de puerto
* Todas las conexiones activas del sistema

tambien prodiamos utilizar 
~~~
nmap localhost
~~~
Nos muestra :

* Puerto 
* Estado (abierto,cerrado,filtrado)
* El demonio,servicio que esta en ese puerto

## Ejercicio 6.3 Buscar información acerca de los tipos de ataques más comunes en servidores web (p.ej. secuestros de sesión). Detallar en qué consisten, y cómo se pueden evitar.

* **Secuestro de sesión**
	* Es una técnica que consiste en interceptar una sesión TCP iniciada entre dos equipos para secuestrarla. Como la comprobación de autentificación se hace sólo al abrir la sesión, un pirata que inicie su ataque con éxito puede controlar la conexión durante toda la sesión.
* **Ataques de inyección SQL**
	* Es una técnica que modificando una cadena de consulta de base de datos mediante la inyección de código en la consulta. El SQLI explota una posible vulnerabilidad donde las consultas se pueden ejecutar al no ser datos validados.
* **Denegación de Servicio**
	* Dos - congelar el funcionamiento de un sitio web con muchas peticiones desde un ordenador
	* DDos(Distribuida)- congelar el funcionamiento de un sitio web con muchas peticiones desde varios ordenadores de la red

	* Existen tres variedades:
		* *Ataques de volumen* donde el ataque intenta desbordar el ancho de banda en un sitio específico.
		* *Ataques de protocolo* donde los paquetes intentan consumir servicios o recursos de la red.
		* *Ataques a aplicaciones* donde las peticiones se hacen con la intención de “explotar” el servidor web, mediante la capa de aplicación.

* **Fuerza Bruta**
	* Básicamente consiste en probar todas las posibles contraseñas hasta romper 

* **Cross Site Scripting (XSS)**
	* Consiste en inyectar scripts (Javascript,VBScript,..) maliciosos en lo que serían sitios web y así utilizar cookies o tokens de sesión de los usuarios de esa web
* **Exploración de puertos**
	* La exploración de puertos se emplea para determinar cuáles de los puertos del equipo se encuentran abiertos en un host de red. Un explorador de puertos es un programa diseñado para encontrar esos puertos.

___
***
- - -	


1. [DDOs](http://mundocontact.com/los-10-tipos-de-ataques-ddos-mas-comunes/)
2. [Ataques](http://blog.hostdime.com.co/tipos-de-ataques-mas-comunes-a-sitios-web-y-servidores/)
3. [Ataques](http://soporte.eset-la.com/kb2907/?locale=es_ES)
4. [Ataques](http://tutorialesenlinea.es/455-los-ataques-mas-comunes-que-afectan-a-los-sitios-web-y-servidores.html)