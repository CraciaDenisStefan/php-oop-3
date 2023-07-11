<?php
class Messaggi extends SistemiComunicazione {
    private $notificaLettura;
    private $rispostaAccettata;
    static public $coloreLed = 'Green';
  
    public function __construct( string $mittente, string $destinatario, string $titolo, string $messaggio, bool $notificaLettura, bool $rispostaAccettata) {
      parent::__construct($mittente, $destinatario, $titolo, $messaggio);
      $this->notificaLettura = $notificaLettura;
      $this->rispostaAccettata = $rispostaAccettata;
    }

    public function getNotificaLettura(){
        return $this->notificaLettura;
    }

    public function getRispostaAccettata(){
        return $this->rispostaAccettata;
    }
    
    public function risposta(){
        return "Risposta";
    }

    public function invia(){
        return "Messaggio inviato";
    }
}
?>