<?php

  class Tarefa {
    public $titulo;
    public $descricao;
    public $dataCriacao;
    public $dataConclusao;
    public $dataEntrega;
    public $prioridade;

    public function __construct($titulo, $descricao, $dataCriacao, $dataConclusao, $dataEntrega, $prioridade)
    {
      $this->titulo = $titulo;
      $this->descricao = $descricao;
      $this->dataCriacao = $dataCriacao;
      $this->dataConclusao = $dataConclusao;
      $this->dataEntrega = $dataEntrega;
      $this->prioridade = $prioridade;
    }

    public function getTitulo(){
      return $this->titulo;
    }

    public function getDescricao(){
      return $this->descricao;
    }

    public function getDataCriacao(){
      return $this->dataCriacao;
    }

    public function getDataConclusao(){
      return $this->dataConclusao;
    }

    public function getDataEntrega(){
      return $this->dataEntrega;
    }

    public function getPrioridade(){
      return $this->prioridade;
    }
  }

 ?>
