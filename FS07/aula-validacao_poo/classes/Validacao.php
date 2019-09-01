<?php

    abstract class Validacao {

        protected $dadoASerValidado;

        public function __construct(string $dado){
            $this->dadoASerValidado = $dado;
        }

        public function eVazio(){
            if(empty($this->dadoASerValidado)){
                return true;
            } else {
                return false;
            }
        }

        abstract public function validar();
        abstract public function validaEmail();
    }

?>