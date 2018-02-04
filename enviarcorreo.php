<?php
if(isset($_POST['email'])) {
    //Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados
    $email_to = "pmz94@hotmail.com";
    $email_subject = "Correo de pagina web";
    function died($error) {
        // si hay algún error, el formulario puede desplegar su mensaje de aviso
        echo "Error en sus datos. El formulario no puede ser enviado . <br><br>";
        echo "Detalle de los errores . <br><br>";
        echo $error . "<br><br>";
        echo "Corriga estos errores e inténtelo de nuevo  . <br><br>";
        die();
    }
    
    //Se valida que los campos del formulairo estén llenos
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['message'])) {
        died('LLene todos los campos.');
    }
    
    //En esta parte el valor "nombre" nos sirve para crear las variables que recolectaran la información de cada campo
    $name = $_POST['name']; //requerido
    $email_from = $_POST['email']; //requerido
    $subject = $_POST['subject']; //requerido 
    $message = $_POST['message']; //requerido
    $error_message = "Error";
    
    //En esta parte se verifica que la dirección de correo sea válida 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp, $email_from)) {
        $error_message .= 'Correo invalido.<br>';
    }
    
    //En esta parte se validan las cadenas de texto
    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp, $name)) {
        $error_message .= 'El formato del nombre no es válido.<br>';
    }
    if(strlen($subject) <= 0) {
        $error_message .= 'El formato del asunto no es válido.<br>';
    }
    if(strlen($message) <= 0) {
        $error_message .= 'El formato del texto no es válido.<br>';
    }
    if(strlen($error_message) > 0) {
        died($error_message);
    }

    //A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo
    $email_message = "Contenido del Mensaje.\n\n";
    function clean_string($string) {
        $bad = array(
            "content-type","bcc:","to:","cc:","href"
        );
        return str_replace($bad, "", $string);
    }
    $email_message .= "Nombre: ".clean_string($name)."\n";
    $email_message .= "Correo: ".clean_string($email_from)."\n";
    $email_message .= "Asunto: ".clean_string($subject)."\n";
    $email_message .= "Mensaje: ".clean_string($message)."\n";
    
    //Se crean los encabezados del correo
    $headers = 'De: '.$email_from."\r\n".'Responder a: '.$email_from."\r\n".'X-Mailer: PHP/'.phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

<!--incluye aqui tu propio mensaje de Éxito-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactar a Pedro Muñoz</title>
    <link rel="apple-touch-icon" href="asset/img/navbar/logo.png">
    <link rel="icon" type="image/png" href="asset/img/navbar/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <script type="text/javascript" src="asset/js/script.js"></script>
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-head">
            <nav class="navbar hero is-dark">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="asset/img/navbar/CV.pdf" target="_blank" class="navbar-item">
                            <img src="asset/img/navbar/logo.png" alt="Benny" title="Benny" class="logo">
                        </a>
                        <a href="index.html" class="navbar-item">Pedro Muñoz Zubía</a>
                        <span class="navbar-burger burger" data-target="navRight">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navRight" class="navbar-menu">
                        <div class="navbar-end">
                            <a href="aptitudes.html" class="navbar-item">Aptitudes</a>
                            <a href="grados.html" class="navbar-item">Grados Académicos</a>
                            <a href="habilidades.html" class="navbar-item">Habilidades</a>
                            <a href="trabajos.html" class="navbar-item">Trabajos Realizados</a>
                            <a href="contacto.html" class="navbar-item">Contacto</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-2">Gracias por comunicarte conmigo, te respondere al correo que me hayas puesto.</h1>
                <br>
                <div class="field">
                    <div class="control">
                        <a href="index.html" class="button is-medium is-dark">
                            <span class="icon">
                                <i class="fa fa-check"></i>
                            </span>
                            <span>OK</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-foot">
            <nav class="tabs is-centered hero is-dark">
                <div class="container">
                    <ul>
                        <li>
                            <a href="http://www.facebook.com/pmz94" alt="Facebook" title="Facebook" target="_blank" class="nav-item">
                                <span class="icon is-medium">
                                    <i class="fa fa-lg fa-facebook"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com/pmz94" alt="Twitter" title="Twitter" target="_blank" class="nav-item">
                                <span class="icon is-medium">
                                    <i class="fa fa-lg fa-twitter"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com/pmz94" alt="Instagram" title="Instagram" target="_blank" class="nav-item">
                                <span class="icon is-medium">
                                    <i class="fa fa-lg fa-instagram"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com/in/pmz94" alt="LinkedIn" title="LinkedIn" target="_blank" class="nav-item">
                                <span class="icon is-medium">
                                    <i class="fa fa-lg fa-linkedin"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
</body>

<?php
}
?>