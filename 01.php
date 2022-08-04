<?php  


	$valor01 = $_POST[valorn1];
	$valor02 = $_POST[valorn2];
	


	for($a=0; $a < 10; $a++){
		$array[] = rand("$valorn1", "$valorn2");
	}
	
	# QUantos elementos tem no array?
	echo "O array tem ".count($array)." elementos! <br>";

	# Qual é a soma dos elementos do array?
	echo "A soma dos valores do array é ".array_sum($array)."! <br>"; 
	echo "A média dos valores do array é ".array_sum($array)/count($array)."! <br>"; 

?>
	
<form action="#" method="post">
	inout		
    <input type="submit" value="Submit me!" />
  </p>
</form>