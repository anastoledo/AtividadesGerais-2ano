<?php

class Veiculo {

    protected $modelo;
    protected $velocidadeMax;
    protected $cor;
    
    public function getModelo()
    {
        return $this->modelo;
    }

    
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

   
    
    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    
    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }

   
    
    public function getCor()
    {
        return $this->cor;
    }


    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }
}