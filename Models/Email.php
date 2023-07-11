<?php
class Email extends SistemiComunicazione {
    private $allegati;
    private $notificaConsegna;
  
    public function __construct($mittente, $destinatari, $titolo, $messaggio, $allegati, $notificaConsegna) {
      parent::__construct($mittente, $destinatari, $titolo, $messaggio);
      $this->allegati = $allegati;
      $this->notificaConsegna = $notificaConsegna;
    }

    public function getAllegati(){
        return $this->allegati;
    }

    public function getNotificaConsegna(){
        return $this->notificaConsegna;
    }
  

    public function inoltra(){
        return "Email inoltrata";
    }
    
    public function stampa(){
        return "Email stampata";
    }

    public function invia(){
        return "Email inviata";
    }

}
?>