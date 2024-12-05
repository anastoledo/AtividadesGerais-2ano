<?php 

class Midia {

    protected $descricao;
    protected $precoPago;
    
    public function getDados() {
        $frase = " Descrição: " . $this->descricao . " | Preço pago: " . $this->precoPago . "\n\n";

        return $frase;
    }

    public function getTipo(){
        $tipo = "Tipo aleatório\n";

        return $tipo;
    }
    
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }


    public function getPrecoPago()
    {
        return $this->precoPago;
    }

  
    public function setPrecoPago($precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
}