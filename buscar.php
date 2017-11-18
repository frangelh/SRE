<?php
include_once('confi.php');
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "0";

$sql = "SELECT codigo, nombres, apellidos, documento, email, categoria, pago, registrado FROM participantes WHERE codigo=$codigo";

		   $retval = mysql_query( $sql, $conn );
		   
		   if(! $retval ) {
		      die('Could not get data: ' . mysql_error());
		   }
		   
		   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
			   //$rows[] = $row;
			   $objeto = array(
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
			$json = array("participante"=>$objeto);
		   }
		   if($json==null){
			    $objeto = array("error" => true, "mensaje" => "lista esta Vacia");
		   		$json = array("participante"=>$objeto);
		   }      
header('Content-type: application/json');
echo json_encode($json);
?>