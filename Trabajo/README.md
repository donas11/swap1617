# Recreación de las prácticas de SWAP en equipos reales.
 
Nuestro trabajo consiste en recrear un servidor distribuido, accesible desde Internet, con el objetivo de observar la importancia y el funcionamiento de las herramientas que hemos utilizado en el curso agregando la tecnología Docker.
 
Para ello, hemos puesto a punto cuatro máquinas, distribuidas por la ciudad, emulando lo que sería un GSLB con balanceo basado en DNS.
Una de estas máquinas será el balanceador de carga, el cual se encargará de repartir el grueso de las peticiones entre las máquinas preparadas para tal efecto. Cada máquina tendrá unos cuantos servidores web (Apache) y una base de datos (MariaDB) utilizando contenedores de Docker.

En esta carpeta del repositorio estará toda la información referente al trabajo que hemos hecho.

Para ver la memoria completa del trabajo, ver [Memoria.md](https://github.com/donas11/swap1617/tree/master/Trabajo/Memoria.md)

Para ver la presentación del trabajo, ver [Presentación.pdf](https://github.com/donas11/swap1617/tree/master/Trabajo/Presentación.pdf)

Trabajo realizado por:
* [Julián Cifuentes Jiménez](https://github.com/juliancifuentes95)
* [José Álvaro Garrido López](https://github.com/alvarospunk)
* [Alejandro Francisco Alguacil Camarero](https://github.com/alguacilaguamara)
* [Alejandro Manuel do Nascimento Rodríguez](https://github.com/donas11)
