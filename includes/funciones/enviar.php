<?php 
if (isset($_POST['nombre']['email']['mensaje'])) {
    die(var_dump(json_encode($_POST)));
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $header = 'From: '.$email . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion(). "\r\n";
    $header .= 'Mime-Version: 1.0 \r\n';
    $header .= 'Content-Type: text/plain';
    $mensajeCorreo = "This message was send by: " .$nombre . "\r\n";
    $mensajeCorreo .= "Email: " . $email . "\r\n";
    $mensajeCorreo .= "Email:: " . $mensaje . "\r\n";
    $para = "imanol125@hotmail.com";
    $asunto = "Contacto de sitio web";
    
    mail($para, $asunto, utf8_encode($mensajeCorreo), $header);
    
    echo json_encode(array(
        'mensaje' => sprintf('El mensaje se ha enviado!'),
        'datos' => array( 
            'nombre' => $nombre,
            'email' => $email,
            'mensaje' => $mensaje
        )
        ));

}    

