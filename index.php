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
<body class="bg-primary-subtle">
  <div class="container my-5">
  <h1 class="text-danger text-center my-5">Suoneria: <?php echo SistemiComunicazione::$suoneria ?></h1>

  <ul class="list-unstyled">
    <h3 class="text-warning-emphasis">Email:</h3>
    <?php foreach ($email as $mail) {?>
        <h4 class=" text-warning">LED: <?php echo Email::$coloreLed ?></h4>
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
<hr>
    <ul class="list-unstyled">
    <h3 class="text-warning-emphasis">Messaggi:</h3>
    <?php foreach ($messaggi as $messaggio) {?>
        <h4 class="text-success">LED: <?php echo Messaggi::$coloreLed ?></h4>
        <li>Mittente: <?php echo $messaggio->getMittente() ?></li>
        <li>Destinatario: <?php echo $messaggio->getDestinatario() ?></li>
        <li>Titolo: <?php echo $messaggio->getTitolo() ?></li>
        <li>Messaggio: <?php echo $messaggio->getMessaggio() ?></li>
        <li>Letto: <?php echo $messaggio->getNotificaLettura() ? 'Sì' : 'No'; ?></li>
        <li>Risposta Accettata: <?php echo $messaggio->getRispostaAccettata() ? 'Sì' : 'No'; ?></li>
        <li><?php echo $messaggio->risposta() ?></li>
        <li><?php echo $messaggio->invia() ?></li>
        <hr>
    <?php }?>
    </ul>
<hr>
    <ul class="list-unstyled">
    <h3 class="text-warning-emphasis">Notifiche Push:</h3>
    <?php foreach ($notifiche as $notifica) {?>
        <h4 class="text-white">LED: <?php echo NotifichePush::$coloreLed ?></h4>
        <li>Mittente: <?php echo $notifica->getMittente() ?></li>
        <li>Destinatario: <?php echo $notifica->getDestinatario() ?></li>
        <li>Titolo: <?php echo $notifica->getTitolo() ?></li>
        <li>Messaggio: <?php echo $notifica->getMessaggio() ?></li>
        <li>Da: <?php echo $notifica->getIcona() ?></li>
        <li>Visualizzato: <?php echo $notifica->getVisibile() ? 'Sì' : 'No'; ?></li>
        <li><?php echo $notifica->click() ?></li>
        <li><?php echo $notifica->invia() ?></li>
        <hr>
    <?php }?>
    </ul>
  </div>
   
</body>
</html>