<?php
class Messaggi extends SistemiComunicazione {
    private $notificaLettura;
    private $rispostaAccettata;
  
    public function __construct($mittente, $destinataro, $titolo, $messaggio, $notificaLettura, $rispostaAccettata) {
      parent::__construct($mittente, $destinatari, $titolo, $messaggio);
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
        echo "Messaggio inviato";
    }
}
?>