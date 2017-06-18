# Configuraciones iniciales que desechamos
## Ideas iniciales: conexiones de dispositivos 
### Idea principal
La idea principal para dar el servicio del servidor fue conectar todos los ordenadores y configurar alguno de los routers secundarios que tuviesemos en desuso y configurarlo para que emitiese ua red wifi conectando todos nuestros portatiles por cable, razones por las que se descarto:

* los routers que teniamos no permitian hacer la configuración o teniamos que modificar partes del hardware soldando algunas conexiones.
* las conexiones de uno de los portatil necesitaba un adaptador de conexiones(usb-c) a red(Gigabit Ethernet) que costaba uns 33€, esto se solucionaba conectandolo por wifi

![img](./imagenes/con1.png)


### Segunda idea
Descartando la anterior idea, escogimos optar por una mejora de la anterior la cual fue conectar todos los ordenadores al router y desde el ordenador balanceador de carga que era por el que tendrían que acceder al servicio y montar con una tarjeta wifi interna del portatil o externa(con esta opción se dispondría de acceso a internet) emitiendo una red wifi, los motivos por que la desechamos:

* La prueba que realizamos en clase funciono bien, excepto a una persona con un móvil pero el sistema en si funciono decentemente
* se intento crear un servidor con DNS local para facilitar el acceso y no tener que dar una IP, pero no se obtubieron resultados

![img](./imagenes/con2.png)

### Últimas ideas
Concluimos después de las ideas anteriores era mejor tener una direccion en vez de una IP y por eso discutimos entre las dos siguientes posiciones:

* dejar todos los ordenadores en red en una de nuestra casas
* dejar distribuidos los equipos en cada casa con cada uno de nuestro ISP(Internet Service Provider)

de las que decidimos optar por la distribuirl
os y configurarlos con No-ip para tener una dirección en vez de una IP

![img](./imagenes/con3.png)

## Ideas conexiones de contenedores 
Aquí se muestran las ideas que teniamos en principio para organizar los contenedores y las conexiones entre ellos.
### Idea Inicial de estructura 
Nuestra idea principal era la de tener dos balanceadores uno para servidores apache y otro para las Bases de datos, pero desechamos la idea ya que no se conseguia configurar con HAProxy con varias configuraciones que se probarón
![img](./imagenes/dockers1.png)

### Idea final de la estructura 
La Idea final fue la de Tener un balanceador de servidores, Servidores Apache y dos Bases de datos y uno con un dispositivo RAID
![img](./imagenes/dockersfinal.png)