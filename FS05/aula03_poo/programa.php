<?php
  // Classes Modelos
  require_once("Mamifero.php");
  require_once("Ave.php");
  require_once("Peixe.php");
  require_once("Reptil.php");
  // Classes Filhas
  require_once("Cachorro.php");
  require_once("Arara.php");
  require_once("Tilapia.php");
  require_once("Tartaruga.php");

  echo "<h1>Mamífero</h1>";
  $mamifero = new Mamifero();
  $mamifero->setCorDePelos("Branco");
  echo "Cor de pelos: " . $mamifero->getCorDePelos();
  $mamifero->locomover();
  $mamifero->alimentar();
  $mamifero->emitirSom();
  echo "<hr>";

  echo "<h1>Ave</h1>";
  $ave = new Ave();
  $ave->setCorDePenas("Brancas");
  echo "Cor das penas: " . $ave->getCorDePenas();
  $ave->locomover();
  $ave->alimentar();
  $ave->emitirSom();
  echo "<hr>";

  echo "<h1>Peixe</h1>";
  $peixe = new Peixe();
  $peixe->setCorDeEscama("Azul");
  echo "Cor da escama: " . $peixe->getCorDeEscama();
  $peixe->locomover();
  $peixe->alimentar();
  $peixe->emitirSom();
  $peixe->soltarBolha();
  echo "<hr>";

  echo "<h1>Réptil</h1>";
  $reptil = new Reptil();
  $reptil->setCorDeEscama("Verde");
  echo "Cor da escama: " . $reptil->getCorDeEscama();
  $reptil->locomover();
  $reptil->alimentar();
  $reptil->emitirSom();
  echo "<hr>";

  echo "<h1>Cachorro</h1>";
  $cachorro = new Cachorro();
  $cachorro->setCorDePelos("Pretos");
  echo "Cor de pelos: " . $cachorro->getCorDePelos();
  $cachorro->locomover();
  $cachorro->alimentar();
  $cachorro->emitirSom();
  $cachorro->roerOsso();
  echo "<hr>";

  echo "<h1>Arara</h1>";
  $arara = new Arara();
  $arara->setCorDePenas("Azuis");
  echo "Cor das penas: " . $arara->getCorDePenas();
  $arara->locomover();
  $arara->alimentar();
  $arara->emitirSom();
  echo "<hr>";

  echo "<h1>Tilápia</h1>";
  $tilapia = new Tilapia();
  $tilapia->setCorDeEscama("Azuis");
  echo "Cor de escamas: " . $tilapia->getCorDeEscama();
  $tilapia->locomover();
  $tilapia->alimentar();
  $tilapia->emitirSom();
  echo "<hr>";

  echo "<h1>Tartaruga</h1>";
  $tartaruga = new Tartaruga();
  $tartaruga->setCorDeEscama("Marrom");
  echo "Cor do casco: " . $tartaruga->getCorDeEscama();
  $tartaruga->locomover();
  $tartaruga->alimentar();
  $tartaruga->emitirSom();

?>