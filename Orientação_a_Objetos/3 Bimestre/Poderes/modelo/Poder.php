<?php

class Poder {

    private string $descricao;
    private int $forca;

    public function __construct(string $descricao,int $forca )
    {
        $this->descricao = $descricao;

        $this->forca = $forca;
    }
    
    public function getForcaTotal(int $forcaMago) : float {

        $resultado = $forcaMago * (1 + $this->forca /100);
        return $resultado;
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

    public function getForca(): int
    {
        return $this->forca;
    }


    public function setForca(int $forca): self
    {
        $this->forca = $forca;

        return $this;
    }
}