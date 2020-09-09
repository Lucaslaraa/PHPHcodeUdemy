<?php 
/*
$Nascimento = 1996;//bom sempre iniciar com maiusculo
echo $Nascimento;

$NomeCompleto = "";//quando não é apresentado um valor proprio, pode ocupar depois com dados do teclado/usuario

$Nome1 = "João";//numeral vem depois das letras sempre

$1Nome = "";//Este exemplo vai dar erro por ter um numeral no inicio

$_Nome="";//Aqui mostra que o unico caracter especial que pode ser usado na variavel é o _
*/

//Tomar cuidado com os nomes das variaveis, pois há palavras reservadas.

$Nome1 = "João";

$Sobrenome="lucas";

$NomeCompleto= $Nome1 ." ". $Sobrenome;//como concatena, não se utiliza o + em PHP utiliza-se o .
echo $NomeCompleto;

exit;//para o codigo nesta linha

echo $Nome1;

echo"<br/>";

unset($Nome1);//Aqui ira limpar a variavel

if(isset($Nome1)){
	echo $Nome1;
}//O termo Isset será utilizado para criar uma condição para retornar apenas se estiver com a variavel ocupada, fazendo assim não ocorrer o erro.





?>