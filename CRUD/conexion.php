<?php

/*
=============================================================
====   C O N E X I O N   B A S E   D E   D A T O S       ====
=============================================================
*/

//Variables de entorno de la conexión
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test_empleados";

//Connexion a la base de datos de MYSQL
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo "No se pudo conectar a la base de daos: ".mysqli_connect_error();
}

?>