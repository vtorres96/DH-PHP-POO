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

    function getcorDePenas(){
      return $this->corDePenas;
    }

    function setcorDePenas($corDePenas){
      $this->corDePenas = $corDePenas;
    }
  }
?>