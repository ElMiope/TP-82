<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
    $mysql=new mysqli("localhost","root","","base1");
    if ($mysql->connect_error){
      die('Problemas con la conexion a la base de datos');
      }
    $mysql->query("insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or die($mysql->error);
    $mysql->close();
  ?>
</body>
</html>