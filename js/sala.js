(function() {
    "use strict";
    document.addEventListener('DOMContentLoaded', function() {

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/functions/nombre.php', true);
        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta.nombre);
                var dia = new Date;
                var domain = "meet.jit.si";
                var options = {
                    roomName: "Posada" + dia.getDate() + dia.getMonth() + dia.getFullYear(),
                    height: 700,
                    parentNode: document.getElementById("meet"),
                    userInfo: {
                        displayName: respuesta.nombre
                    },
                    prejoinPageEnabled: false
                }
                var api = new JitsiMeetExternalAPI(domain, options);
            }
        }
        xhr.send();


    });
})();