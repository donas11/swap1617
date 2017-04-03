# Ejercicios Tema 2

## Ejercicio 2.1 Calcular la disponibilidad del sistema si tenemos dos réplicas de cada elemento (en total 3 elementos en cada subsistema). 
* Disponibilidades iniciales 

<table summary="Disponibilidad del sistema">
  <thead>
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Componente</th>
      <th scope="col">Disponibilidad</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>Table data 1</td>
      <td>Table data 2</td>
    </tr>
     <tr> <td>1</td><td>Web </td><td> 85% </td></tr>
	   <tr><td>2 </td><td> Aplicación   </td><td> 90% </td> </tr>
	   <tr><td>3 </td><td> Base de datos   </td><td>99.9% </td> </tr>
	   <tr><td>4 </td><td> DNS   </td><td> 98%  </td> </tr>
	   <tr><td>5 </td><td> Cortafuegos   </td><td> 85% </td> </tr>
	   <tr><td>6 </td><td> Switch   </td><td> 99% </td> </tr>
	   <tr><td>7</td><td> centro de datos  </td><td> 99.99%  </td> </tr>
	   <tr><td>8</td><td> Proveedor de Servicios de Internet  </td><td> 95% </td> </tr>

</tbody>
</table>

 	* Disponibilidad del servidor :  
		As = Ac<sub>1</sub>  x Ac<sub>2</sub>  x Ac<sub>3</sub>  x Ac<sub>4</sub>  x Ac<sub>5</sub>  x Ac<sub>6</sub>  x Ac<sub>7</sub> x Ac<sub>8</sub>
		As = 85% x 90% x 99.9% x 98% x 85% x 99% x 99.99% x 95% = 59.87%

* Con 2 elementos en cada subsistema 

	  |Número |  Componente | Disponibilidad |
	  |----------------| ---------------------- | ------------------------: |
	  |1| Web                    | 97.75%                         |
	  |2| Aplicación   | 99%   |
	  |3| Base de datos   | 99.9999%   |
	  |4| DNS   | 99.96%   |
	  |5| Cortafuegos   | 97.75%   |
	  |6| Switch   | 99.99%   |
	  |7| centro de datos   | 99.99%   |
	  |8| Proveedor de Servicios de Internet   | 99.75%   |

 	* Disponibilidad del servidor :  
		As = Ac~1~  * Ac~2~  * Ac~3~  * Ac~4~  * Ac~5~  * Ac~6~  * Ac~7~ * Ac~8~ 
		As = 97.75% * 99% * 99.9999% * 99.96% * 97.75% * 99.99% * 99.99% * 99.75% = 94.3%
		A~(1->2)mejora~=34.43 %
		

* Con 3 elementos en cada subsistema 
	* En cada subsistema (General)
	As = Ac~n-1~ + ( (1 – Ac~n-1~) * Ac~n~ )
	As = Ac~1~ + ( (1 – Ac~1~) * Ac~2~ )
	* En cada subsistema (específico) 
	As~3web~=97.75% + ((1 -97.75%) *85%)=99.6625%
	As~3app~=99% + ((1 -99%) *90%)=99.9%
	As~3BD~=99.9999% +( (1 -99.9999%) *99.9%)=99.9999999%
	As~3DNS~=99.96% + ((1 -99.96%) *98%)=99.9992%
	As~3FireWall~=97.75% +( (1 -97.75%) *85%)=99.6625%
	As~3Switch~=99.99% + ((1 -99.99%) *99%)= 99.9999%	
	As~3DataCenter~=99.99%
	As~3ISP~=99.75% + ((1 -99.75%) *95%)=99.875%		
	* En Total
	As~3Total~ =99.6625% * 99.9% * 99.9999999% * 99.9992% * 99.6625% * 99.9999% * 99.99% * 99.9875%	
	As~3Total~=99.2035%
	A~(1->3)mejora~=39.3335%
	A~(2->3)mejora~=4.9035 %


##  Ejercicio 2.2: Buscar frameworks y librerías para diferentes lenguajes que permitan hacer aplicaciones altamente disponibles con relativa facilidad. Como ejemplo, examina [PM2](https://github.com/Unitech/pm2) que sirve para administrar clústeres de NodeJS. 
* Microsoft Operations Framework
* Apache Helix
* WebControl CMS
* WebSphere 
* Oracle ADF

