<?php 
$host = 'localhost:3306';
$user = "root";
$pass = "natalia";
$db = "login_db";

$conn = new mysqli($host,$user,$pass,$db);
if($conn -> connect_error ){
    die("Conexion fallida".$conn-> connect_error);
}
else{
    echo "<h1>Conexion con exito</h1>";
}
?>