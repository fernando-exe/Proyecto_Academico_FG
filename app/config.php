<?php
/*
*proporcionar una plantilla de configuracion para conectar  
la basede datosde mysql/

/* Este archivo no contiene contraseñas reales se puede cargar el git */
#Establecer la direcciondel servidor mysql
$host = "127.0.0.1";
# Puerto de MySQL
$port = 3306;
# Nombre de la base de datos
$baseDatos = "proyecto_academico_la";
# Usuario de la base de datos
$usuario = "proyecto_user'@'localhost";
# Definimos una contraseña de administrador
$contraseña = "muerte400";
#Retornar estos valores como si fuera un arreglo asociativo
return [
    "host" => $host,
    "port" => $port,
    "database" => $baseDatos,
    "username" => $usuario,
    "password" => $contraseña
    ];