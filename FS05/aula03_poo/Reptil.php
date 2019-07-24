<?php
  require_once("Animal.php");

  class Reptil extends Animal {
    private $corDeEscama;

    public function locomover(){
      echo "<p>Rastejando</p>";
    }

    public function alimentar(){
      echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom(){
      echo "<p>Som dos répteis</p>";      
    }

    function getCorDeEscama(){
      return $this->corDeEscama;
    }

    function setCorDeEscama($corDeEscama){
      $this->corDeEscama = $corDeEscama;
    }
  }
?>