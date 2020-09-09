<?php 

$nome = "lucas";
$site = 'www.lucas.com.br';

$ano = 1996;
$salario = 5500.99;
$bloqueado = false;
///////////////////////////
$frutas = array("abacaxi","laranja", "manga");

echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("index.php","r");
//var_dump($arquivo); var_dump trara o tipo de arquivo.
$nulo = NULL;//alzencia de valor
$vazio = 0;//foi iniciado
?>