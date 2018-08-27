
<?php 
/*
************************************************************************************************************
************************************************************************************************************
************								CODIGO DEL EJERCICIO 3								************
************************************************************************************************************	
************************************************************************************************************
_____________________________
Autor:Cristian Perez Llurba
Fecha: 09-08-2018
Localización: BCN
_____________________________

D E S C R I P C I O N
	Modificacion del ejercicio número2. para obtener un condicional, obteniendo un numero par o impar
*/

	for($a = 0; $a <= 9 ;$a++){
	
		$cuadrado = ($a*$a);

		echo "El cuadrado de <b>".$a."</b>, es el siguiente: <i>".$cuadrado."</i>";
		
		//Deteción del número par
		if($cuadrado%2==0){
			echo ". Y el número es par."."</br>";
		}else{
			echo ". Y el número no es par."."</br>";
		}
	}

?>