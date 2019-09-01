<?php
  abstract class Equipamento
  {
    public $ligado;

    public function ligar()
    {
      if ($this->ligado) {
        echo "O equipamento já está ligado!" . PHP_EOL;
      }else {
        $this->ligado = true;
        echo "Você ligou o equipamento" . PHP_EOL;
      }
    }

    public function desligar()
    {
      if (!$this->ligado) {
        echo "O equipamento já está desligado!" . PHP_EOL;
      }else {
        $this->ligado = false;
        echo "Você desligou o equipamento" . PHP_EOL;
      }
    }
  }
 ?>
