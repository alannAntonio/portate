<?php
   include("conexion.php");
   @session_start();
   session_destroy();
   if(isset($_POST["email"])) {

      // Usamos el nombre de usuario enviado de nuestroformulario
      $email = $mysqli->real_escape_string($_POST['email']);
      $sql = "SELECT * FROM clientes WHERE correo = '$email'";
      $result = $mysqli->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      		
      if($count == 1){
            echo "true";
            $destinatarioEmail = $email;
            $hoy2 = date("d-m-Y");
            $clave = $row['clave'];
            $asuntoEmail = "Pórtate: Activación cuenta Netflix";
            include("correo-recuperacion.php");  
            $headers =  'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'From: Portate.cl <noresponder@jokais.cl>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
            $headers .= 'Content-type: text/html; charset=utf-8';
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
            mail($destinatarioEmail, $asuntoEmail, $mensaje, $headers);          
                 
      }else{         
         echo "false";
      }
   }else{
      echo "false";
   }
?>