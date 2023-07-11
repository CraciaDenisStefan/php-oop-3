<?php
class SistemiComunicazione {
    private $mittente;
    private $destinatario;
    private $titolo;
    private $messaggio;
  
    public function __construct($mittente, $destinatario, $titolo, $messaggio) {
      $this->mittente = $mittente;
      $this->destinatario = $destinatario;
      $this->titolo = $titolo;
      $this->messaggio = $messaggio;
    }

    public function getMittente(){
        return $this->mittente;
    }

    public function getDestinatario(){
        return $this->destinatario;
    }

    public function getMessaggio(){
        return $this->messaggio;
    }

  
    public function invia() {
      return "Messaggio inviato";
    }
  }
?>