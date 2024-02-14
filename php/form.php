<?php
$Asunto = $POST['asunto'];
$Empresa = $_POST['Empresa']; // HINT: use preg_replace() to filter the data
$Nombre = $_POST['Nombre'];
$email = $_POST['email'];
$Estado = $POST['Estado'];
$Alcaldia = $POST['Alcaldia'];
$telefono = $_POST['telephone'];
$mensaje = nl2br($_POST['mensaje']);
$to = "aimeemoreno71@gmail.com, barza.-chivas@hotmail.com";
$from = $email;
$message = 'Empresa:' . $Empresa . ' 
    Nombre:' . $Nombre . '
	Correo:' . $email . '
    Estado: ' . $Estado . '
    Alcaldía: ' . $Alcaldia . '
	No. telefonico: ' . $telefono . '
	Mensaje: ' . $mensaje . '';
$headers = "From: $from\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
if (mail($to, $Asunto, utf8_decode($message), $headers)) {
    header('Location:index.html');
} else {
    echo "<script>
            alert('Por favor enviar más tarde');
            </script>";
}

?>