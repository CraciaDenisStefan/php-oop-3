<?php
class SistemiComunicazione {
    private $mittente;
    private $destinatario;
    private $titolo;
    private $messaggio;
    static public $suoneria = 'DRIIIN';
  
    public function __construct( string $mittente, string  $destinatario, string  $titolo, string  $messaggio) {
      $this->mittente = $mittente;
      $this->destinatario = $destinatario;
      $this->titolo = $titolo;
      $this->messaggio = $messaggio;
    }

    public function getMittente(){
        return $this->mittente;
    }

    public function getTitolo(){
      return $this->titolo;
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