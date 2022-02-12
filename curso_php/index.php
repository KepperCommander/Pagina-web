<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar Sesion</title>
</head>
<style link rel="stylesheet" type="text/css"  >
	@import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');
* {padding: 0;margin: 0;box-sizing: border-box;font-family: 'Maven Pro', sans-serif;}
body {margin: 50px auto; margin- botton: 0px auto;text-align: center;width: 800px;}
span {width: 150px;font-size: 1.5rem;text-align: center;}
input {border: 2px solid #ccc;font-size: 1.5rem;font-weight: 100;font-family: sans-serif;padding: 5px;text-align: center;margin: 10px;}
#boton {padding: 10px;font-size: 1.5rem;font-weight: 100;background: blueviolet;color: white;border: none;margin-top: 4px;}
form {padding: 20px;border: 5px solid #ccc;width: 500px;background: #eee;}
div{float:center;margin :10% 14% ; margin-botton: 0px auto;padding: 10px 40px ;background-color: white;}
#xd{font-size: 10px;text-align: center;}

</style>
<body>
	<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $role = $_REQUEST['txt_role'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:usuario");
    $query->bindParam("usuario", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
?>

<div>
<form action="login.php" method="post">
	<span>Usuario<br></span>
<input type="text" name="usuario"><br>
	<span>Contraseña<br></span>
<input type="password" name="contraseña"><br>
<select class="form-control" name="txt_role">
                        <option value="" selected="selected"> - Selecccionar rol - </option>
                            <option value="admin">Admin</option>
                            <option value="usuarios">Usuarios</option>
                    </select><br>
 <input type="submit" name="enviar" value="Iniciar Sesion">
	</div>	
</form>
<p d="xd"><br><a href="insertar_registro.php">¿No tienes cuenta? Registrate</a>.</p>

<?php
require_once 'config.php';
session_start();
if(isset($_SESSION["admin_login"])) //Condicion admin
{
    header("location: admin_portada.php"); 
}

if(isset($_SESSION["usuarios_login"])) //Condicion Usuarios
{
header("location: usuarios/login.php");
}

// Usuarios

/*else if($username AND $password AND $role)
{
try
{
$select_stmt=$db->prepare("SELECT USERNAME,PASSWORD,ROLE FROM USERS
WHERE
username=:uusername AND password=:upassword AND role=:urole"); 
$select_stmt->bindParam(":uusername",$username);
$select_stmt->bindParam(":upassword",$password);
$select_stmt->bindParam(":urole",$role);
$select_stmt->execute();
}}
*/
?>

</body>

</html>