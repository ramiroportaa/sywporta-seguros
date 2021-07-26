<?php
// Conecto mi form con el server a traves de los name
$nya_asegurado = $_POST['nya_asegurado'];
$dni_asegurado = $_POST['dni_asegurado'];
$tel_asegurado = $_POST['tel_asegurado'];
$compa_asegurado = $_POST['compa_asegurado'];
$mail_asegurado = $_POST['mail_asegurado'];
$patente_asegurado = $_POST['patente_asegurado'];
$nya_conductor = $_POST['nya_conductor'];
$dni_conductor = $_POST['dni_conductor'];
$tel_conductor = $_POST['tel_conductor'];
$nya_tercero = $_POST['nya_tercero'];
$dni_tercero = $_POST['dni_tercero'];
$tel_tercero = $_POST['tel_tercero'];
$vehiculo_tercero = $_POST['vehiculo_tercero'];
$patente_tercero = $_POST['patente_tercero'];
$compa_tercero = $_POST['compa_tercero'];
$fechahora = $_POST['fechahora'];
$lugar = $_POST['lugar'];
$descripcion = $_POST['descripcion'];
$newsletter = $_POST['newsletter'];

​
// Como funciona con el server
$header = 'From: ' . $mail_asegurado . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
// Como me a llegar el cuerpo del mail a mi, o sea lo que la gente escribió en el form
$mensaje = "Este mensaje fue enviado por el ASEGURADO " . $nya_asegurado . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail_asegurado . " \r\n";
$mensaje .= "Su tel es: " . $tel_asegurado . " \r\n";
$mensaje .= "Su DNI es: " . $dni_asegurado . " \r\n";
$mensaje .= "Asegurado con: " . $compa_asegurado . " \r\n";
$mensaje .= "Su patente es: " . $patente_asegurado . " \r\n";
$mensaje .= "NyA conductor: " . $nya_conductor . " \r\n";
$mensaje .= "DNI conductor: " . $dni_conductor . " \r\n";
$mensaje .= "Tel conductor: " . $tel_conductor . " \r\n";
$mensaje .= "NyA TERCERO: " . $nya_tercero . " \r\n";
$mensaje .= "DNI TERCERO: " . $dni_tercero . " \r\n";
$mensaje .= "Tel TERCERO: " . $tel_tercero . " \r\n";
$mensaje .= "Vehiculo del TERCERO: " . $vehiculo_tercero . " \r\n";
$mensaje .= "Patente del TERCERO: " . $patente_tercero . " \r\n";
$mensaje .= "Compañia del TERCERO: " . $compa_tercero . " \r\n";
$mensaje .= "Fecha y hora del siniestro: " . $fechahora . " \r\n";
$mensaje .= "Lugar del siniestro: " . $lugar . " \r\n";
$mensaje .= "Descripcion: " . $_POST['descripcion'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
$mensaje .= "Suscribe al newletter: " . $newsletter . " \r\n";
​
$para = 'p0rt4csd@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Siniestro informado desde la web';
​
mail($para, $asunto, utf8_decode($mensaje), $header);

echo "<h2>Siniestro informado con exito!</h2>​"
header('Location:index.html');
​
?>