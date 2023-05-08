<?php

class Carro{

    public $marca;
    public $cor;
    public $cambio;
    public $ano;
    public $valor;
    public $combustivel;
    public $km;

    public function Comprar(){
     //   echo "Honda civic";
    }

}

$Carro = new Carro();
$Carro->Comprar();


$Carro->marca="</br>Veículo: HONDA CIVIC 1.8 LXS 16V FLEX 4P AUTOMÁTICO"; 
$Carro->ano="</br>Ano/ 2012";
$Carro->cambio='</br>Cambio: Automática';
$Carro->valor='</br>Valor: R$ 58.200';
$Carro->cor='</br>Cor: Cinza';
$Carro->combustivel='</br>Tipo de combustivel Gasolina e álcool';
$Carro->km='</br>KM rodado: 186.000';

// echo "<h3>$Carro->marca</h3>";
// echo "<h3>$Carro->ano</h3>";
// echo "<h3>$Carro->cambio</h3>";
// echo "<h3>$Carro->valor</h3>";
// echo "<h3>$Carro->cor</h3>";
// echo "<h3>$Carro->combustivel</h3>";
// echo "<h3>$Carro->km</h3>";


    ?>