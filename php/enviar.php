<?php
    //Destinatario
    $correo_destino = "brahimeduali@gmail.com";
    //Variables extraídas del html
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $tipo_consulta = $_POST["combobox"];
    $consulta = $_POST["consulta"];
    //Asunto + contenido del mail a enviar
    $asunto = "Consulta desde la página principal.";
    $contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nTeléfono: " . $telefono .
    "\nEmail: " . $email . "\nConsulta sobre: " . $tipo_consulta . "\nConsulta:\n" . $consulta;
    //Envío
    mail($correo_destino, $asunto, $contenido);
    //Redirección
    header("Location:confirma.html");
?>