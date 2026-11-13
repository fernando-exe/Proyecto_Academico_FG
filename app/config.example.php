* proporcionar una plantilla de configuracion para conectar la base de datos de mysql.*/

*Este archivo no contiene contraseñas reales se puede cargar el git*/
*establecer la dirrecion del servidor mysql
$host = "127.0.0.1";
$puerto = '3306';
#nombre de la basse de dato.
$baseDatos = 'Proyecto_Academico';
#Usuario de  ejemplo en SSQL
$usuario = 'Academico_user'
#Definimos una contraseña de administrador 
$contrasena = 'MuchoMote';
# retornar estos valores como si fuera un arreglo asociativo.
return[
    'host' => &host,
    'port' => &puerto,
    'database' => &baseDatos,
    'username' => &usuario,
    'password' => &contrasena
];