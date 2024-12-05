<?php

class Exemplo {
  
    public function escreva($v = "", $w = "") {
        if ($v == "" && $w == "") {
            print "Valor: Sem valor \n";
        }

        elseif($w == ""){
            print "Valor: " . $v . "\n";
        }

        else{
            print "Valores: " . $v . " " . $w . "\n"; 
        }
        
    }



}