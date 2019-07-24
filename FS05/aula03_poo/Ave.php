<?php
  require_once("Animal.php");

  class Ave extends Animal {
    private $corDePenas;

    public function locomover(){
      echo "<p>Voando</p>";
    }

    public function alimentar(){
      echo "<p>Comendo frutas</p>";
    }

    public function emitirSom(){
      echo "<p>Som das aves</p>";      
    }

    function getCorDePenas(){
      return $this->corDePenas;
    }

    function setCorDePenas($corDePenas){
      $this->corDePenas = $corDePenas;
    }
  }
?>