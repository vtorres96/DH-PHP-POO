<?php
  require_once("ControleRemoto.php");

  $controleRemoto = new ControleRemoto();
  $controleRemoto->ligar();
  $controleRemoto->aumentarVolume();
  $controleRemoto->diminuirVolume();
  $controleRemoto->aumentarVolume();
  $controleRemoto->ativarMudo();
  $controleRemoto->desativarMudo();
  $controleRemoto->desligar();
?>