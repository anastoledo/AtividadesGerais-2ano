<?php 

require_once("Produto.php");

class Computador Extends Produto {
    private $processador;
    private $memoria;

    public function getDados(){

        $frase = "---- COMPUTADOR ----\n\n Descrição: " . $this->descricao . " | Unidade de medida:" . $this->unidadeMedida . " | Processador: " . $this->processador . " | Memória: " . $this->memoria . "\n\n";
        
        return $frase;

    }
    

    public function getProcessador()
    {
        return $this->processador;
    }

   
    public function setProcessador($processador): self
    {
        $this->processador = $processador;

        return $this;
    }


    public function getMemoria()
    {
        return $this->memoria;
    }

    public function setMemoria($memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}