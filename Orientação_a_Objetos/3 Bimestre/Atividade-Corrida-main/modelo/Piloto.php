<?php 

require_once("Base.php");
require_once("IDados.php");


class Piloto extends Base implements IDados{

    //Atributos
    private int $numero;
    private Equipe $equipe;
    private int $idade;

    //Métodos
    public function __construct($a = "", $b = 0, $c = 0, $d = "", $e = 0, $f = "")
    {
        $this->nome =  $a;
        $this->anoEntrada = $b;
        $this->numero = $c;
        $this->equipe = $d; 
        $this->idade = $e;
        $this->nacionalidade = $f;
       
    }

    public function getDados()
    {
        return "Nome: " . $this->getNome() . "| Ano de entrada do piloto: " . $this->anoEntrada.  "| Número do piloto: " . $this->numero . " | Equipe: " . $this->getEquipe()->getNome() . "| Idade: " . $this->idade . "| Nacionalidade: " . $this->nacionalidade . "\n\n";
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

 
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
 
    public function getEquipe(): Equipe
    {
        return $this->equipe;
    }


    public function setEquipe(Equipe $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }


    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

}
