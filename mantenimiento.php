<html lang="es">
    <head>
	    <meta charset="utf-8">
	    <title>App Demo Registro de Miembros</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <link rel="stylesheet" href="./demo/bootstrap.min.css" media="screen">
	</head>
	<body>
<form class="form-horizontal" action="./programa.php" method="get">
  <fieldset>
    <legend>Solicitud de membrecia</legend>

    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Nombre</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre">
      </div>
    </div>

    <div class="form-group">
      <label for="apellido" class="col-lg-2 control-label">Apellido</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Apellido">
      </div>
    </div>

    <div class="form-group">
      <label for="telefono" class="col-lg-2 control-label">Telefono</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Telefono">
      </div>
    </div>

    <div class="form-group">
      <label for="correo" class="col-lg-2 control-label">Correo</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="correo" name="correo" required placeholder="Correo">
      </div>
    </div>

    <div class="form-group">
      <label for="contrasena" class="col-lg-2 control-label">Contraseña</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="contrasena" name="contrasena" required placeholder="Contraseña">
      </div>
    </div>

    <div class="form-group">
      <label for="documento" class="col-lg-2 control-label">Documento de identidad</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="documento" name="documento" required placeholder="Documento">
      </div>
    </div>

    <div class="form-group">
      <label for="direccion" class="col-lg-2 control-label">Direccion</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="2" id="direccion" name="direccion" required></textarea>
      </div>
    </div>

    <div class="form-group">
      <label for="ciudad" class="col-lg-2 control-label">Ciudad</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" name="ciudad" required>
      </div>
    </div>

    <div class="form-group">
      <label for="postal" class="col-lg-2 control-label">Codigo Postal</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="postal" name="postal" required placeholder="Codigo Postal">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Adquirir Membresía</button>
      </div>
    </div>
  </fieldset>
</form>
	</body>
</html>