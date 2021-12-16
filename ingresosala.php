    <?php
        include 'includes/templates/header.php';
        if(isset($_GET['cerrar_sesion'])) {
            $_SESSION = array();
        }
        
    ?>

<body>

    <form id="formulario" class="ingreso" method="POST">
        <label for="nombre">Usuario:</label>
        <input placeholder="Tu Nombre" id="Texto" id="nombre" type="text"><br>
        <label for="contraseña">Contraseña:</label>
        <input id="contraseña" type="password"><br>
        <input id="start" type="submit" class="boton" value="Ingresar">
    </form>

    <?php
        include 'includes/templates/footer.php';
    ?>

