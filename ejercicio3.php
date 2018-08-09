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
*/

<?php 
	//Modificacion del ejercicio numero2. para obtener un condicional, obteniendo un numero para o impar

	for($a = 0; $a <= 9 ;$a++){
	
		$cuadrado = ($a*$a);

		echo "El cuadrado de <b>".$a."</b>, es el siguiente: <i>".$cuadrado."</i>";
		
		//Deteción del numero par
		if($cuadrado%2==0){
			echo ". Y el numero es par."."</br>";
		}else{
			echo ". Y el numero no es par."."</br>";
		}
	}

?>