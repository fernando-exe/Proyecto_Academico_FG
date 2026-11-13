<?php
#Archivo que establezca la conexion entre mysql y config.php

#Tarea 1: Cargar la configuracion
$config = require _DIR_ ."/config.php";
#Tarea 2: Construir el Data sourse Name (DSN)
#aqui contiene el controlador, el host, el puerto, base de datos y codificacion.
$dsn = "mysql:host={$config['host']};"
     . "port={$config['port']};"
     . "dbname={$config['database']};"
     . "charset=utf8mb4";

     #Tarea 3 Configuracion de PDO
     #ERMORE_EXCEPTION:
     #Permite manejar los errores mediantes excepciones.
     
     #FETCH_ASSOC: Devolver filas ccomo arreglos asociativos

     #EMULATE_PREPARES = false:
     #permire utilizar consultas preparadas nativas
     #cuando el controlador lo permite
     #"::" es un operador de resolucion que me permite acceder 
     #constantes, metodos, propiedades de una clase.

     #"=> " es un Operador de asociacion, relaciona una clave dentro de un arreglo asociativo.

     $opciones = [
          PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false
     ];

     #Paso 4: Establecer coenxion
     #utilizamos new PDO para crear el objeto de conexion a la base de datos

     try{
          $conexion = new PDO(
               $dsn,
               $config['username'],
               $config['password'],
               $opciones
          );
     } catch(PDOException $error){ 
          /*Registrar el error tecnico en el servidor
          sin mostrar credenciales al usuario*/
          error_log(
               "Error de conexion a MySql: " . $error->getMessage()
          );
    /*Interrumpir la ejecucion al servidor si
    falla la conexion con la base de <datos */
    throw new RuntimeException(
        "No fue posible conectar con la base de datos");
}
/*  paso 5: Devolver el objeto PDO.
si se requiere usar esta coenxion, utilizamos "require" para cargar este archivo y obtener el objeto PDO
*/
return $conexion;