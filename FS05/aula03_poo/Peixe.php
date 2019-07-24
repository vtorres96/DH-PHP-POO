<?php
  require_once("Animal.php");

  class Peixe extends Animal {
    private $corDeEscama;

    public function locomover(){
      echo "<p>Nadando</p>";
    }

    public function alimentar(){
      echo "<p>Comendo substâncias</p>";
    }

    public function emitirSom(){
      echo "<p>Peixe não faz som</p>";      
    }

    function soltarBolha(){
      echo "<p>Soltou uma bolha</p>";
    }

    function getcorDeEscama(){
      return $this->corDeEscama;
    }

    function setcorDeEscama($corDeEscama){
      $this->corDeEscama = $corDeEscama;
    }
  }
?>