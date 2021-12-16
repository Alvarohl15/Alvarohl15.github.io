    <?php
    include 'includes/functions/sessiones.php';
        include 'includes/templates/header.php';
        session_start();
        if(isset($_GET['nombre'])) {
            $_SESSION = array(
                'nombre' =>$_GET['nombre']
            );
        }
    ?>


    <body>
        <header>
            <h1 class="posada">Posada</h1>
        </header>
        <a class="cerrar-sesion" href="ingresosala.php?cerrar_sesion=true">Salir</a>
        <div class="contenedor2" id="meet"></div>
        <div class="contenedor2">

            <div class="cuenta-regresiva2">
                <p>Comienza en: </p>
                <p id="horas2" class="numero"></p>
                <p> Hrs..</p>
                <p id="minutos2" class="numero"></p>
                <p> Min.</p>
                <p id="segundos2" class="numero"></p>
                <p> Seg.</p>
            </div>

            <video poster='img/sparkler-839831_1920.jpg' id='video' src="img/Posada 1.mp4"></video>

        </div>
        <section id="galeria" class="contenedor2">
            <h2>Galeria de Fotos</h2>
            <div class="contenedor-galeria">
                <a href="img/galeria/posada1 (1).jpeg" data-lightbox="galeria"><img src="img/cuadros/posada1 (1)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (1.1).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (1.1)c.png" alt="imagen2"></a>
                <a href="img/galeria/posada1 (2).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (2)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (3).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (3)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (4).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (4)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (5).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (5)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (6).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (6)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (7).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (7)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (8).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (8)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (9).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (9)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (10).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (10)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (11).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (11)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (12).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (12)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (13).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (13)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (14).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (14)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (15).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (15)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (16).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (16)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (17).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (17)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (18).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (18)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (19).jpg" data-lightbox="galeria"><img src="img/cuadros/posada1 (19)c.png" alt="imagen1"></a>
                <a href="img/galeria/posada1 (20).JPG" data-lightbox="galeria"><img src="img/cuadros/posada1 (20)c.png" alt="imagen1"></a>


            </div>
        </section>

        <?php
        include 'includes/templates/footer.php';
        ?>
