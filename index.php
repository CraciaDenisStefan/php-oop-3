<?php
require_once __DIR__.'/Models/SistemiComunicazione.php';
require_once __DIR__.'/Models/Email.php';
require_once __DIR__.'/Models/Messaggi.php';
require_once __DIR__.'/Models/NotifichePush.php';


$email = new Email('io','tu','ciao','come va','allego',true);
$email ->invia();
var_dump($email)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $email->getMittente() ?>
    <?php echo $email->invia() ?>
</body>
</html>