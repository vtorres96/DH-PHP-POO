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

    function getcorDeEscama(){
      return $this->corDeEscama;
    }

    function setcorDeEscama($corDeEscama){
      $this->corDeEscama = $corDeEscama;
    }
  }
?>