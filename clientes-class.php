
<?php

class Cliente{

    public $enfermidade;
    public $genero;
    public $endereco;
    public $Email;
    public $nome;
    public $renda;
    public $cpf;
    public $telefone;
    public $orcamento;
    public $idade;

    public function entrar(){
       // echo "Você entrou no site";
    }

}

$Cliente = new Cliente();

$Cliente->nome="</br>Clara"; 
$Cliente->enfermidade="</br>não possui";
$Cliente->genero='</br>feminino';
$Cliente->Email='</br>50.0 kg';
$Cliente->raca='</br>branca';
$Cliente->renda='</br>R$ 1.200,00/mês';
$Cliente->cpf='</br>000.000.000-00';
$Cliente-> telefone='</br>+00 (00)0000-0000';
$Cliente->orcamento='</br>até R$100.000,00';
$Cliente->idade='</br>20';


// echo "<h3>$Cliente->nome</h3>";
// echo "<h3>$Cliente->idade</h3>";
// echo "<h3>$Cliente->genero</h3>";
// echo "<h3>$Cliente->telefone</h3>";
// echo "<h3>$Cliente->Email</h3>";
// echo "<h3>$Cliente->endereco</h3>";
// echo "<h3>$Cliente->cpf</h3>";
// echo "<h3>$Cliente->enfermidade</h3>";
// echo "<h3>$Cliente->orcamento</h3>";


    ?>