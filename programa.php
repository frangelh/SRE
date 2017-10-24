<?php
include_once('confi.php');

$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "";
$apellido = isset($_GET['apellido']) ? $_GET['apellido'] : "";
$telefono = isset($_GET['telefono']) ? $_GET['telefono'] : "";
$correo = isset($_GET['correo'])? $_GET['correo'] : "";
$contrasena = isset($_GET['contrasena']) ? $_GET['contrasena'] : "";
$documento = isset($_GET['documento']) ? $_GET['documento'] : "";
$direccion = isset($_GET['direccion']) ? $_GET['direccion'] : "";
$ciudad = isset($_GET['ciudad']) ? $_GET['ciudad'] : "";
$postal = isset($_GET['postal']) ? $_GET['postal'] : "";



// Insert data into data base
	$sql = "INSERT INTO miembro VALUES (NULL,'$nombre', '$apellido', '$telefono','$correo', '$contrasena','$documento','$direccion','$ciudad','$postal');";
	$qur = mysql_query($sql);	
	if($qur){
		$json = array("error" => true, "mensaje" => "Miembro Guardado Correctamente");
	}else{
		$json = array("error" => false, "mensaje" => "Error Guardando el miembro");
	}


@mysql_close($conn);

header("Location: http://somniumproject.xyz/demo/mantenimiento.php");
?>