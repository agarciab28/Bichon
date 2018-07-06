<?php
try {
$con = mysqli_connect("localhost","usuarioBichon","123456","bichonWeb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Falló Conexión a MySQL: " . mysqli_connect_error();
  }
}
catch (MySQLException $err)
{
  $err->getMessage();
}
?>
