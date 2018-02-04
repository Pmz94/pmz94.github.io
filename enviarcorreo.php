<?php
    //Variables que recolectaran la información de cada campo
    $correo_a = "pmz94@hotmail.com";

    $nombre = $_POST["nombre"]; //requerido
    $correo_de = $_POST["correo"]; //requerido
    $asunto = $_POST["asunto"]; //requerido 
    $mensaje = $_POST["mensaje"]; //requerido
    $mensaje_error = "Error: ";

    if(isset($correo_de)) {
        function died($error) {
            // si hay algún error, el formulario puede desplegar su mensaje de aviso
            echo "Error en sus datos. El formulario no puede ser enviado . <br><br>";
            echo "Detalle de los errores . <br><br>";
            echo $error . "<br><br>";
            echo "Corriga estos errores e inténtelo de nuevo . <br><br>";
            die();
        }

        //Se valida que los campos del formulairo estén llenos
        if(!isset($nombre) || !isset($correo_de) || !isset($asunto) || !isset($mensaje)) {
            died("LLene todos los campos!");
        }

        //En esta parte se verifica que la dirección de correo sea válida 
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        if(!preg_match($email_exp, $correo_de)) {
            $mensaje_error .= "Correo invalido . <br>";
        }

        //En esta parte se validan las cadenas de texto
        $string_exp = "/^[A-Za-z .'-]+$/";
        if(!preg_match($string_exp, $nombre)) {
            $mensaje_error .= "El formato del nombre no es válido . <br>";
        }
        if(strlen($asunto) <= 0) {
            $mensaje_error .= "El formato del asunto no es válido . <br>";
        }
        if(strlen($mensaje) <= 0) {
            $mensaje_error .= "El formato del texto no es válido . <br>";
        }
        if(strlen($mensaje_error) > 0) {
            died($mensaje_error);
        }

        //A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo
        $correo_mensaje = "Contenido del Mensaje\n\n";
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad, "", $string);
        }
        $correo_mensaje .= "Nombre: " . clean_string($nombre) . "\n";
        $correo_mensaje .= "Correo: " . clean_string($correo_de) . "\n";
        $correo_mensaje .= "Asunto: " . clean_string($asunto) . "\n";
        $correo_mensaje .= "Mensaje: " . clean_string($mensaje) . "\n";

        //Se crean los encabezados del correo
        $encabezados = "De: " . $nombre . "\r\n" . "Responder a: " . $correo_de . "\r\n" . "X-Mailer: PHP/" . phpversion();
        mail($correo_a, $asunto, $correo_mensaje, $encabezados);
?>

<!--incluye aqui tu propio mensaje de Éxito-->
Gracias por comunicarte conmigo, te respondere al correo que me hayas puesto.

<?php
    }
?>