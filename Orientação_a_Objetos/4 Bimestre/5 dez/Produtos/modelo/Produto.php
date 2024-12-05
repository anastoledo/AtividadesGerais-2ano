<?php

class Produto {

    protected string $descricao;
    protected string $unidadeMedida;

    public function getDados(){
        $frase = "---- PRODUTO ----\n\n Descrição: " . $this->descricao . " | Unidade de medida: " . $this->unidadeMedida . "\n\n";
        
        return $frase;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida(string $unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }
}