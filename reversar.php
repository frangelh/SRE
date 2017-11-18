<?php
include_once('confi.php');
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";

	$sql = "UPDATE participantes SET registrado=0 WHERE codigo='$codigo' AND registrado=1";
	$qur = mysql_query($sql);	
	if($qur){
		$json = array("error" => false, "mensaje" => "Procesado Correctamente...");
	}else{
		$json = array("error" => true, "mensaje" => "Error Procesando....");
	}


@mysql_close($conn);

header('Content-type: application/json');
echo json_encode($json);
?>