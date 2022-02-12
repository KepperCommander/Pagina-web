<?php
require('index.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $base=new PDO("mysql:host=localhost;dbname=usuarios","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM USERS WHERE USERNAME=:username AND PASSWORD= :password";
    $resultado=$base->prepare($sql);
   
    $resultado->bindValue("username",$username);
    $resultado->bindValue("password",$password);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){

    }
    else{
        header("location:inicio.php");
    }


    
} catch (Exception $e) {
    die ("Error: " . $e->getMessage());
    
}

?>