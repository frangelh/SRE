<?php
include_once('confi.php');
$registrado = isset($_GET['registrado']) ? $_GET['registrado'] : "0";

$sql = "SELECT codigo, nombres, apellidos, documento, email, categoria, pago, registrado FROM participantes WHERE registrado=$registrado ORDER BY codigo";

		   $retval = mysql_query( $sql, $conn );
		   
		   if(! $retval ) {
		      die('Could not get data: ' . mysql_error());
		   }
		   
		   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
			   //$rows[] = $row;
			   $objeto[] = array(
				"codigo"=>$row['codigo'],
				"nombres"=>$row['nombres'],
				"apellidos"=>$row['apellidos'],
				"email"=>$row['email'],
				"categoria"=>$row['categoria'],
				"pago"=>$row['pago'],
				"registrado"=>$row['registrado'],
				"error"=>false,
				"mensaje"=>"Procesado Correctamente"			
			   );
			$json = array("listado"=>$objeto);
		   }
		   if($json==null){
			    $objeto[] = array("error" => true, "mensaje" => "lista esta Vacia");
		   		$json = array("listado"=>$objeto);
		   }      
header('Content-type: application/json');
echo json_encode($json);
?>