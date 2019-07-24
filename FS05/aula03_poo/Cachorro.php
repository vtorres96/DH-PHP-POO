<?php
  require_once("Mamifero.php");

  class Cachorro extends Mamifero {
    public function locomover(){
      echo "<p>Estou andando para me locomover</p>";
    }

    public function emitirSom(){
      echo "<p>Au Au</p>";
    }

    public function roerOsso(){
      echo "<p>Roendo Osso</p>";
    }
  }
?>