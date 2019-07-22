<?php
    class Pendrive {
        // público pois futuramente iremos adicionar músicas
        // a propriedade lista de músicas, e se tornarmos privada
        // não conseguiremos alterar a propriedade filtro
        public $listaDeMusicas;

        public function __construct(){
            $this->listaDeMusicas = [];
        }
    }
?>