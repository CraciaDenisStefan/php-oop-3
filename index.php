<?php
require_once __DIR__.'/Models/SistemiComunicazione.php';
require_once __DIR__.'/Models/Allegati.php';
require_once __DIR__.'/Models/Email.php';
require_once __DIR__.'/Models/Messaggi.php';
require_once __DIR__.'/Models/NotifichePush.php';
require_once __DIR__.'/Models/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  <div class="container my-5">
  <ul class="list-unstyled">
    <h3>Email:</h3>
    <?php foreach ($email as $mail) {?>
        <li>Mittente: <?php echo $mail->getMittente() ?></li>
        <li>Destinatario: <?php echo $mail->getDestinatario() ?></li>
        <li>Titolo: <?php echo $mail->getTitolo() ?></li>
        <li>Messaggio: <?php echo $mail->getMessaggio() ?></li>
        <li>Consegnato: <?php echo $mail->getNotificaConsegna() ? 'Sì' : 'No'; ?></li>
        <li>Allegato: <?php echo $mail->getAllegati()->getNome(); ?> <?php echo $mail->getAllegati()->getTipo(); ?></li>
        <li><?php echo $mail->stampa() ?></li>
        <li><?php echo $mail->inoltra() ?></li>
        <li><?php echo $mail->invia() ?></li>
        <hr>
    <?php }?>
    </ul>
  </div>
   
</body>
</html>