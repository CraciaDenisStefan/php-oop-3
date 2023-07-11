<?php

    $allegato_1 = new Allegati ('foto','batman');
    $email_1 = new Email('Denis','Batman','ciao','come va?',true,$allegato_1);
    $email_1 ->invia();
    $email_1 ->inoltra();
    $email_1 ->stampa();
    $allegato_2 = new Allegati ('gif','iron-man');
    $email_2 = new Email('Denis','Spider-man','we','come stai?',false, $allegato_2);
    $email_2 ->invia();
    $email_2 ->inoltra();
    $email_2 ->stampa();
    $email =[$email_1,$email_2];


    
// $messaggi =[

// ];
// $notifiche=[

// ]
?>