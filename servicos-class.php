<?php

class Serviço{

    public $servico;
    public $tempo;
    public $valor;
    public $material;
    public $motivo;

    public function entrar(){
        //echo "Serviço Prestado";
    }

}

$servico = new Serviço();
$servico->entrar();


$servico->servico="</br>revestimento no Mesmo Padrão dos Bancos em Couro de Fábrica"; 
$servico->tempo="</br>24horas";
$servico->valor='</br>R$1.000,00';
$servico->material='</br>01 Kit de revestimento completo';
$servico->motivo='</br>banco com a capa de couro ressecada a nivel de troca';

// echo "<h3>$servico->servico</h3>";
// echo "<h3>$servico->tempo</h3>";
// echo "<h3>$servico->valor</h3>";
// echo "<h3>$servico->material</h3>";
// echo "<h3>$servico->motivo</h3>";

?>