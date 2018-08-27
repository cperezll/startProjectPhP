<?php  

	//Conexion con el servidor
	$conectar = @mysql_connect('localhost','root','');

	//Verificaicon de la conexion con la BBDD
	if(!$conectar){
		echo "No se conecto con el servidor";
	}else{
		$base = mysql_select_db('pruebaformularios');
		if(!$base){
			echo "No se encontro las base de datos";
		}
	}
	
	//Recuperar las variables
	$nombre = $_POST['nombre3'];
	$edad = $_POST['edad3'];
	$mensaje = $_POST['mensaje3'];

	//hacemos la sentencia de sql
	$sql= "INSERT INTO datos VALUES ('$nombre',
									 '$edad',
									 '$mensaje')";

	//ejecutamos la sentencia de sql
	$ejecutar = mysql_query($sql);

	//Verificamos la ejecucion
	if(!$ejecutar){
		echo "Hubo algún error";
	}else{
		echo "Datos guardado correctamente<br><a href='index.html'>Volver</a>";
	}
?>