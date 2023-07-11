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

    $messaggio_1 = new Messaggi ('Denis','Superman','criptonite','sempre debole eh ?',false,false);
    $messaggio_1->risposta();
    $messaggio_1->invia();
    $messaggio_2 = new Messaggi ('Denis','Thor','Asgard','senza casa ?',false,true);
    $messaggio_2->risposta();
    $messaggio_2->invia();
    $messaggio_3 = new Messaggi ('Denis','Hulk','raggi gamma','spacca tutto',true,false);
    $messaggio_3->risposta();
    $messaggio_3->invia();

    $messaggi =[$messaggio_1,$messaggio_2,$messaggio_3];


    $notifiche_1 = new NotifichePush ('Thor','Denis','Asgard','spiritoso','wp',true);
    $notifiche_1->click();
    $notifiche_1->invia();
    $notifiche_2 = new NotifichePush ('Hulk','Denis','raggi gamma','spacco tutto','telegram',false);
    $notifiche_2->click();
    $notifiche_2->invia();

    $notifiche =[$notifiche_1,$notifiche_2]


?>