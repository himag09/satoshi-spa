(function () {
    'use strict';
    window.addEventListener('load', function () {
        // seleccionamos el form para validar
        var forms = document.getElementsByClassName('needs-validation');
        // valida cada campo y prevenir que se envie
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                if (form.checkValidity() === false) {
                    event.stopPropagation();
                    // console.log('Faltan datos');
                } else {
                    // console.log('todo correcot');
                    // leemos datos del form y mandamos por ajax 
                    var nombre = document.getElementById('nombre').value,
                    email = document.getElementById('email').value,
                    mensaje = document.getElementById('mensaje').value
                    // EJECUTAR AJAX
                    var xhr = new XMLHttpRequest();

                    // abrir la conexion
                    xhr.open('POST','includes/funciones/enviar.php', true);
                    // siempre usar header con form
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    // revisar el estado 
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            var respuesta = JSON.parse(xhr.responseText);
                            if (respuesta.respuesta === true) {
                                var div = document.createElement('div');
                                div.appendChild(document.createTextNode('Se envio correctamente'));
                                div.classList.add('alert', 'alert-success', 'mt-4', 'text-center');
                                document.querySelector('form').appendChild(div);
                                setTimeout(() => {
                                    document.querySelector('.alert').remove();
                                }, 3600);
                            }
                        }
                    }
                    // enviar el request
                    xhr.send("nombre="+nombre+"&email="+email+"&mensaje="+mensaje);
                }
                form.classList.add('was-validated');
            }, false);
        }, false);
    });
})();