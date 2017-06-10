## Descripción
El objetivo de esta página web es gestionar la entrada y salida de usuarios registrados, guardar datos de aspectos técnicos del servidor y del cliente, y ver porcentajes sobre los datos guardados

## Objetivos
* El sistema almacenará datos
* El sistema mostrará datos de una forma visual
* El sistema permitirá acceder mediante usuario y contraseña
* El sistema permitirá salir 

## Descripción de los implicados
### Entorno de usuario
Los usuarios directos de la aplicación a desarrollar es el usuario registrado que dispone de todas las opciones de la pagina web

### Resumen de los implicados

<table border="0" cellspacing="0" cellpadding="0" class="ta1"><colgroup><col width="134"/><col width="194"/><col width="99"/><col width="99"/></colgroup><tr class="ro1"><td style="text-align:left;width:30.76mm; " class="ce3"><p>Nombre</p></td><td style="text-align:left;width:44.38mm; " class="ce3"><p>Descripción </p></td><td style="text-align:left;width:22.58mm; " class="ce3"><p>Tipo</p></td><td style="text-align:left;width:22.58mm; " class="ce3"><p>Responsabilidad</p></td></tr><tr class="ro1"><td style="text-align:left;width:30.76mm; " class="Default"><p>Usuario registrado </p></td><td style="text-align:left;width:44.38mm; " class="Default"><p>Representa un usuario registrado</p></td><td style="text-align:left;width:22.58mm; " class="Default"><p>Usuario del sistema</p></td><td style="text-align:left;width:22.58mm; " class="Default"><p>Iniciar sesión, cerrar sesión, guardar datos y visualizar porcentajes</p></td></tr></table>

### Criterios de éxito
* Usuario registrado: Que el sistema le permita utilizar la navegación de forma sencilla y rápida. 


### Requisitos Funcionales
* **RF-1. Iniciar sesión** El sistema realizará una consulta 
	* RF-1.1. El sistema será capaz de responder al entrar
* **RF-2. Guardar Datos** El sistema guardará los datos
	* RF-2.1. El sistema será capaz de almacenar los datos
* **RF-3. Ver estadísticas** El sistema mostrará los datos
	* RF-3.1. El sistema será capaz de mostrar porcentajes de datos guardados
* **RF-4. Cerrar sesión** El sistema eliminará los datos 
	* RF-4.1. El sistema borrará todos los datos utilizados en la sesión 

### Requisitos No Funcionales
* **RNF1** Es necesario de conocimientos iniciales de navegación por web
* **RNF2** No es necesario documentación al usuario
* **RNF3** Es necesario la utilización de un navegador de Internet
* **RNF4** El sistema debe ser estable y escalable
* **RNF5** El sistema debe soportar un número indefinido de usuarios
simultáneamente
* **RNF6** El sistema debe de ser veloz y con los mínimos tiempos de
carga posibles.


### Requisitos de Información
* **RI1 Iniciar Sesión**
	* Información de usuario 
	* **Contenido:** un usuario esta identificado por su usuario y la contraseña
	* **Requisitos asociados:** RF-1, RF-2,RF-3,RF-4

* **RI2 Datos**
	* Información del servidor y del cliente
	* **Contenido:** Información destinada para guardar direcciones IP, sistemas operativos, navegadores tamaños de pantalla y usuario
	* **Requisitos asociados:** RF2,RF3



## Diagramas

### Diagramas de caso de uso
![img](../imágenes/Casosdeuso.png)


### Descripción extendida de los casos de usos
#### Iniciar sesión

<table class="tg">
  <tr>
    <th class="tg-9hbo">Casos de uso</th>
    <th class="tg-yw4l" colspan="4">Iniciar sesión</th>
    <th class="tg-yw4l" colspan="2">CU-1</th>
  </tr>
  <tr>
    <th class="tg-yw4l">Actores</th>
    <td class="tg-yw4l" colspan="6"> Usuario</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Tipo</th>
   <td class="tg-yw4l" colspan="2">Primario</td>
   <td class="tg-yw4l" colspan="2">Esencial</td>
   <td class="tg-yw4l" colspan="2">Básico</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Referencias</th>
  <td class="tg-yw4l" colspan="6">RF-1.1</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Precondición</th>
    <td class="tg-yw4l" colspan="6">El usuario debe de estar dado de alta </td>
  </tr>
  <tr>
    <th class="tg-yw4l">Postcondición</th>
    <td class="tg-yw4l" colspan="6">El usuario accede </td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="7">Propósito</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="7">Iniciar Sesión en la plataforma</td>
  </tr>
