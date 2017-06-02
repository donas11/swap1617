~~~
sudo docker run -d -p 1111:80 -p 1112:22 -p 1113:443 -p 1114:3306 -i -t --name ApacheTrabajo1 ubuntu bash
~~~

<table cellspacing="0" border="0">
	<colgroup width="92"></colgroup>
	<colgroup width="128"></colgroup>
	<colgroup width="85"></colgroup>
	<tr>
		<td height="17" align="center"><b>Puertos Host</b></td>
		<td align="center"><b>Puertos contenedor</b></td>
		<td align="center"><b>Utilizado para</b></td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1111" sdnum="3082;">1111</td>
		<td align="center" sdval="80" sdnum="3082;">80</td>
		<td align="center">HTTP</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1112" sdnum="3082;">1112</td>
		<td align="center" sdval="22" sdnum="3082;">22</td>
		<td align="center">SSH</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1113" sdnum="3082;">1113</td>
		<td align="center" sdval="443" sdnum="3082;">443</td>
		<td align="center">HTTPS</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1114" sdnum="3082;">1114</td>
		<td align="center" sdval="3306" sdnum="3082;">3306</td>
		<td align="center">MySQL</td>
	</tr>
</table>

~~~
apt-get update
~~~
~~~
apt-get install apache2 php libapache2-mod-php php-mysql
~~~
~~~
apt-get install openssh-server openssh-client
~~~
~~~
apt-get install rsync 
~~~
~~~
apt-get install cron
~~~

~~~
sudo docker export --output=ApacheTrabajo.tar ApacheTrabajo
~~~

~~~
sudo docker images
~~~

REPOSITORY                TAG                 IMAGE ID            CREATED             SIZE


~~~
sudo docker run -d -p 1115:80 -p 1116:22 -p 1117:443 -p 1118:3306 -i -t --name ApacheTrabajo2 ce51d2645415 bash
~~~

<table cellspacing="0" border="0">
	<colgroup span="3" width="85"></colgroup>
	<tr>
		<td height="17" align="center"><b>Puertos Host</b></td>
		<td align="center"><b>Puertos contenedor</b></td>
		<td align="center"><b>Utilizado para</b></td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1115" sdnum="3082;">1115</td>
		<td align="center" sdval="80" sdnum="3082;">80</td>
		<td align="center">HTTP</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1116" sdnum="3082;">1116</td>
		<td align="center" sdval="22" sdnum="3082;">22</td>
		<td align="center">SSH</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1117" sdnum="3082;">1117</td>
		<td align="center" sdval="443" sdnum="3082;">443</td>
		<td align="center">HTTPS</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1118" sdnum="3082;">1118</td>
		<td align="center" sdval="3306" sdnum="3082;">3306</td>
		<td align="center">MySQL</td>
	</tr>
</table>

~~~
sudo docker run -d -p 1119:80 -p 1120:22 -p 1121:443 -p 1122:3306 -i -t --name ApacheTrabajo3 ce51d2645415 bash
~~~

<table cellspacing="0" border="0">
	<colgroup span="3" width="85"></colgroup>
	<tr>
		<td height="17" align="center"><b>Puertos Host</b></td>
		<td align="center"><b>Puertos contenedor</b></td>
		<td align="center"><b>Utilizado para</b></td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1119" sdnum="3082;">1119</td>
		<td align="center" sdval="80" sdnum="3082;">80</td>
		<td align="center">HTTP</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1120" sdnum="3082;">1120</td>
		<td align="center" sdval="22" sdnum="3082;">22</td>
		<td align="center">SSH</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1121" sdnum="3082;">1121</td>
		<td align="center" sdval="443" sdnum="3082;">443</td>
		<td align="center">HTTPS</td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1122" sdnum="3082;">1122</td>
		<td align="center" sdval="3306" sdnum="3082;">3306</td>
		<td align="center">MySQL</td>
	</tr>
