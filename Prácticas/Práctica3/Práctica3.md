
# Configurar una máquina e instalarle el nginx como balanceador de carga
## Configuramos los dos archivos de configuración

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/3.png)
## Archivo /etc/nginx/conf.d/default.conf
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/2.png)
## Archivo /etc/nginx/nginx.conf
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/1.png)

## Reiniciamos servicio
~~~
service nginx restart
~~~
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/6.jpg)

## Comprobamos que el balanceador funciona bien
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/4.png)

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/5.png)

#Configurar una máquina e instalarle el haproxy como balanceador de carga

## Configuramos archivo de configuración
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/10.jpg)


## Reiniciamos servicio
~~~
/usr/sbin/haproxy -f /etc/haproxy/haproxy.cfg
~~~
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/6.jpg)
	
## Comprobamos que el balanceador funciona bien
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/7.jpg)

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/8.jpg)


# Someter a la granja web a una alta carga, teniendo primero nginx y después haproxy. 

## nginx

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/9_1.jpg)

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/9_2.jpg)


## Haproxy


![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/10.jpg)


![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/10_1.jpg)

## Comparación

<table summary="Pruebas Apache Benchmark con Nginx y Haproxy">
	 	<thead>
		<tr>
<th scope="col"></th>
<th scope="col">Nginx</th>
<th scope="col">Haproxy</th>
		   </tr>
	       </thead>
<tbody>
		 <tr> 
<th>Time taken for tests:</th>
<td>0.159 seconds</td>
<td> 0.149 seconds </td>
		</tr>
		  
</tbody>
</table>


	
# Extra - lighttpd


## Configuramos archivo de configuración

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/12.jpg)

## Reiniciamos servicio
~~~
service lighttpd restart
~~~
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/13.jpg)

## Comprobamos que el balanceador funciona bien
![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/14.jpg)

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/15.jpg)

## Someter a la granja web a una alta carga

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/16.jpg)

![img](https://github.com/donas11/swap1617/blob/master/Prácticas/Práctica3/17.jpg)


## Comparación

<table summary="Pruebas Apache Benchmark con Nginx y Haproxy">
	 	<thead>
		<tr>	
<th scope="col"></th>
<th scope="col">Nginx</th>
<th scope="col">Haproxy</th>
<th scope="col">lighttpd</th>
	   </tr>
	       </thead>
	       <tbody>
		 <tr> 
<th>Time taken for tests:</th>
<td>0.159 seconds</td>
<td> 0.149 seconds </td>
<td> 0.171 seconds </td>
		</tr>
		  
	      </tbody>
	</table>