## Ejercicio 2.3: ¿Cómo analizar el nivel de carga de cada uno de los subsistemas en el servidor? Buscar herramientas y aprender a usarlas. ...¡o recordar cómo usarlas! 
* __**Linux**__
	* **top** Esta orden proporciona una visión continuada de la actividad del procesador en tiempo real, muestra las tareas que más uso hacen de la CPU, y tiene una interfaz interactiva para manipular procesos. 
	* **mpstat** Muestra estadísticas del procesador (o procesadores) del sistema junto con la media global de todos los datos mostrados. Permite el uso de parámetros para definir la cantidad de tiempo entre cada toma de datos y el número de informes que se desean
	* **vmstat** se puede encontrar en la mayoría de los sistemas operativos UNIX. Sirve para supervisar el sistema mostrando información de memoria pero también acerca de procesos, E/S y CPU. 	
	* **free** muestran información acerca del uso de memoria del sistema, en caso de que queramos centrar la monitorización únicamente en el uso de memoria, sin distraer la atención con otra información adicional, podemos utilizar órdenes específicas para esta labor.
	* **sysstat** 
		* El comando ***sar*** muestra las estadísticas de todo el sistema red, disco, memoria y procesador. y el comando 
		*  El comando ***iostat*** para informar las estadísticas de entrada y salida de disco, y para generar medidas de rendimiento, uso, longitudes de cola, tasas de transacciones y tiempo de servicio.
* __**Windows**__
		* Administrador de tareas
		* Monitor de rendimiento
* __**OS-X**__
		* Monitor de Actividad del sistema
		* iStat

## Ejercicio 2.4: Buscar ejemplos de balanceadores software y hardware(productos comerciales). Buscar productos comerciales para servidores de aplicaciones. Buscar productos comerciales para servidores de almacenamiento. 
* __**Balanceadores software**__
* __**Balanceadores hardware**__
	* RadWare
	* Fortinet
	* Zevenet
* __**Servidores de aplicaciones**__
	* Tomcat
	* WildFly conocido anteriormete como Jboss	
	* Oracle WebLogic
	* Glassfish
* __**Servidores de almacenamiento**__

___
***
- - -	
1. [Microsoft Operations Framework](https://msdn.microsoft.com/es-es/library/aa560207.aspx)
2. [Apache Helix](http://helix.apache.org/)
3. [WebControl CMS](http://www.webcontrol.es/es/vision-global/que-es-webcontrol-cms/)
4. [WebSphere Portal](https://www-01.ibm.com/marketing/iwm/tnd/demo.jsp?id=WebSphere+Dashboard+Framework+Mar07&locale=es&ibm-refresh=Refresh)
5. [Oracle ADF](http://www.oracle.com/technetwork/developer-tools/adf/overview/index.html)
6. [Play](https://www.playframework.com/)
7. [Performance Monitor](https://technet.microsoft.com/es-es/library/cc749115(v=ws.11).aspx)
8. [iStat Menus](https://bjango.com/mac/istatmenus/#)
9. [vmstat](https://docs.oracle.com/cd/E24842_01/html/E23086/spmonitor-22.html#scrolltoc)
10. [iostat](https://docs.oracle.com/cd/E24842_01/html/E23086/spmonitor-4.html)
11. [sar](https://docs.oracle.com/cd/E24842_01/html/E23086/spmonitor-8.html#scrolltoc)
12. [tomcat](http://tomcat.apache.org/)
13. [WildFly](https://docs.jboss.org/author/display/WFLY10/Documentation?_sscc=t)
14. [Oracle Weblogic](http://www.oracle.com/technetwork/middleware/weblogic/overview/index-085209.html)
15. [Glassfish](https://glassfish.java.net/)
16. [RadWare](https://www.radware.com/products/alteon/)
17. [Fortinet](https://www.fortinet.com/products/application-delivery-controllers/fortiadc.html)
18. [Zevenet](https://www.zevenet.com/products/enterprise/hardware/)