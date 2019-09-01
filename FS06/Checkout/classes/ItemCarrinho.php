<?php

class ItemCarrinho
{
    protected $quantidade;
    protected $produto;

    public function __construct(Produto $produto, int $quantidade){
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function subtotal()
    {
        return $this->quantidade * $this->produto->getValor();
    }
}