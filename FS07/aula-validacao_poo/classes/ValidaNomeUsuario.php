<?php

    class ValidaNomeUsuario extends Validacao{
        
        public function validar(){

            if(parent::eVazio()){
                return false;
            }

            if(preg_match('/^\@.*/', $this->dadoASerValidado)){
                return true;
            } else {
                return false;
            }
        }
    }

?>