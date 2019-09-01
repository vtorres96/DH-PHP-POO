<?php
  require ("Pendrive.php");
  require ("AparelhoDeSom.php");

  $meuPendrive = new Pendrive();
  $meuPendrive->listaMusicas = ["musica1.mp3", "musica2.mp3", "musica3.mp3"];

  $meuAparelhoDeSom = new AparelhoDeSom();
  $meuAparelhoDeSom->desligar();
  echo "<br>";
  $meuAparelhoDeSom->aumentarVolume(10);
  echo "<br>";
  $meuAparelhoDeSom->diminuirVolume(8);
  echo "<br>";
  $meuAparelhoDeSom->conectar($meuPendrive);
  echo "<br>";
  $meuAparelhoDeSom->reproduzir();
  echo "<br>";
  $meuAparelhoDeSom->avancarFaixa();
  echo "<br>";
  $meuAparelhoDeSom->avancarFaixa();
  echo "<br>";
  $meuAparelhoDeSom->avancarFaixa();
  echo "<br>";
  $meuAparelhoDeSom->avancarFaixa();
  echo "<br>";
  $meuAparelhoDeSom->avancarFaixa();
 ?>
