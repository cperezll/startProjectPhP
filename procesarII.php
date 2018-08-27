

<?php 
//VALIDACION DEL FORMULARIO II

	//var_dump($_POST);//muestra por pantala(navegador) el valor de una variable. Todo esto por pantalla

	//Validación del formulario
	if($_POST){
		//Procesamiento de la informacion que hemos capturado con el $_POST
		$nombre2 = $_POST["nombre2"];
		$edad = $_POST["edad"];

		//Variables que nos muestran los datos cargados por el formulario del HTML
		var_dump($nombre2);
		var_dump($edad);

		//Creamos dos variables para determinar si hay un error estas se muestren en el HTML.
		//Se utilizan en el html.
		$claseNombre = "";
		$claseEdad = "";

		//Comproabción de la existencia de los datos obtenidos
		if ($nombre2 == "" ){
			$msgNombre = "Falta completar el nombre, esta vacio.";
			$claseNombre = "error";
		}

		if ($edad == "" ){
			$msgEdad = "Falta introducir edad";	
			$claseEdad = "error";
		}else{
			if(!is_numeric($edad)){
				$msgEdad = "Edad debe de ser númerica";
				$claseEdad = "error";
			}
		}

		if($claseNombre == "" & $claseEdad == "" ){
			//agregar el elemento
			echo "OK";
		}
	}	 
?>