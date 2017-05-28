# Previo Práctica 5
## Creación Base de datos y banco de datos
~~~
CREATE DATABASE PRACTICAS;
USE PRACTICAS;
~~~

~~~
CREATE TABLE Persona( 
    	Id VARCHAR(9) NOT NULL,
	Nombre VARCHAR(30) NOT NULL,
	Apellido_primer VARCHAR(30) NOT NULL,
	Apellido_segundo VARCHAR(30) NOT NULL
);
~~~

~~~
INSERT INTO Persona VALUES('000000000','Maribel','Rodríguez','Sola');
INSERT INTO Persona VALUES('000000001','Veronica','González','Abad');
INSERT INTO Persona VALUES('000000002','José','Rodríguez','Fernández');
INSERT INTO Persona VALUES('000000003','Alicia','Pérez','García');
INSERT INTO Persona VALUES('000000004','Maribel','López','Amaya');
INSERT INTO Persona VALUES('000000005','Uriel','Camps','Antúnez');
INSERT INTO Persona VALUES('000000006','Gema','Gómez','Torres');
INSERT INTO Persona VALUES('000000007','Maribel','Sosa','Álvarez');
INSERT INTO Persona VALUES('000000008','Ursula','Carmona','Alcalde');
INSERT INTO Persona VALUES('000000009','Yvonne','Ballesteros','Delgado');
INSERT INTO Persona VALUES('000000010','Julio','Escobar','Estévez');
INSERT INTO Persona VALUES('000000011','Erik','Díaz','Expósito');
~~~

## Archivo de configuración
~~~
jed /etc/mysql/mysql.conf.d/mysqld.cnf
~~~
## configuración en MySQL -
~~~
CREATE USER 'esclavo'@'172.17.0.3' IDENTIFIED BY 'u4h7j9e3';
GRANT REPLICATION SLAVE ON *.* TO 'esclavo'@'172.17.0.3' IDENTIFIED BY 'u4h7j9e3';


CREATE USER 'root'@'172.17.0.3' IDENTIFIED BY 'u4h7j9e3';
GRANT REPLICATION SLAVE ON *.* TO 'root'@'172.17.0.3' IDENTIFIED BY 'u4h7j9e3';
FLUSH PRIVILEGES;
FLUSH TABLES;
FLUSH TABLES WITH READ LOCK;
SHOW MASTER STATUS;
~~~

~~~
STOP SLAVE;
CHANGE MASTER TO MASTER_HOST='172.17.0.2', MASTER_USER='root', MASTER_PASSWORD='123a123a', MASTER_LOG_FILE='mysql-bin.000001',MASTER_LOG_POS=501, MASTER_PORT=3306;
~~~
~~~
 START SLAVE;
~~~
~~~
SHOW SLAVE STATUS\G
~~~
~~~
*************************** 1. row ***************************
               Slave_IO_State: 
                  Master_Host: 172.17.0.2
                  Master_User: esclavo
                  Master_Port: 3306
                Connect_Retry: 60
              Master_Log_File: mysql-bin.000001
          Read_Master_Log_Pos: 501
               Relay_Log_File: 66ecee5aa46d-relay-bin.000001
                Relay_Log_Pos: 4
        Relay_Master_Log_File: mysql-bin.000001
             Slave_IO_Running: No
            Slave_SQL_Running: Yes
              Replicate_Do_DB: 
          Replicate_Ignore_DB: 
           Replicate_Do_Table: 
       Replicate_Ignore_Table: 
      Replicate_Wild_Do_Table: 
  Replicate_Wild_Ignore_Table: 
                   Last_Errno: 0
                   Last_Error: 
                 Skip_Counter: 0
          Exec_Master_Log_Pos: 501
              Relay_Log_Space: 154
              Until_Condition: None
               Until_Log_File: 
                Until_Log_Pos: 0
           Master_SSL_Allowed: No
           Master_SSL_CA_File: 
           Master_SSL_CA_Path: 
              Master_SSL_Cert: 
            Master_SSL_Cipher: 
               Master_SSL_Key: 
        Seconds_Behind_Master: NULL
Master_SSL_Verify_Server_Cert: No
                Last_IO_Errno: 1236
                Last_IO_Error: Got fatal error 1236 from master when reading data from binary log: 'Could not find first log file name in binary log index file'
               Last_SQL_Errno: 0
               Last_SQL_Error: 
  Replicate_Ignore_Server_Ids: 
             Master_Server_Id: 1
                  Master_UUID: 33e59cdb-08f1-11e7-92b3-0242ac110002
             Master_Info_File: /var/lib/mysql/master.info
                    SQL_Delay: 0
          SQL_Remaining_Delay: NULL
      Slave_SQL_Running_State: Slave has read all relay log; waiting for more updates
           Master_Retry_Count: 86400
                  Master_Bind: 
      Last_IO_Error_Timestamp: 170517 23:18:47
     Last_SQL_Error_Timestamp: 
               Master_SSL_Crl: 
           Master_SSL_Crlpath: 
           Retrieved_Gtid_Set: 
            Executed_Gtid_Set: 
                Auto_Position: 0
         Replicate_Rewrite_DB: 
                 Channel_Name: 
           Master_TLS_Version: 
1 row in set (0.00 sec)
~~~