#Prueba de instalar ZenLoadBalancer en un contenedor Docker
Iniciamos un contenedor de Debian
~~~
sudo docker run -i -t --name ZendLoadB debian bash
sudo docker attach ZendLoadB
~~~

instalamos herramientas necesarias
~~~
apt-get update
apt-get install net-tools
apt-get install unzip
apt-get install wget
apt-get install jed
~~~

descargamos,descomprimimos e instalamos
~~~
wget https://github.com/zevenet/zlb/archive/master.zip
unzip master.zip
sh /zlb-master/zlb-debian-installer.sh
~~~

vemos en /zlb-master/logs/zenloadbalancer.log
~~~
Wed Jun  3 14:17:27 UTC 2017 -  -  -  - running '/sbin/ip link set  down'
Wed Jun  3 14:17:27 UTC 2017 -  -  -  - running '/sbin/ip link set  up' 
Wed Jun  3 14:17:27 UTC 2017 -  -  -  - sending '/usr/bin/arping -c 2 -A -I  ' 
~~~
tiene problemas para montar la interfaz de red o no tiene permisos suficientes y si intentamos reiniciar el servicio:
~~~
service zenloadbalancer restart
~~~
nos muestra:
~~~
netmask: error fetching interface information: Device not found
/usr/bin/arping: option requires an argument -- 'I'
Usage: arping [-fqbDUAV] [-c count] [-w timeout] [-I device] [-s source] destination
  -f : quit on first reply
  -q : be quiet
  -b : keep broadcasting, don't go unicast
  -D : duplicate address detection mode
  -U : Unsolicited ARP mode, update your neighbours
  -A : ARP answer mode, update your neighbours
  -V : print version and exit
  -c count : how many packets to send
  -w timeout : how long to wait for a reply
  -I device : which ethernet device to use
  -s source : source ip address
  destination : ask for what ip address
~~~
hay un error con la interfaz y no la encuetra

Al parecer leyendo en un articulo Zenloadbalancer debe tener dos interfaces de red. Por lo tanto se crea otra red en Docker
~~~
sudo docker network create newred
~~~
y conectamos al contenedor a ella

~~~
sudo docker network connect newred ZendLoadB
~~~

aún así sigue el problema de que no reconoce la interfaz.
al parecer ZenloadBalancer debe tener la configuración static de la interfaz
~~~
jed /etc/network/interfaces
~~~

añado
~~~
auto eth1
iface eth1 inet static
    address 172.17.0.2
    netmask 255.255.0.0
    gateway 172.17.0.1
~~~

reiniciamos servicio
~~~
service networking restart
~~~

volvemos a probar instalar
~~~
sh /zlb-master/zlb-debian-installer.sh
~~~
sin ningun resultado



