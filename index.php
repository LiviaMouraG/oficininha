

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
</head>
<body>

<div id="menu">
        <ul>
            <li><a href="./carros-class.php">Carro</a></li>
            <li><a href="./produtos-class.php">Produto</a></li>
            <li><a href="./servicos-class.php">Serviço</a></li>
        </ul>
</div> 
<?php   

include("clientes-class.php");
include("produtos-class.php");
include("servicos-class.php");
include("carros-class.php");
?>
        <p style="background: #000000; color: white; font-size: 60px;text-align: center;">OFC Mourette</p>
    
    <div class="botaosearch">


        <input id = "searchbar" type="text" 
        name = "search" placeholder = "🔍Buscar"></input>
    </div> 

    <br/><br/><br/><br/>
    <img src="./imagens/Banner-Central-Sul.png" width="100%" height="400px">
    <br/><br/><br/><br/>

    

    <section class="flex center"> 
        <div>
            <img src='./imagens/excelEVba_login.png' width='400' height='400px'>
        </div>
        <div class="flex center">
            <?php

            $Cliente = new Cliente();

            $Cliente->nome="</br>Nome: Clara"; 
            $Cliente->enfermidade="</br>Enfermidade: não possui";
            $Cliente->genero='</br>Genero: feminino';
            $Cliente->Email='</br>Email: clara@gmail.com';
            $Cliente->raca='</br>Rça: branca';
            $Cliente->renda='</br>Renda/mês: R$ 1.200,00/mês';
            $Cliente->cpf='</br>000.000.000-00';
            $Cliente-> telefone='</br>Telefone: +00 (00)0000-0000';
            $Cliente->orcamento='</br>Orçamento: até R$2.000,00';
            $Cliente->idade='</br>Idade: 20 anos';

            $Cliente->entrar();

            echo $Cliente->nome;
            echo $Cliente->idade;
            echo $Cliente->genero;
            echo $Cliente->telefone;
            echo $Cliente->Email;
            echo $Cliente->endereco;
            echo $Cliente->cpf;
            echo $Cliente->enfermidade;
            echo $Cliente->orcamento;
            
            ?>
        </div>
    </section>
    
    
    <section class="flex center-column"> 
        <div>
            <img src='./imagens/Captura de tela 2023-03-06 134820.png' width='100%' height='800px'>
        </div>
        <div class="flex">

        <?php  
        $Produto = new Produto();
        $Produto->compras();

        $Produto->preco="</br>Preço: R$ 1.890,00"; 
        $Produto->marca="</br>Marca:Kit Completo Revestimento Interno em material misto";
        $Produto->modelo='</br>Modelo: Civic 2012 A 2017';
        $Produto->cor='</br>Cor: Cinza claro';
        $Produto->funcao='</br>Função: revestimento do banco para deixar com aspecto bonito e novo, além de proteger seu banco';
        $Produto->garantia='</br>Garantia: 12meses';
        $Produto->descricao='</br>Descrição: revestimento no Mesmo Padrão dos Bancos em Couro de Fábrica; (Ou personalizado, à escolher)? Instalado Diretamente no Banco Substituindo o Revestimento de Fábrica;? Fácil de Limpar;? Alta Qualidade e Durabilidade; Dica: Para melhor conservação, recomendamos que sejam feitas higienizações periódicas a cada 4 meses com produtos próprios para limpeza de couro. Instalação: Fixado na estrutura dos bancos (necessária a retirada do revestimento atual).';
        $Produto->unidade='</br>Unidade: 01 Kit de revestimento completo';
        $Produto->parcelas='</br>Parcelamento: até 8x de R$ 236,25';
        $Produto->material='</br>Material: Couro';

        echo $Produto->preco; 
        echo $Produto->marca;
        echo $Produto->modelo;
        echo $Produto->cor;
        echo $Produto->funcao;
        echo $Produto->garantia;
        echo $Produto->descricao;
        echo $Produto->unidade;
        echo $Produto->parcelas;
        echo $Produto->material;
      ?>
        </div>
    </section>
    <br/><br/><br/><br/>
    <section class="flex center"> 
        <div>
            <img src='./imagens/c1.jpg' width='98%' height='400px'>
        </div>
        <div class="flex center">
    
<?php  

$servico = new Serviço();
$servico->entrar();

$servico->servico="</br>Serviço: revestimento no Mesmo Padrão dos Bancos em Couro de Fábrica"; 
$servico->tempo="</br>Tempo: 24horas";
$servico->valor='</br>Valor: R$1.000,00';
$servico->material='</br>Material: 01 Kit de revestimento completo';
$servico->motivo='</br>Motivo: banco com a capa de couro ressecada a nivel de troca';

echo $servico->servico;
echo $servico->tempo;
echo $servico->valor;
echo $servico->material;
echo $servico->motivo;
?>

</div>
    </section>

    <section class="flex center"> 
        <div>
            <img src='./imagens/9076_1.webp' width='100%' height='475px'>
        </div>
        <div class="flex center">
    
<?php  
$Carro = new Carro();
$Carro->Comprar();

$Carro->marca="</br>Veículo: HONDA CIVIC 1.8 LXS 16V FLEX 4P AUTOMÁTICO"; 
$Carro->ano="</br>Ano/ 2012";
$Carro->cambio='</br>Cambio: Automática';
$Carro->valor='</br>Valor: R$ 58.200';
$Carro->cor='</br>Cor: Cinza';
$Carro->combustivel='</br>Tipo de combustivel Gasolina e álcool';
$Carro->km='</br>KM rodado: 186.000';

echo $Carro->marca;
echo $Carro->ano;
echo $Carro->cambio;
echo $Carro->valor;
echo $Carro->cor;
echo $Carro->combustivel;
echo $Carro->km;

 $orçamento=2000;

    $carro1="carro";
    $Preçoconserto=1000;
    $CarroTotal=($Preçoconserto-$orçamento);
    $Total=(1000);
    echo "<h3>Saldo restante:</h3>R$",$Valortotal=($CarroTotal),"Reais.";
?>
</div>
    </section>


 <p style="background: #000000; color: #000000; font-size: 60px;text-align: center;">OFC Mourette</p>
    <img src='./imagens/Captura de tela 2023-02-27 132457.png' width='100%' height='150px'>
    <p style="background: #000000; color: #000000; font-size: 60px;text-align: center;">OFC Mourette</p>

</body>
</html>