<?php 
    require_once("Equipamento.php");
    
    class AspiradorDePo extends Equipamento {
        // privado pois somente alteraremos a propriedade filtro 
        // dentro da classe AspiradorDePo 
        private $filtro;

        public function __construct(){
            $this->filtro = [];
        }

        public function aspirar(){
            if($this->ligado && count($this->filtro) < 2){     
                array_push($this->filtro, "nova sujeira");
                echo "adicionando sujeira ao filtro";
            } else {
                echo "Filtro de sujeira está cheio, limpe-o";
            }
        }
        
        public function limparFiltro(){
            foreach ($this->filtro as $value) {
                if($value){
                    array_pop($this->filtro);
                }
            }
            echo "O filtro de sujeira do aspirador está vazio";
        }
    }
?>