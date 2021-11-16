<?php

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "jamesclon@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Has recibido un correo del formulario de la web de LogopediaLucia de".$name.".\n\n".$message;


    mail($mailTo, $txt, $headers);

    header("Location: index.php?mailsend");

  }




 ?>
