
<?php 
/*
************************************************************************************************************
************************************************************************************************************
************								CODIGO DEL EJERCICIO 2								************
************************************************************************************************************	
************************************************************************************************************
_____________________________
Autor:Cristian Perez Llurba
Fecha: 09-08-2018
Localización: BCN
_____________________________

D E S C R I P C I O N
	Hacemos un script nuevo.
 	En este script lo que vamos hacer es implementar en un for 
	el augmento de un número hasta un máximo, para indicar su potencia.
*/
	
	for ($i = 0; $i <= 29; $i++) {
		echo "===================================================================="."</br>";
		echo "La variable <b>i</b>, tiene el siguiente valor: ".$i."</br>";
		echo "El valor del cuadrado de <b>i</b>, tiene el valor: ".($i=$i)."</br>";
		if ($i==29){
			echo "====================================================================="."</br>";
		}
	}
?>