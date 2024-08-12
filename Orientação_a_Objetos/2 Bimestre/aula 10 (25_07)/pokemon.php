<?php 

class Pokemon {

    //atributos
    public $nome;
    public $tipo;
    public $ataque;
    public $defesa;
    public $velocidade;

    public $nivel;
    public $pontos;
    public $experiencia;

    //construtor
    function __construct($nome, $tipo, $ataque, $defesa, $velocidade, $nivel, $pontos, $experiencia) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;

        $this->nivel = $nivel;
        $this->pontos = $pontos;
        $this->experiencia = $experiencia;
    }
    //métodos
    function batalha ($n) {
        print "O $n está em uma batalha! \n";
    }

    function aumentarNivel () {
        $this ->nivel = $this->nivel + 1;
        $this -> aumentarPontosVida();
        $this -> experiencia = 0;
        
    }
    function aumentarPontosVida () {
        $this->pontos = $this->nivel * 10;
    }
    

    function aumentarExperiencia ($n, $experiencia) {
        $this->experiencia += $experiencia;
        if ($this->experiencia>=100) {
            $this-> aumentarNivel();
        }
        print "Após a batalha $n ganhou experiencia \n";

    }
    function __toString() { 

       $texto = "\nnome = " . $this->nome;
       $texto = $texto . "\ntipo = " . $this->tipo;
       $texto .= "\nataque = " . $this->ataque;
       $texto .= "\ndefesa = " . $this->defesa;
       $texto .= "\nvelocidade = " . $this->velocidade;
       $texto .= "\nnivel = " . $this->nivel;
       $texto .= "\npontos = " . $this->pontos;
       $texto .= "\nexperiência = " . $this->experiencia;

       return $texto;
    }
    
    
}

$num = readline("Quantos pokémon deseja fazer? ");

for ($i=1; $i <= $num ; $i++) { 
    $nome = readline("Qual o nome do $i pokémon? \n");
    $tipo = readline("Qual o tipo do $i pokémon? \n");
    $ataque = readline("Qual o ataque do $i pokémon? \n");
    $defesa = readline("Qual a defesa do $i pokémon? \n");
    $velocidade = readline("Qual a velocidade do $i pokémon? \n");
    $nivel = readline("Informe o nível do $i pokémon: ");
    $experiencia = 0;
    $pontos = 0;
    $pokemons = new Pokemon ($nome,$tipo, $ataque, $defesa, $velocidade, $nivel,$pontos, $experiencia);

    for ($i=1; $i < 10 ; $i++) { 
        $pokemons-> batalha($nome);
    $pokemons-> aumentarNivel($nivel,$experiencia);
    $pokemons-> aumentarPontosVida($pontos, $nivel);
    $pokemons-> aumentarExperiencia($nome, $experiencia); 
    }
    print $pokemons;
 }
