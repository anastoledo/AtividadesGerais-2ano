<?php

 $num1 = array( "nome"  =>  "Manuel de Medeiros",
                                 "endereco"  =>  "Rua das Acácias",
                                 "cidade"   =>  "Foz do Iguaçu",
                                 "UF"   =>  "PR" );

                $num2 =  array( "nome"  =>  "Juliana de Amaral",
                                 "endereco"  =>  "Rua dos Pinheiros",
                                 "cidade"  =>   "Florianópolis",
                                 "UF"  =>  "SC");

                $num3 =  array ("nome"  =>  "Rodrigo Beidek",
                                "endereco"  =>  "Rua Dom Pedro I",
                                "cidade"   =>  "Petrópolis",
                                "UF"  =>  "RJ");

               $num4 =   array( "nome"  =>  "Fabíola da Silava",
                                "endereco"  =>  "Rua Chile",
                                "cidade"  =>  "Guarulhos",
                                "UF"  => "SP");

$arrays = array($num1 , $num2 , $num3, $num4);

foreach($arrays as $dados) {
    print $dados['nome'] . " | ";
    print $dados['endereco'] . " | ";
    print $dados['cidade'] . " | ";
    print $dados['UF'] . " | " . "\n"; 
}  