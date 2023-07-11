<?php
class NotifichePush extends SistemiComunicazione {
    private $icona;
    private $visibile;
    static public $coloreLed = 'White';
  
    public function __construct( string $mittente, string  $destinatari, string  $titolo, string  $messaggio, string  $icona, bool $visibile) {
      parent::__construct($mittente, $destinatari, $titolo, $messaggio);
      $this->icona = $icona;
      $this->visibile = $visibile;
    }

    public function getIcona(){
      return $this->icona;
  }

  public function getVisibile(){
      return $this->visibile;
  }

    public function click(){
        return "Apro la notifica push";
    }
    public function invia() {
        return "Notifica push inviata";
      }
}
?>