    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>
    <script src="jquery-1.12.0.min.js"></script>
    
    
    <?php 
    $actual = obtenerPaginaActual();
    if($actual === 'posada' || $actual === 'salaposada' ) {
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw==" crossorigin="anonymous"></script>';
        echo '<script src="js/main.js"></script>';
    } 
    if($actual === 'salaposada' ) {
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.2/js/lightbox.min.js" integrity="sha512-G3hBdkIeUYJc1flNDPOYlCBoDkllX5f3wyk2BW8vNU9gAobQ8mnOpNC2t3kWxkWSz6aSCJUSqZn/C7Mb9yTbTg==" crossorigin="anonymous"></script>';
        echo '<script src="js/sala.js"></script>';
    } 
    if($actual === 'ingresosala' ) {
        echo '<script src="js/formulario.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.12.4/sweetalert2.min.js" integrity="sha512-LyCjq+cjkggeYKAxuJiw9h/ZSVNKtLuhkF2ILDBskRAbzGH5iaQBVhEugc1qkzxL6EyghUgJoKKMIDlUgp7hAw==" crossorigin="anonymous"></script>';
    } 
    ?>

    
    

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>

    <script src="https://www.google-analytics.com/analytics.js" async></script>
    <?php
	// Guarda todo el contenido a un archivo
	$fp = fopen($archivoCache, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// Enviar al navegador
	ob_end_flush();
    ?>
</body>

</html>