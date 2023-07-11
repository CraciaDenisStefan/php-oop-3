<?php
class Email extends SistemiComunicazione {
    private $notificaConsegna;
    private $allegati;
    static public $coloreLed = 'Yellow';
  
    public function __construct( string $mittente, string $destinatari, string $titolo, string $messaggio, bool $notificaConsegna, Allegati $allegati) {
      parent::__construct($mittente, $destinatari, $titolo, $messaggio);
      $this->notificaConsegna = $notificaConsegna;
      $this->allegati = $allegati;
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