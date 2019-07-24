<?php
  require_once("Ave.php");

  class Arara extends Ave {
    public function locomover(){
      echo "<p>Estou voando para me locomover</p>";
    }

    public function emitirSom(){
      echo "<p>Gruhhhh Gruhhhh</p>";
    }
  }
?>