</table>


<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="7">Resumen</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="7">El usuario inicia sesión con su usuario y contraseña</td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="8">Curso Normal (Básico)</th>
  </tr>
  <tr>
    <td class="tg-yw4l">1</td>
    <td class="tg-yw4l" colspan="3">Usuario entra en la página web </td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l" colspan="3">Usuario introduce usuario</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">3</td>
    <td class="tg-yw4l" colspan="3">Usuario introduce contraseña</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">4</td>
    <td class="tg-yw4l" colspan="3">Usuario pulsa Entrar</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>

  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
    <td class="tg-yw4l">5</td>
    <td class="tg-yw4l" colspan="3">El sistema comprueba que los datos están bien</td>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
    <td class="tg-yw4l">6</td>
    <td class="tg-yw4l" colspan="3">El sistema muestra la página con todos los datos</td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="8">Cursos Alternos</th>
  </tr>
  <tr>
    <td class="tg-yw4l">6b</td>
    <td class="tg-yw4l" colspan="7">Si los datos son erróneos vuelve a la página de introducción de usuario y contraseña</td>
  </tr>
</table>

#### Guardar Datos

<table class="tg">
  <tr>
    <th class="tg-9hbo">Casos de uso</th>
    <th class="tg-yw4l" colspan="4">Guardar datos</th>
    <th class="tg-yw4l" colspan="2">CU-2</th>
  </tr>
  <tr>
    <th class="tg-yw4l">Actores</th>
    <td class="tg-yw4l" colspan="6"> Usuario</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Tipo</th>
   <td class="tg-yw4l" colspan="2">Primario</td>
   <td class="tg-yw4l" colspan="2">Esencial</td>
   <td class="tg-yw4l" colspan="2">Básico</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Referencias</th>
  <td class="tg-yw4l" colspan="6">RF-2.1</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Precondición</th>
    <td class="tg-yw4l" colspan="6">El usuario debe de estar dado de alta </td>
  </tr>
  <tr>
    <th class="tg-yw4l">Postcondición</th>
    <td class="tg-yw4l" colspan="6">El usuario guarda los datos proporcionados </td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="7">Propósito</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="7">Guardar datos para luego poder extraer porcentajes de utilización</td>
  </tr>
</table>


<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="7">Resumen</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="7">El usuario permite que los datos se guarden en la base de datos</td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="8">Curso Normal (Básico)</th>
  </tr>
  <tr>
    <td class="tg-yw4l">1</td>
    <td class="tg-yw4l" colspan="3">Usuario inicia sesión en la página web y se encuentra en la página web con muchos datos </td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l" colspan="3">Usuario pulsa guardar datos</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">3</td>
    <td class="tg-yw4l" colspan="3">Usuario introduce contraseña</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
    <td class="tg-yw4l">4</td>
    <td class="tg-yw4l" colspan="3">El sistema guarda los datos</td>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
    <td class="tg-yw4l">5</td>
    <td class="tg-yw4l" colspan="3">El sistema vuelve a la página donde se encuentran los datos</td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="8">Cursos Alternos</th>
  </tr>
  <tr>
    <td class="tg-yw4l">5b</td>
    <td class="tg-yw4l" colspan="7">Si los datos no se pueden guardar vuelve a la página de nuevo</td>
  </tr>
</table>

#### Ver estadísticas

<table class="tg">
  <tr>
    <th class="tg-9hbo">Casos de uso</th>
    <th class="tg-yw4l" colspan="4">Ver estadísticas</th>
    <th class="tg-yw4l" colspan="2">CU-3</th>
  </tr>
  <tr>
    <th class="tg-yw4l">Actores</th>
    <td class="tg-yw4l" colspan="6"> Usuario</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Tipo</th>
   <td class="tg-yw4l" colspan="2">Primario</td>
   <td class="tg-yw4l" colspan="2">Esencial</td>
   <td class="tg-yw4l" colspan="2">Básico</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Referencias</th>
  <td class="tg-yw4l" colspan="6">RF-3.1</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Precondición</th>
    <td class="tg-yw4l" colspan="6">El usuario debe de estar dado de alta </td>
  </tr>
  <tr>
    <th class="tg-yw4l">Postcondición</th>
    <td class="tg-yw4l" colspan="6">El usuario visualiza los datos globales mediante porcentajes en barrar horizontales </td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="7">Propósito</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="7">Visualizar porcentajes de aspectos técnicos guardados</td>
  </tr>
