# Ejercicios Tema 5

## Ejercicio 5.1 Buscar información sobre cómo calcular el número de conexiones por segundo. Para empezar, podéis revisar las siguientes webs: http://bit.ly/1ye4yHz http://bit.ly/1PkZbLJ

La primera página nos muestra como habilitar un módulo de nginx HttpStubStatusModule que nos muestra información :

* Número de todas las conexiones 
* Estadísticas sobre peticiones aceptadas 
* Conexiones por segundo
y en la Segunda página muestra como con el comando
~~~
netstat | grep http | wc -l
~~~
se ve el número de los múltiples peticiones

Existen otras formas de hacerlo por ejemplo:
* con Apache
~~~
apache2ctl status |grep request
~~~
* con la herramienta iptstate
~~~
iptstate -1 -d DirecciónIP -D Puerto 
~~~

## Ejercicio 5.2 Revisar los análisis de tráfico que se ofrecen en: http://bit.ly/1g0dkKj Instalar wireshark y observar cómo fluye el tráfico de red en uno de los servidores web mientras se le hacen peticiones HTTP.
* Se elige la interfaz que utiliza el servidor
* Se hacen peticiones al servidor 
* Comprobamos como van saliendo lineas en el programa son los paquetes capturados de todo el tráfico
* Captura de uso con peticiones http del servidor
![img](./imágenes/wireshark.png)
## Ejercicio 5.3 Buscar información sobre características, disponibilidad para diversos SO, etc de herramientas para monitorizar las prestaciones de un servidor. 
## Para empezar, podemos comenzar utilizando las clásicas de Linux:
## ·  top
## ·  vmstat
## ·  netstat

* **top**
	* Es una herramienta que nos proporciona información de los procesos que se estan ejecutando en ese momento en tiempo real con valores de uso de CPU, memoria, swap. 
* **htop** 
	* Es una herramienta que muesta la misma información que top pero ofreciendo una interfaz visual mas agradable.
* **dstat**
	* Es una herramienta que permite una personalización de lo que se desea monitorizar, mostrando en columnas información referente a discos duros, cpu, paginación, interrupciones y mucho mas.

*  **ps** 
	* Nos muestra información detallada de los procesos del sistema, pudiendo filtrar por usuarios y detalles de procesos. 

* **vmstat**
	* Es un comando que nos permite obtener un detalle general de los procesos, E/S, uso de memoria/swap, estado del sistema y actividad. 

* **Netstat**
	* Es una herramienta de línea de comandos que muestra un listado de las conexiones activas.

Tambien podemos encontrar herramientas como

___
***
- - -	
* [Monitorix](http://www.monitorix.org/documentation.html)
* [Pandorafms](https://blog.pandorafms.org/es/monitorizacion-de-servidor-web/)
* [MUNIN](http://munin-monitoring.org/)
* [Natgios](https://www.nagios.org/)
* [Zabbix](http://www.zabbix.com/)
* [Cacti](http://www.cacti.net/)
* [Zenoss](http://zenoss.com/)