</table>

~~~
sudo docker run -d -p 1123:3306 -i -t --name BDTrabajo 76d3a3bc7774 bash
~~~

<table cellspacing="0" border="0">
	<colgroup span="3" width="85"></colgroup>
	<tr>
		<td height="17" align="center"><b>Puertos Host</b></td>
		<td align="center"><b>Puertos contenedor</b></td>
		<td align="center"><b>Utilizado para</b></td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1123" sdnum="3082;">1123</td>
		<td align="center" sdval="3306" sdnum="3082;">3306</td>
		<td align="center">MySQL</td>
	</tr>
</table>

~~~
sudo docker run -d -p 3306:3306 -i -t --name BDTrabajo2 1d5a2e172b27 bash
~~~

<table cellspacing="0" border="0">
	<colgroup span="3" width="85"></colgroup>
	<tr>
		<td height="17" align="center"><b>Puertos Host</b></td>
		<td align="center"><b>Puertos contenedor</b></td>
		<td align="center"><b>Utilizado para</b></td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="3306" sdnum="3082;">3306</td>
		<td align="center" sdval="3306" sdnum="3082;">3306</td>
		<td align="center">MySQL</td>
	</tr>
</table>
~~~
sudo docker run -d -p 1136:3306 -i -t --name BDTrabajo4 1d5a2e172b27 bash
~~~

<table cellspacing="0" border="0">
	<colgroup span="3" width="85"></colgroup>
	<tr>
		<td height="17" align="center"><b>Puertos Host</b></td>
		<td align="center"><b>Puertos contenedor</b></td>
		<td align="center"><b>Utilizado para</b></td>
	</tr>
	<tr>
		<td height="17" align="center" sdval="1123" sdnum="3082;">1136</td>
		<td align="center" sdval="3306" sdnum="3082;">3306</td>
		<td align="center">MySQL</td>
	</tr>
</table>


##Configuarción SSH copia autom	tica
~~~
keygen -t rsa
~~~

~~~
ssh# ssh-copy-id -i ~/.ssh/id_rsa 172.17.0.2
~~~




~~~
sudo docker run -d -p 2222:80 -p 2223:443 -i -t --name Balanceador haproxy bash
~~~



~~~
sudo docker run -d -p 2236:3036 -i -t --name=BalanceadorBD ebf2fa43b614 bash
~~~





sudo docker run —name=nginx_BD -d -p 3306:3306 -p 10089:22 -p 11080:80 -it nginx bash





#Usuario BD permitido

~~~
use mysql;
~~~

~~~
CREATE USER 'root'@'http://alexjazztel.freedynamicdns.net/' IDENTIFIED BY '123a123a';
~~~

~~~
GRANT ALL PRIVILEGES ON *.* TO 'root'@'http://alexjazztel.freedynamicdns.net/';
~~~

~~~
SELECT host FROM mysql.user WHERE User = 'root';
~~~

~~~
flush privileges;
~~~

* Reiniciamos mysql
~~~
service mysql restart
~~~


#RAID
sudo docker run --name=ApacheRAID --privileged -d -p 11111:80 -p 11112:443 -p 11113:22 --dvice /dev/sdb --device /dev/sdb2:/dev/sdc -it 11d359dad1c2 bash



#dar acceso desde galera

~~~
mysql --port=3306 --host=127.0.0.1 -u root -p
~~~

~~~
use mysql;
~~~

~~~
UPDATE user SET password=PASSWORD('123a123a') WHERE user=root
~~~




~~~
Country Name (2 letter code) [AU]:ES
State or Province Name (full name) [Some-State]:Granada
Locality Name (eg, city) []:Granada
Organization Name (eg, company) [Internet Widgits Pty Ltd]:KillosCompany®
Organizational Unit Name (eg, section) []:Killos
Common Name (e.g. server FQDN or YOUR name) []:KillosSWAP
Email Address []:info@killos.es
~~~