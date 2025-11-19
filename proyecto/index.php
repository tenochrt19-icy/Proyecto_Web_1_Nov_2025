<?php
include('./vistas/headder.php');
?>
    <h1>Login</h1><br>

    <form action="./logica/validarlogin.php" method="POST">
        <label for="NombreUser">Nombre de usuario</label>
        <input type="text" name="nombre_usuario" >
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Iniciar sesion </button>
    </form>
<?php
    include('./vistas/footer.php');
    ?>