<!-- Introducimos el metachart debido a que no tenemos ningún HTML por eos lo hAcemos de esta forma cutre-->
<meta charset="utf-8"/>

<?php 
/*
************************************************************************************************************
************************************************************************************************************
************								CODIGO DEL EJERCICIO 4								************
************************************************************************************************************	
************************************************************************************************************
_____________________________
Autor:Cristian Perez Llurba
Fecha: 09-08-2018
Localización: BCN
_____________________________

D E S C R I P C I O N 
	Multiplicacion de los 20 números naturales y estos mostrarlos por pantalla, mediante el WHILE
*/
	//Declaración de una cosntnate
	define ('PI', 3.14);

	$condicionContaje = 1;
	$numero = 1;
	while($condicionContaje<11){
		
		//Es lo mismo que esta linea ->  $numero = $condicionContaje * $numero;
		$numero *= $condicionContaje;
		//Printer de los calores obtenidos
		if($condicionContaje==1){
			echo "<b>"."El resultado de las siguientes operaciones es la siguiente"."</b>"."</br>";
		}
		echo "==================================================================="."</br>";
		echo "<i>"."Incrementador :"."</i>".$condicionContaje."</br>";
		echo "<i>"."Resultado :"."</i>".$numero."</br>";
		
		//incrementacion de la condición
		$condicionContaje++;
		if ($condicionContaje==11){
			echo "==================================================================="."</br>";
		}
	}

	$condicionContaje--;
	//print del resultado esperado
	echo "El resultado de multiplicar los ".$condicionContaje." números, es: ".$numero;

	echo "<br>".'pepe'.$condicionContaje."<br>";

	echo gettype($numero); // nos muestra el tipo de dato del que se trata.
?>