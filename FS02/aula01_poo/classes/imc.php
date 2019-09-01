<?php

class IndiceMassaCorporal{

  public $pesoProp;
  public $alturaProp;

  public function massaCorporal(){
     $imc = ($this->pesoProp / ($this->alturaProp * $this->alturaProp));
    return $imc;
  }

  public function situacaoPeso(){
    $x = $this->massaCorporal();

    if($x < 20){
      return "Abaixo do peso";
    } else if ($x < 25 && $x >= 20){
      return "Peso ideal";
    } else {
      return "Acima do peso";
    }
  }
}

?>
