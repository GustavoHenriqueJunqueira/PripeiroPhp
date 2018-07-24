 <?php

 //$anoNascimento/*Exemplo de variavel como deve ser escrita, camel case. Este tipo de escrita é mais bem vista pois o nome da variavel já é auto explicativa e o camel case siguinifica que a primeira parala tudo minusculo e a segunda tendo apenas a primeira letra maiusculo*/


$nome1 = "Maria"; /*Expemplo de variavel juntamente com numero. esta é a forma correta de se escrever variavel com numeros a forma errada seria $1nome. uma variavel nunca pode começar com um numero*/

$sobrenome = "Rangel";
 $nomeCompleto = $nome1 . " " . $sobrenome;


echo $nomeCompleto;

exit;
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo $nome1;

echo "<br/>"; //tag utilizada para pular linha

unset($nome1); /*tag para limpar variavel, podendo utilizar mais de uma variavel por vez para limpar o conteduto da variavel*/
echo "<br/>";
echo "<br/>";
echo "<br/>";
$nome1 = "mamão"; /*Declarando novamente um novo nome na variavel $nome1 agora com o mamão e apresentando em vaixo exibindo na tela o que foi declarado*/

echo $nome1;/*foi exibido na tela o novo nome declarado na variavel que acabou de ser limpa na tela*/







/*Sempre lembrar que ao criar um codigo ele deve ser feito da melhor forma e mais explicada possivel para que outros programadores consigam dar suporte da melhor forma possivel*/
