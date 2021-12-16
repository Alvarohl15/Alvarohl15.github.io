$(function() {

    //Cuenta Regresiva
    $('.cuenta-regresiva').countdown('2020/12/25 00:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    $('.cuenta-regresiva2').countdown('2020/12/10 19:00:00', function(event) {
        $('#horas2').html(event.strftime('%H'));
        $('#minutos2').html(event.strftime('%M'));
        $('#segundos2').html(event.strftime('%S'));
        var video = document.getElementById('video');
        if (event.strftime('%H') > 1) {
            document.getElementById('galeria').style.display = 'none';
        } else {
            document.getElementById('galeria').style.display = 'block';
        }
        if (event.strftime('%S') == 0 && event.strftime('%M') == 0 && event.strftime('%H') == 0) {
            video.play();
        }
    });
});