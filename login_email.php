<?php
   include("conexion.php");
   @session_start();
   session_destroy();
   if(isset($_POST["email"])) {
      // Usamos el nombre de usuario enviado de nuestroformulario
      $email = $mysqli->real_escape_string($_POST['email']); 
      
      $sql = "SELECT * FROM clientes WHERE correo = '$email' ";
      $result = $mysqli->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      		
      if($count == 1) {
               echo "true"; 
               // include("ingresos_usuarios.php");
               // ingresar_usuario($myusername,$active);            
      }else{
         session_start();
         $_SESSION["activa"] = TRUE;
         $_SESSION["email"] = strtolower($email);
         $_SESSION["tipo_cuenta"] = "No existe información";
         $_SESSION["fecha_activacion"] = "No existe información";
         $_SESSION["fecha_termino"] = "No existe información";
         echo "false";
      }
   }else{
      echo "true";
   }
?>