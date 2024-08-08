<?php

class Livro {
    //atributos
    private $titulo;
    private $autor;
    private $genero;
    private $numPaginas;

    
    public function __construct($titulo, $autor, $genero, $numPaginas ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->numPaginas = $numPaginas;
    }
   
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): self {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor() {
        return $this->autor;
    }


    public function setAutor($autor): self {
        $this->autor = $autor;

        return $this;
    }

  
    public function getGenero() {
        return $this->genero;
    }


    public function setGenero($genero): self {
        $this->genero = $genero;

        return $this;
    }

    public function getNumPaginas() {
        return $this->numPaginas;
    }

    public function setNumPaginas($numPaginas): self {
        $this->numPaginas = $numPaginas;

        return $this;
    }
}

for ($i=1; $i < 3 ; $i++) { 
    $titulo = readline("Informe o titulo: \n");
    $autor = readline("Informe o autor: \n");
    $genero = readline("Informe o genero: \n");
    $numPaginas= readline("Informe o número de páginas: \n");
    
    $livros = new Livro($titulo, $autor, $genero, $numPaginas);



}