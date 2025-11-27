<?php
// local
$host = '127.0.0.1:3306';
$user = 'root';
$pass = 'Sword7Rival23@';
$dbname = 'crud_app';
// servidor 
// $host = 'sql113.infinityfree.com';
//  $user = 'if0_40185860';
//  $pass = 'EcneF1x9zu';
//  $dbname = 'if0_40185860_crud_app' ;

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die('Error en la conexion, base de datos' . $conn->connect_error);
}


?>