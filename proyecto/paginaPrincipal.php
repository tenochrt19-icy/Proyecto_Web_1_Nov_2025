<?php
include('./logica/db.php');
$consulta = "SELECT * FROM usuarios";
$result = $conn->query($consulta);
include('./vistas/headder.php');
?>



    <h1>USUARIOS</h1>
    <a href="./logica/registro.php">Agregar usuario</a>
   <?php 
$edit = isset($_GET['edit']) ? $_GET['edit'] : null;
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Acciones</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <form action="./logica/update.php" method="POST">

            <td>
                <?php echo $row['id']; ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </td>

            <?php if ($edit == $row['id']) { ?>
                
                <!-- FILA EN MODO EDICIÓN -->
                <td><input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"></td>
                <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
                <td><input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"></td>

                <td>
                    <button type="submit">Guardar</button>
                    <button type="button" onclick="window.location.href='./paginaPrincipal.php'">Cancelar</button>
                   <!-- <a href="?">Cancelar</a> -->
                </td>

            <?php } else { ?>

                <!-- FILA NORMAL -->
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefono']; ?></td>

                <td>
                    <a href="?edit=<?php echo $row['id']; ?>">Editar</a>
                    <a href="./logica/delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                </td>

            <?php } ?>

            </form>
        </tr>
    <?php } ?>
</table>


     <br>
     <button onclick = "location.href= './logica/session_destroy.php'">Salir </button>

    <?php
    include('./vistas/footer.php');
    ?>