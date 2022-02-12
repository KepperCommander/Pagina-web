<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zona de Usuarios</title>
	<style>
table {width: 70%;border: 1px solid #999;text-align: center;border-collapse: collapse;caption-side: top;}
caption, td, tr {padding: 0.3em;}
th{width: 8%;}
#name{width: 30%;}
tr, td {border-bottom: 1px solid #999;width: 20%;}
caption {font-weight: bold;font-style: italic;}
	</style>
</head>
<body>

	<?php 
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

</body>
</html>