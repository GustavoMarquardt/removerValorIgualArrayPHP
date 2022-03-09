<?php
$array = array(1,2,1,6,8,4,6,9);
echo 'array = array(1,2,1,6,8,4,6,9);<br/>';

$novoarray = array();
foreach($array as $valor) {
    //in_array() retorna true se o valor existir no array
	if(in_array($valor, $novoarray) == false) {
		$novoarray[] = $valor;
	}
}

echo '<pre>';
print_r($novoarray);

?>