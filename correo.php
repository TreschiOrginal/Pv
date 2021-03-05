<?php
 if (isset($_POST[submit])) {
    $destino = "branjo19@hotmail.com";
   if (!empty($_POST[name]) && !empty($_POST[tel]) && !empty($_POST[mensj])) {
     $name = $_POST[name];
     $asunto = $_POST[tel];
     $msg = $_POST[mensj];
     $header = "From:" . "/r/n";
     $headre.= "Reply-to:" . "/r/n";
     $header.= "X-Mailer: PHP/". phpversion();
     mail()
  if ($mail) {
    echo "<h4>¡Mail enviado exitosamente!</h4>";
  }
     // code...
   }
 }
