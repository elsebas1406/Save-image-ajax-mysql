<?php  
 
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "imagenes";
$conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

if ($conn->connect_errno) {
	printf("No se pudo conectar a la base de datos: %s \n", $mysqli->connect_error);
	exit();
}
$conn->set_charset("utf8"); 
		
?>