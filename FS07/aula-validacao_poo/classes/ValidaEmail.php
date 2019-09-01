<?php

    class ValidaEmail extends Validacao{
        
        public function validaEmail(){

            if(parent::eVazio()){
                return false;
            }

            if(filter_var($this->dadoASerValidado, FILTER_VALIDATE_EMAIL)){
                return true;
            } else {
                return false;
            }
        }
    }

?>