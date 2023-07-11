<?php
class Allegati{
    private $nome;
    private $tipo;


public function __construct(string $nome,string $tipo) {
$this->nome=$nome;
$this->tipo=$tipo;
}

public function getNome(){
    return $this->nome;
}


public function getTipo(){
    return $this->tipo;
}

}

?>