</table>


<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="7">Resumen</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="7">El usuario podrá ver parte de la BD de forma organizada y visual</td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="8">Curso Normal (Básico)</th>
  </tr>
  <tr>
    <td class="tg-yw4l">1</td>
    <td class="tg-yw4l" colspan="3">Usuario inicia sesión en la pagina web principal y se encuentra en la pagina web con muchos datos </td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l" colspan="3">Usuario pulsa ver estadísticas</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
    <td class="tg-yw4l">3</td>
    <td class="tg-yw4l" colspan="3">El sistema muestra la página de porcentajes</td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="8">Cursos Alternos</th>
  </tr>
  <tr>
    <td class="tg-yw4l">5b</td>
    <td class="tg-yw4l" colspan="7"></td>
  </tr>
</table>


#### Cerrar sesión

<table class="tg">
  <tr>
    <th class="tg-9hbo">Casos de uso</th>
    <th class="tg-yw4l" colspan="4">Cerrar sesión</th>
    <th class="tg-yw4l" colspan="2">CU-4</th>
  </tr>
  <tr>
    <th class="tg-yw4l">Actores</th>
    <td class="tg-yw4l" colspan="6"> Usuario</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Tipo</th>
   <td class="tg-yw4l" colspan="2">Primario</td>
   <td class="tg-yw4l" colspan="2">Esencial</td>
   <td class="tg-yw4l" colspan="2">Básico</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Referencias</th>
  <td class="tg-yw4l" colspan="6">RF-4.1</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Precondición</th>
    <td class="tg-yw4l" colspan="6">El usuario debe de estar dado de alta </td>
  </tr>
  <tr>
    <th class="tg-yw4l">Postcondición</th>
    <td class="tg-yw4l" colspan="6">El usuario cierra sesión </td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="7">Propósito</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="7">Cerrar Sesión en la plataforma</td>
  </tr>
</table>


<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="7">Resumen</th>
  </tr>
  <tr>
    <td class="tg-yw4l" colspan="7">El usuario cierra sesión de la plataforma</td>
  </tr>
</table>

<table class="tg">
  <tr>
    <th class="tg-yw4l" colspan="8">Curso Normal (Básico)</th>
  </tr>
  <tr>
    <td class="tg-yw4l">1</td>
    <td class="tg-yw4l" colspan="3">Usuario se encuentra en cualquier página una vez iniciada sesión </td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l" colspan="3">Usuario pulsa Cerrar sesión</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="3"></td>
    <td class="tg-yw4l">3</td>
    <td class="tg-yw4l" colspan="3">El sistema vuelve a la página principal</td>
  </tr>

</table>







### Descripción de los actores


<table class="tg">
  <tr>
    <th class="tg-yw4l">Actor</th>
    <td class="tg-yw4l" colspan="3">Usuario registrado</td>
    <th class="tg-yw4l" colspan="2">ACT-1</th>
  </tr>
  <tr>
    <th class="tg-yw4l">Descripción</th>
    <td class="tg-yw4l" colspan="5">Persona que está dada de alta con un usuario y contraseña en la plataforma</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Características</th>
    <td class="tg-yw4l" colspan="5">Este actor se utiliza para realizar todas las acciones en la plataforma: Iniciar sesión,guardar datos,ver estadísticas y cerrar sesión </td>
  </tr>
  <tr>
    <th class="tg-yw4l">Relaciones</th>
    <td class="tg-yw4l" colspan="5">Usuario final,usuario,cliente</td>
  </tr>
  <tr>
    <th class="tg-yw4l">Referencias</th>
    <td class="tg-yw4l" colspan="5">RF-1, RF-2,RF-3,RF-4</td>
  </tr>
</table>


### Diagramas de Secuencia
#### Iniciar sesión
![img](../imágenes/SecIS.png)
#### Guardar datos
![img](../imágenes/SecGD.png)
#### Ver estadísticas
![img](../imágenes/SecVE.png)
#### Cerrar Sesión
![img](../imágenes/SecCS.png)
### Diagrama de clases del diseño
![img](../imágenes/Clases.png)

