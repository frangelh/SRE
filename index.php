<html lang="es">
    <head>
	    <meta charset="utf-8">
	    <title>App Demo Registro de Miembros</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <link rel="stylesheet" href="./bootstrap.min.css" media="screen">
	</head>
	<body>
		<h1>Miembros Registrados </h1>
		<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre Completo</th>
      <th>Telefono</th>
      <th>Correo</th>
      <th>Direccion</th>
      <th>Ciudad</th>
      <th>Postal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
      include_once('../confi.php');

		$sql = 'SELECT ID,nombre, apellido, telefono, correo, direccion, ciudad, postal FROM miembro';
		   mysql_select_db('membrecia');
		   $retval = mysql_query( $sql, $conn );
		   
		   if(! $retval ) {
		      die('Could not get data: ' . mysql_error());
		   }
		   
		   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		      echo "<tr>";
		      echo "<td> {$row['ID']}</td>";
		      echo "<td> {$row['nombre']} {$row['apellido']}  </td> ";
		      echo "<td> {$row['telefono']}</td> ";
		      echo "<td> {$row['correo']}</td> ";
		      echo "<td> {$row['direccion']}</td> ";
		      echo "<td> {$row['ciudad']}</td> ";
		      echo "<td> {$row['postal']}</td> ";
		      echo "</tr>";
		   }
      ?>
    </tr>
   
  </tbody>
</table> 
	</body>
</html>