<?php

$servidor = "localhost:3307";
$usuario = "root";
$clave = "";
$baseDeDatos = "contacto";

$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <h1>Formulario de Registro</h1>
  <form action="#" method="post">
    <p>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Su nombre" required>
    </p>
    
    <p>
      <label for="apellido_paterno">Apellido Paterno:</label>
      <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Su Apellido Paterno" required>
    </p>
    
    <p>
      <label for="apellido_materno">Apellido Materno:</label>
      <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Su Apellido Materno" required>
    </p>
    
    <p>
      <label for="correo">Correo:</label>
      <input type="correo" id="correo" name="correo" placeholder="tucorreo@dominio.com" required>
    </p>
    
    <p>
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" placeholder="(###) ###-####" required>
    </p>
    
    <p>
      <label for="opiniones">Opiniones y dudas:</label>
      <textarea id="opiniones" name="opiniones" placeholder="Aquí puedes poner tus opiniones" required></textarea>
    </p>
    
    <p>
      <label for="grupo">Grupo:</label>
      <select id="grupo" name="grupo" required>
        <option value="">Seleccione su Grupo</option>
        <option value="3IV4">3IV4</option>
        <option value="3IV5">3IV5</option>
        <option value="3IV6">3IV6</option>
      </select>
    </p>
    
    <p>
      <button type="submit" name="registro" >Enviar</button>
      <button type="reset">Borrar</button>
    </p>
  </form>
</body>
</html>
<?php

if(isset($_POST['registro'])){

$nombre= $_POST ['nombre'];
$apellido_paterno= $_POST ['apellido_paterno'];
$apellido_materno= $_POST ['apellido_materno'];
$correo= $_POST ['correo'];
$telefono= $_POST ['telefono'];
$opiniones= $_POST ['opiniones'];
$grupo= $_POST ['grupo'];
$insertarDatos = "INSERT INTO clientes VALUES('$nombre', '$apellido_paterno', '$apellido_materno', '$correo', '$telefono', '$opiniones', '$grupo')";
$ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
}
?>