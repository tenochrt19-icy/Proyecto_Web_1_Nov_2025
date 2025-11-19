<?php
include('db.php');

$id = $_POST['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email', telefono = '$telefono' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../paginaPrincipal.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
include('../vistas/headder.php');
?>

<body>
    <h1>EDITAR USUARIO</h1>

    <form action="update.php?id=<?php echo $id; ?>" method="post">
        <label for="">Nombre</label>
        <input type="text" maxlength="100" name="nombre" required placeholder="Ingresa tu nombre"
            value="<?php echo $row['nombre']; ?>">
        <br>

        <label for="">Email</label>
        <input type="email" maxlength="100" name="email" required placeholder="Correo"
            value="<?php echo $row['email']; ?>">
        <br>

        <label for="">Teléfono</label>
        <input type="text" name="telefono" maxlength="10" required placeholder="Número de celular"
            value="<?php echo $row['telefono']; ?>">
        <br>

        <button type="submit">Actualizar</button>
    </form>

    <br><br>

    <?php
    include('../vistas/footer.php');
    ?>