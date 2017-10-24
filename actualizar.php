<?php
include_once('confi.php');
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
/*
CREATE TABLE `participantes` (
	`codigo` INT(11) NOT NULL,
	`nombres` VARCHAR(50) NOT NULL COLLATE 'utf8_bin',
	`apellidos` VARCHAR(50) NOT NULL COLLATE 'utf8_bin',
	`documento` VARCHAR(50) NOT NULL COLLATE 'utf8_bin',
	`email` VARCHAR(100) NOT NULL COLLATE 'utf8_bin',
	`categoria` VARCHAR(50) NOT NULL COLLATE 'utf8_bin',
	`pago` VARCHAR(50) NOT NULL COLLATE 'utf8_bin',
	`registrado` BIT(1) NOT NULL DEFAULT b'0'
)
COLLATE='utf8_bin'
ENGINE=InnoDB
;
*/

// ACTUALIZANDO
	$sql = "UPDATE participantes SET registrado=1 WHERE codigo='$codigo' ";
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