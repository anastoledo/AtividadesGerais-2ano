<?php 

class Pokemon {

    //atributos
    public $nome;
    public $tipo;
    public $ataque;
    public $defesa;
    public $velocidade;
    public $nivel;

    //métodos
    function __construct($nome, $tipo, $ataque, $defesa, $velocidade, $nivel) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;
        $this->nivel = $nivel;
    }
    function batalha ($n) {
        print "O $n está em uma batalha! \n";
    }

    function aumentarNivel ($x, $n, $e) {
        if ($e % 2 == 0) {
            $x = $x + 1;
            print "O $n súbiu de nivel!! agora seu nivel é $x \n";        
        }
        else {
            $x = $x - 1;
            print "Infelizmente você não foi surtudo e acabou descendo um nivel :((\n";
        }
    }

    function aumentarExperiencia ($n) {
        print "Após a batalha $n ganhou experiencia \n";
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
    $pokémons = new Pokemon ($nome,$tipo, $ataque, $defesa, $velocidade, $nivel);

    $pokémons-> batalha($nome);
    print "Agora vamos descobrir se voce se saiu bem na batalha (ATENÇÃO: se você não se sair bem, vai descer de nivel)";
    $escolha = readline("Informe um número: (tudo dependerá da sua sorte agora!)");
    $pokémons-> aumentarNivel($nivel, $nome, $escolha);
    $pokémons-> aumentarExperiencia($nome); 
       
    }



