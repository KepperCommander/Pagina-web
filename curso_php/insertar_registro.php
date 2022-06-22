<?php
require("registrer.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$database = "usuarios";
$username = "root";
$password = "";
// Para crear la conexion
$conexion = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db ($conexion,$database) or die("no se encuentra la base de datos"); 

// Para verificar la conexion
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$nom=$_GET['name'];
$usn=$_GET['username'];
$ema=$_GET['email'];
$pas=$_GET['password'];

$sql = "INSERT INTO users (NAME,USERNAME, EMAIL, PASSWORD) VALUES ('$nom','$usn', '$ema','$pas')";
$resultado=mysqli_query($conexion,$sql);
if ($resultado == false) {
      
} else {
	echo "Registro realizado";
      }
mysqli_close($conexion);
?>
//Cerrar la conexion
