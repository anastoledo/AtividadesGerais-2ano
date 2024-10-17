<?php 

require_once("modelo/RadioPortatil.php");
require_once("modelo/RadioRelogio.php");

$tipo = "RR";

$radio = null;

if ($tipo == "RP") {
    $radio = new RadioPortatil();
    $radio->setCor("Vermelho");
    $radio->setMarca("Livstar");

}
else if($tipo == "RR"){
    $radio = new RadioRelogio();
    $radio->setCorTela("Preto");
    
}

$radio->ligarRadio();
$radio->desligarRadio();
if ($radio instanceof IRelogio) {
    $radio->mostrarHoras();
}
