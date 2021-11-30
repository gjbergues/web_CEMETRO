<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$mensaje = $_POST['mensaje'];
$para = 'emi_santillan@hotmail.com';
$titulo = 'cemetro';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Telefono: $tel\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.investigacion.frc.utn.edu.ar/cemetro/';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
