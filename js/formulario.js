eventListeners();

function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
}

function validarRegistro(e) {
    e.preventDefault();
    var usuario = document.querySelector('#Texto').value,
        contraseña = document.querySelector('#contraseña').value;

    if (usuario === '' || contraseña === '') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Debes llenar ambos campos',
        });
    } else {
        var datos = new FormData();
        datos.append('contraseña', contraseña);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/modelo-login.php', true);

        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta === 'correcto') {
                    window.location.href = 'salaposada.php?nombre=' + usuario;

                } else if (respuesta.respuesta === 'incorrecto') {
                    console.log(respuesta.password);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Contraseña Incorrecta',
                    });
                }
            }
        }

        xhr.send(datos);
    }
}