<?php

include("./db.php");
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];

echo $nombre;
echo $email;
echo $telefono;

$sql = "INSERT INTO usuarios(nombre,email,telefono) VALUES ('$nombre','$email','$telefono')";
if ($conn->query($sql) === true) {
    header('Location: ../paginaPrincipal.php');

    exit();
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}
?>