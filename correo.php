<?php
 if (isset($_POST[submit])) {
    $destino = "branjo19@hotmail.com";
   if (!empty($_POST[name]) && !empty($_POST[tel]) && !empty($_POST[mensj])) {
     $name = $_POST[name];
     $asunto = $_POST[tel];
     $msg = $_POST[mensj];
  if ($mail) {
    echo "<h4>¡Mail enviado exitosamente!</h4>";
  }
     // code...
   }
 }
