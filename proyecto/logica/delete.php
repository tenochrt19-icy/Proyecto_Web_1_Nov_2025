<?php
include('db.php');

$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../paginaPrincipal.php');
    exit();
} else {
    echo "ERROR : " . $conn->error;
}
?>