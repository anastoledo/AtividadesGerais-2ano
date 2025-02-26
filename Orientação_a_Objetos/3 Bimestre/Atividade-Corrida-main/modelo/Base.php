<?php

class Base{

    protected string $nome;
    protected string $nacionalidade;
    protected int $anoEntrada;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade(): string
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade(string $nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getAnoEntrada(): int
    {
        return $this->anoEntrada;
    }

    public function setAnoEntrada(int $anoEntrada): self
    {
        $this->anoEntrada = $anoEntrada;

        return $this;
    }
}
