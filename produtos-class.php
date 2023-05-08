<?php

class Produto{

    public $preco;
    public $marca;
    public $modelo;
    public $cor;
    public $funcao;
    public $garantia;
    public $descricao;
    public $unidade;
    public $parcelas;
    public $material;

    public function compras(){
       // echo "<p><h3>Capa para Banco Civic</h3><p/>";
    }

}

$Produto = new Produto();
$Produto->compras();


$Produto->preco="</br>R$ 1.890,00"; 
$Produto->marca="</br>Kit Completo Revestimento Interno em material misto";
$Produto->modelo='</br>Civic 2012 A 2017';
$Produto->cor='</br>Cinza claro';
$Produto->funcao='</br>revestimento do banco para deixar com aspecto bonito e novo, além de proteger seu banco';
$Produto->garantia='</br>12meses';
$Produto->descricao='</br>revestimento no Mesmo Padrão dos Bancos em Couro de Fábrica; (Ou personalizado, à escolher)? Instalado Diretamente no Banco Substituindo o Revestimento de Fábrica;? Fácil de Limpar;? Alta Qualidade e Durabilidade; Dica: Para melhor conservação, recomendamos que sejam feitas higienizações periódicas a cada 4 meses com produtos próprios para limpeza de couro. Instalação: Fixado na estrutura dos bancos (necessária a retirada do revestimento atual).';
$Produto->unidade='</br>01 Kit de revestimento completo';
$Produto->parcelas='</br>até 8x de R$ 236,25';
$Produto->material='</br>Couro';


// echo "<h3>$Produto->preco</h3>"; 
// echo "<h3>$Produto->marca</h3>";
// echo "<h3>$Produto->modelo</h3>";
// echo "<h3>$Produto->cor</h3>";
// echo "<h3>$Produto->funcao</h3>";
// echo "<h3>$Produto->garantia</h3>";
// echo "<h3>$Produto->descricao</h3>";
// echo "<h3>$Produto->unidade</h3>";
// echo "<h3>$Produto->parcelas</h3>";
// echo "<h3>$Produto->material</h3>";


    ?>