<?php 

require_once("Produto.php");

class Livro extends Produto {
    
    private string $autor;

    public function getDados(){

        $frase = "---- LIVRO ----\n\n Descrição: " . $this->descricao . " | Unidade de medida: " . $this->unidadeMedida . " | Autor: " . $this->autor . "\n\n";
        
        return $frase;

    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}