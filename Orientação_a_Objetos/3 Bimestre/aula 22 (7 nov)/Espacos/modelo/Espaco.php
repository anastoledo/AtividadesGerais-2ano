<?php

class Espaco {

    protected string $nome;
    protected string $endereco;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }


    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}

