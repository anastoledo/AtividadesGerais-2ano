<?php 

class Pokemon {

    //atributos
    public $nome;
    public $tipo;
    public $ataque;
    public $defesa;
    public $velocidade;

    //métodos
    function __construct($nome, $tipo, $ataque, $defesa, $velocidade) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;
    }
    function batalha ($n) {
        print "O $n está em uma batalha! \n";
    }
    function aumentarNivel ($n,$a, $b, $c) {
        if ($a+$b+$c >= 55) {
            print "O $n subiu de nível! \n";
        }
        else {
            print "O $n desceu de nível! \n";
        }
    }
    function aumentarPontos ($n, $a, $b, $c) {
        if ($a+$b+$c >= 55) {
            print "O $n ganhou pontos! \n";
        }
        else {
            print "O $n perdeu pontos! \n";
        }
    }
    function aumentarExperiencia ($n) {
        print "Mesmo com todos os acontecimentos $n ainda ganhou experiência! \n";
    }
}

$num = readline("Quantos pokémon deseja fazer? ");

for ($i=1; $i <= $num ; $i++) { 
    $nome = readline("Qual o nome do $i pokémon? \n");
    $tipo = readline("Qual o tipo do $i pokémon? \n");
    $ataque = readline("Qual o ataque do $i pokémon? \n");
    $defesa = readline("Qual a defesa do $i pokémon? \n");
    $velocidade = readline("Qual a velocidade do $i pokémon? \n");
    $pokémons = new Pokemon ($nome,$tipo, $ataque, $defesa, $velocidade);

    $pokémons-> batalha($nome);
    $pokémons-> aumentarNivel($nome, $ataque, $defesa, $velocidade);
    $pokémons-> aumentarPontos($nome, $ataque, $defesa, $velocidade);
    $pokémons-> aumentarExperiencia($nome);


}