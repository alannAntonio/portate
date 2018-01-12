<?php
   include("conexion.php");
   @session_start();
   session_destroy();
   if(isset($_POST["nombreInput"])) {

      // Usamos el nombre de usuario enviado de nuestroformulario
      $nombre = $_POST["nombreInput"];
      $email = $_POST["correoInput"];
      $mensaje = $_POST["mensajeInput"];
      $destinatarioEmail = "contacto@portate.cl";
      $asuntoEmail = "Pórtate: Contacto Web";
      include("correo-contacto.php");  
      $headers =  'MIME-Version: 1.0' . "\r\n"; 
      $headers .= 'From: '.$nombre.' <'.$email.'>' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
      $headers .= 'Content-type: text/html; charset=utf-8';
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
      mail($destinatarioEmail, $asuntoEmail, $mensaje, $headers);          
                 
              
      echo "Tu mensaje fue enviado exitosamente. Nos pondremos en contacto contigo a la brevedad.";
      
   }else{
      echo "Faltan datos :(";
   }
?>