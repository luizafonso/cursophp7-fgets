<?php

$filename = "usuarios.csv";

if(file_exists($filename)) {
	$file = fopen($filename, "r"); #nao precisa colocar o +, pois neste ponto já sabemos que o arquivo existe. O + é só pra criar caso não exista.
	

	$headers = explode(",", fgets($file));


	$data = array();
	while($row = fgets($file)) {
		
		$rowData = explode(",", $row);
		$linha = array();

		for($i = 0; $i < count($headers); $i++) {

			$linha[$headers[$i]] = $rowData[$i];


		}

		array_push($data, $linha);
	}

	fclose($file);

	echo json_encode(($data));
	
}

?>