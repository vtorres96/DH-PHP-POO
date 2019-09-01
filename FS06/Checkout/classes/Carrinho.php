<?php

class Carrinho
{
    protected $itens;

    public function __construct(ItemCarrinho $item)
    {
        $this->itens[] = $item;
    }

    public function adicionarItem(ItemCarrinho $item)
    {
        $this->itens[] = $item;
    }

    public function listarItens()
    {
        return $this->itens;
    }

    public function total()
    {
        $total = 0;
        foreach($this->itens as $item) {
            $total += $item->subtotal();
        }

        return $total;
    }
}