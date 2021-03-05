<?php

 $destino = "branjo19@hotmail.com";
   $nombre = $_POST["name"];
   $numero = $_POST["tel"];
   $mensaje = $_POST["mensj"];
   $contenido = "Nombre: " . $name . "\nAsunto: " . $tel;
   mail($destino, "Contacto", $mensj);
   header("Location: A_Donde_Lo_Quieras_Redireccionar");
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
