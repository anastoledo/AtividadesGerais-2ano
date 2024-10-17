<?php 

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica {

    private int $raio;

    public function getArea()
    {
        return 3.14*($this->raio*$this->raio);
    }

    public function getDesenho()
    {
        return
        "           ****       
       **        **   
     *              * 
    *                *
    *                *
     *              * 
       **        **   
           ****       \n";

    }

    public function getRaio()
    {
        return $this->raio;
    }
    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}