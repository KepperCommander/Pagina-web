<?php  
//para determinar tipo de usuarios
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$servername = "localhost";
$database = "usuarios";
$username = "root";
$password = "";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db ($conexion,$database); 

	$consulta = "SELECT * FROM USERS";

	$resultado = mysqli_query($conexion, $consulta);

	while ($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC) == true)
	{
	echo "<table> <tr><th>";
	echo $fila[0] . "</th><td id='name'>";
	echo $fila[1] . "</td><td> ";
	echo $fila[2] . " </td><td>";
	echo $fila[3] . " </td><td>";
	echo $fila[4] . " </td><td>";
	echo $fila[5] . " </td><td></tr></table>";
	echo "<br>";
	}
	?>
