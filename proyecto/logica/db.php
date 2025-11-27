<?php
// local
$host = '127.0.0.1:3306';
$user = 'root';
$pass = 'Sword7Rival23@';
$dbname = 'crud_app';
// servidor 
// $host = 'sql113.infinityfree.com';
//  $user = 'if0_40185854';
//  $pass = 'MwvVIhsLbz';
// $dbname = 'if0_40185854_ico'

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die('Error en la conexion, base de datos' . $conn->connect_error);
}



?>
