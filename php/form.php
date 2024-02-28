<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatarioCodigo = $_POST['asunto'];

    $Asunto = $POST['asunto'];
    $Empresa = $_POST['Empresa'];
    $Nombre = $_POST['Nombre'];
    $email = $_POST['email'];
    $Estado = $POST['Estado'];
    $Alcaldia = $POST['Alcaldia'];
    $telefono = $_POST['Telefono'];
    $mensaje = nl2br($_POST['mensaje']);


    // Determina el destinatario basado en el valor enviado
    switch ($destinatarioCodigo) {
        case "dest1":
            $destinatarioEmail  = "lsca_Gabriel_HS@Hotmail.com";
            break;
        case "dest2":
            $destinatarioEmail  = "lsca_Gabriel_HS@Hotmail.com";
            break;
        case "dest3":
            $destinatarioEmail  = "lsca_Gabriel_HS@Hotmail.com";
            break;
        default:
            echo "Destinatario no válido.";
            exit;
    }

    // Aquí iría el código para enviar el correo electrónico...
    $exito = mail(
        $destinatarioEmail, 
        $email, 
        $message = 'Empresa:' . $Empresa . ' 
        Nombre:' . $Nombre . '
	Correo:' . $email . '
    Estado: ' . $Estado . '
    Alcaldía: ' . $Alcaldia . '
	No. telefonico: ' . $telefono . '
	Mensaje: ' . $mensaje . '');

    if ($exito) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "Método no permitido";
}
