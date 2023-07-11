<?php
class NotifichePush extends SistemiComunicazione {
    private $icona;
    private $visibile;
  
    public function __construct($mittente, $destinatari, $titolo, $messaggio, $icona, $visibile) {
      parent::__construct($mittente, $destinatari, $titolo, $messaggio);
      $this->icona = $icona;
      $this->visibile = $visibile;
    }

    public function click(){
        return "Apro la notifica push";
    }
    public function invia() {
        return "Notifica push inviata";
      }
}
?>