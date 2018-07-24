<?php
/*Tipos simples*/

/*string*/
$nome = "gta";
$site = 'www.nordcsite.com.br';

/*Inteiro*/
$ano = 1991;

/*Ponto flutuante*/
$salario = 3400.99;

/*Booleano*/
$bloqueado = false;

/*Tipos compostos*/
echo"<br/>";
echo"<br/>";
echo"<br/>";
/*Array*/
$frutas = array('abacaxi','uva','morango'); /*Obs lembrando sempre que a primeira possição do array é 0 e não 1 */

echo $frutas{1};

/*Object*/
echo"<br/>";
echo"<br/>";
$nascimento = new Datetime();/*Variavel objeto */

var_dump($nascimento);

echo"<br/>";
echo"<br/>";
echo"<br/>";

/*Tipos especiais*/

$arquivo = fopen("exemplo-03.php","r");

var_dump($arquivo);

echo"<br/>";
echo"<br/>";

$nulo = NULL; /*NULL é ausência de  vazio NÃO TEM VALOR */
$vazio = " "; /*Vario ele foi iniciado mas não tem valor*/

var_dump($nulo);

echo"<br/>";

var_dump($vazio);
?>