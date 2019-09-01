<?php
  require ("Equipamento.php");

  class AparelhoDeSom extends Equipamento
  {
    public $volume;
    public $usb;
    private $numeroFaixa;

    public function __construct()
    {
      $this->volume = 0;
      $this->numeroFaixa = 0;
    }

    public function aumentarVolume($valorVolume)
    {
      $this->volume += $valorVolume;
      if ($this->ligado && $valorVolume > 20 || $this->volume > 20) {
        $this->volume -= $valorVolume;
        echo "Cuidado com seus tímpanos";
      }else{
        echo "O valor de seu volume atualmente é de $this->volume". PHP_EOL;
      }
    }

    public function diminuirVolume($valorVolume)
    {
      $this->volume -= $valorVolume;
      if ($this->ligado && $this->volume < 0) {
        $this->volume = 0;
      }
      echo "O valor de seu volume atualmente é de $this->volume" . PHP_EOL;
    }
    public function conectar($pendrive)
    {
      $this->usb = $pendrive;
    }
    public function reproduzir()
    {
      echo "Tocando a música " . $this->usb->listaMusicas[$this->numeroFaixa] . PHP_EOL;
    }
    public function avancarFaixa()
    {
      if ($this->numeroFaixa < count($this->usb->listaMusicas)) {
        $this->numeroFaixa++;
        echo $this->reproduzir();
      }
    }
    public function voltarFaixa()
    {
      if ($this->numeroFaixa < count($this->usb->listaMusicas)) {
        $this->numeroFaixa--;
        echo $this->reproduzir();
      }
    }
  }

 ?>
