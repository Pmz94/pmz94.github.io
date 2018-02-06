document.addEventListener("DOMContentLoaded", function () {
    //Obtener los elementos que hay en la clase "navbar-burger"
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll(".navbar-burger"), 0);
    //Ver si hay algun menu con hamburguesita
    if ($navbarBurgers.length > 0) {
        //Agregar un evento de click en cada una
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener("click", function () {
                //Obtener el id que tenga el atributo "data-target"
                var target = $el.dataset.target;
                var $target = document.getElementById("navRight");
                //Poner o quitar la clase "is-active" junto a las clases "navbar-burger" y "navbar-menu"
                $el.classList.toggle("is-active");
                $target.classList.toggle("is-active");
            });
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    //Para validar el input del nombre
    var $nombre = document.getElementById("nombre");
    $nombre.oninvalid = function (e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
            e.target.setCustomValidity("Cual es su nombre?");
        }
    };
    $nombre.oninput = function (e) {
        e.target.setCustomValidity("");
    };

    //Para validar el input del correo
    var $email = document.getElementById("email");
    $email.oninvalid = function (e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
            e.target.setCustomValidity("Le falto su correo!");
        }
    };
    $email.oninput = function (e) {
        e.target.setCustomValidity("");
    };

    //Para validar el input del asunto
    var $asunto = document.getElementById("asunto");
    $asunto.oninvalid = function (e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
            e.target.setCustomValidity("Que quiere?");
        }
    };
    $asunto.oninput = function (e) {
        e.target.setCustomValidity("");
    };

    //Para validar el input del mensaje
    var $mensaje = document.getElementById("mensaje");
    $mensaje.oninvalid = function (e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
            e.target.setCustomValidity("Diga algo!");
        }
    };
    $mensaje.oninput = function (e) {
        e.target.setCustomValidity("");
    };
});

/*
//Funcion para contar y validar que todos los inputs no esten vacios
document.addEventListener("DOMContentLoaded", function () {
    var elements = document.getElementsByTagName("input");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Te falto aqui");
            }
        };
        elements[i].oninput = function (e) {
            e.target.setCustomValidity("");
        };
    }
});
*/