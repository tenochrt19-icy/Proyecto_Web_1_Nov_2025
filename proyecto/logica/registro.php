<?php
include('../vistas/headder.php');
?>

<body>

    <main>
        <br><br>
        <h1>Registro</h1>
        <form action="./create.php" method="get">
            <label for="">Nombre</label>
            <input type="text" maxlength="100" id="" name="nombre" required placeholder="Ingresa tu nombre">
            <br>
            <label for="">Email</label>
            <input type="email" id="" name="email" maxlength="100" required placeholder="Correo">
            <br>
            <label for="">Telefono</label>
            <input type="text" name="telefono" maxlength="10" required placeholder="Numero de celular">
            <br>
            <button type="submit">Registro</button>
        </form>
        <br>
     <button onclick = "location.href= './session_destroy.php'" style="float: right;">Salir </button>
    </main>

    <?php
    include('../vistas/footer.php');

    ?>
