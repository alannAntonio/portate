<?php
   include("conexion.php");
   @session_start();
   session_destroy();
   if(isset($_POST["email"])) {

      $email = $mysqli->real_escape_string($_POST['email']);
      $password = $mysqli->real_escape_string($_POST['password']); 
      
      $sql = "SELECT * FROM clientes WHERE correo = '$email'";
      $result = $mysqli->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      		
      if($count == 1) {
               $sql2 = "SELECT * FROM clientes WHERE correo = '$email' AND clave = '$password'";
               $result2 = $mysqli->query($sql2);
               $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
               $count2 = mysqli_num_rows($result2);
               if($count2 == 1){
                  session_start();
                  $_SESSION["activa"] = TRUE;
                  $_SESSION["email"] = strtolower($email);
                  $estado_cuenta = $row2["estado_cuenta"];
                  if($estado_cuenta == "activa"){
                     $_SESSION["estado_cuenta"] = "activa";
                     $_SESSION["tipo_cuenta"] = ucwords($row2["tipo_cuenta"]);
                     $_SESSION["fecha_activacion"] = date_format(date_create($row2["fecha_activacion"]), 'd-m-Y');
                     $_SESSION["fecha_termino"] = date_format(date_create($row2["fecha_termino"]), 'd-m-Y');
                  }else{
                     $_SESSION["tipo_cuenta"] = "No existe información";
                     $_SESSION["fecha_activacion"] = "No existe información";
                     $_SESSION["fecha_termino"] = "No existe información";
                  }
                  
                  echo "true"; 
               }else{
                  echo "soloEmail";
               }               
               // include("ingresos_usuarios.php");
               // ingresar_usuario($myusername,$active);            
      }else{         
         echo "false";
      }
   }else{
      echo "false";
   }
?>