<?php
include_once('db.php');
$nombres=$_POST['usuario'];
$password=$_POST['contrasena'];

echo "Los Datos son: <br>";
echo "$nombres, $password";

$conectar=conn();
$sql="INSERT INTO usuarios (usuario, contrasena)
VALUES ('$nombres', '$password')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

?>