<?php 

abstract class Midia {

    private string $nome;
    private float $preco;

    //Método

    public function __toString()
    {
        return $this->getTipo() . " - " . $this->nome . " - R$ " . number_format($this->preco, 2, ',' , '.');
    }

    abstract public function getTipo();

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }
}