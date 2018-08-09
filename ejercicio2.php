<?php 

	//Hacemos un script nuevo
	/* En este script loq ue vamos ahcer es implementar en un for 
	el augmento de un numero hasta un maximo, para indicar su potencial */
	
	for ($i = 0; $i <= 29; $i++) {
		echo "===================================================================="."</br>";
		echo "La variable <b>i</b>, tiene el siguiente valor: ".$i."</br>";
		echo "El valor del cuadrado de <b>i</b>, tiene el valor: ".($i*$i)."</br>";
		if ($i==29){
			echo "====================================================================="."</br>";
		}
	}
?>