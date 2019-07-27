<?php

class Conta {
    public $codConta;
    protected $nomeConta;
    private $saldo;
    private $tipoConta;
    private $situacao;
    private $tarifa;
    
    public function Conta(){
        $this->situacao = false;
        $this->saldo = 0;
    }
    
    public function abrirConta(){
        if($this->nomeConta !== null && $this->tipoConta !==null){
            $this->setSituacao(true);
            $this->setCodigo(1);
        } else {
            echo "Você precisa registrar seu nome e o tipo de conta primeiro<br>";
        }
        
        if($this->getSaldo() == 0 && $this->getTipoConta() == "cc"){
            $this->setSaldo(100);
            $this->setTarifa(10);
            echo "Conta Corrente aberta com sucesso<br>";
        } else if($this->getSaldo() == 0 && $this->getTipoConta() == "cp"){
            $this->setSaldo(200);
            $this->setTarifa(20);
            echo "Conta Poupança aberta com sucesso<br>";
        }       
    }
    
    public function cancelarConta(){
        if($this->getSituacao() == false){
            echo "Essa conta já está cancelada.<br>";
        } elseif($this->getSaldo() > 0){
            echo "Você ainda possui dinheiro no banco. Tente retirá-lo para poder cancelar a conta.<br>";
        } else if($this->getTarifa() > $this->getSaldo()){
            echo "Você ainda possui dívidas no banco. Tente pagá-las<br>";
        } else {
            $this->setSituacao(false);
            echo "Sua conta foi cancelada<br>";
        }
    }
    
    public function retirarDinheiro($quantia){
        if($this->getSituacao() == true){
            if($this->getSaldo() >= $quantia){
                $this->saldo = $this->saldo - $quantia;
                echo "Dinheiro retirado com sucesso<br>";
            } elseif($this->getSaldo() < $quantia){
                echo "Você não tem essa quantidade de dinheiro para retirar<br>";
            }   
        } elseif($this->getSituacao() == false){
            echo "Está conta já foi cancelada. Não foi possível sacar nenhum dinheiro<br>";
        }
    }
    
    public function depositarDinheiro($deposito){
        if($this->getSituacao()){
            $this->setSaldo($this->getSaldo() + $deposito);
            echo "Seu dinheiro foi depositado com sucesso</br>";
        } else if($this->getSituacao()){
            echo "Essa conta está cancelada. Não é possível depositar dinheiro nela.<br>";
        }
    }
    
    public function pagarTarifa(){
        if($this->getSituacao()){
            if($this->getTipoConta() == "cc"){
            if($this->getSaldo() < $this->getTarifa()){
                echo "Você não tem dinheiro suficiente para pagar a tarifa. Seu saldo é de".$this->getSaldo()." a tarifa é de R$: 12,00 reais<br>";
            } else if($this->getSaldo() >= $this->getTarifa()){
                $this->setSaldo($this->getSaldo() - $this->getTarifa());
                echo "Tarifa paga com sucesso<br>";
                $this->setTarifa(0);
            }
        } else if ($this->getTipoConta() == "cp"){
                if($this->getSaldo() < 20){
                    echo "Você não possui dinheiro suficiente depositado para pagar a tarifa. Seu saldo é de".$this->getSaldo()."<br>";
                } else if($this->getSaldo() >= 20){
                    $this->setSaldo($this->getSaldo() - $this->getTarifa());
                    echo "Tarifa paga com sucesso. Seu saldo é de: ".$this->getSaldo()."<br>";
                    $this->setTarifa(0);
                }
            }
        } else {
            echo "Essa conta não possui tarifa pois já foi cancelada<br>";
        }  
    }

    function getNomeConta(){
        return $this->nomeConta;
    }
    
    function setNomeConta($nome){
        $this->nomeConta = $nome;
    }  

    function getSaldo(){
        return $this->saldo;
    } 

    function setSaldo($valor){
        $this->saldo = $valor;
    } 

    function getTipoConta(){
        return $this->tipoConta;
    }

    function setTipoConta($tipo){
        $this->tipoConta = $tipo;
    }

    function getSituacao(){
        return $this->situacao;
    }

    function setSituacao($situacao){
        $this->situacao = $situacao;
    }
      
    function getTarifa(){
        return $this->tarifa;
    }

    function setTarifa($taxa){
        return $this->tarifa = $taxa;
    }
        
    function setCodigo($cod){
        $this->codConta = $this->codConta + $cod;
    }
}