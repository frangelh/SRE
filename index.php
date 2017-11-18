<html lang="es">
    <head>
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	    <title>Sistema de Registros de Eventos PUCMM</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <link rel="stylesheet" href="./bootstrap.min.css" media="screen">
	</head>
	<body>
		<h1>Participantes</h1>
		<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre Completo</th>
      <th>Documento</th>
      <th>Email</th>
      <th>Categoria</th>
      <th>Pago</th>
      <th>Registrado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
      include_once('confi.php');
		
		$sql = 'SELECT codigo, nombres, apellidos, documento, email, categoria, pago, registrado FROM participantes ORDER BY codigo';		 

		   $retval = mysql_query( $sql, $conn );
		   
		   if(! $retval ) {
		      die('Could not get data: ' . mysql_error());
		   }
		   
		   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		      echo "<tr>";
		      echo "<td> {$row['codigo']}</td>";
		      echo "<td> {$row['nombres']} {$row['apellidos']}  </td> ";
		      echo "<td> {$row['documento']}</td> ";
		      echo "<td> {$row['email']}</td> ";
		      echo "<td> {$row['categoria']}</td> ";
		      echo "<td> {$row['pago']}</td> ";
		      echo "<td> {$row['registrado']}</td> ";
		      echo "</tr>";
		   }
      ?>
    </tr>
   
  </tbody>
</table> 
	</body>
</html>