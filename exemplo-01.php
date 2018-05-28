<?php

$filename = "usuarios.csv";
if(file_exists($filename)) {
	$file = fopen($filename, "r"); #nao precisa colocar o +, pois neste ponto já sabemos que o arquivo existe. O + é só pra criar caso não exista.
	$headers = fgets($file);

	var_dump($headers);
}

?>