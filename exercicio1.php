<?php

echo "<h2> Exercício 1 </h2>";

echo "1) Escreva um algoritmo que armazene o valor 10 em uma variável A e o valor 20 em uma variável B.
A seguir (utilizando apenas atribuições entre variáveis) troque os seus conteúdos fazendo com que o
valor que está em A passe para B e vice-versa. Ao final, escrever os valores que ficaram armazenados
nas variáveis.<br><br><br><br>";

$texto1 = "A variável A tem o valor de 10";
$texto2 = "A variável B tem o valor de 20";

echo str_replace("10","20",$texto1);

echo "<br>";

echo str_replace("20","10",$texto2);

echo "<hr>";


echo "<h2> Exercício 10 </h2>";

echo "10) O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do
distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que o percentual do distribuidor
seja de 28% e os impostos de 45%, escrever um algoritmo para ler o custo de fábrica de um carro,
calcular e escrever o custo final ao consumidor.<br><br><br><br>";

$valCarro = (10000);
$imposto = $valCarro*(45/100);
$distr = $valCarro*(28/100);

$valCarro = $valCarro+$imposto+$distr;

echo "O valor do carro é de {$valCarro} reais";

echo "<hr>";

echo "<h2> Exercício 13 </h2>";

echo "13) Faça um algoritmo que leia três notas de um aluno, calcule e escreva a média final deste aluno.
Considerar que a média é ponderada e que o peso das notas é 2, 3 e 5. Fórmula para o cálculo da média
final é:
n1 * 2 + n2 * 3 + n3 * 5
mediafinal = -----------------------------------
10<br><br><br><br>";

$aluno = "Vitor";

$nota1 = 8.5;
$nota2 = 5.6;
$nota3 = 6.9;

$mediaFinal = (($nota1*2)+($nota2*3)+($nota3*5)/10);

echo "A nota de Português do aluno {$aluno} foi de: {$nota1}";

echo "<br>";

echo "A nota de Matemática do aluno {$aluno} foi de: {$nota2}";

echo "<br>";

echo "A nota de História do aluno {$aluno} foi de: {$nota3}";

echo "<br>";

echo "A média final do aluno {$aluno} foi de: {$mediaFinal}";

echo "<hr>";

echo "<h2> Exercício 14 </h2>";

echo "14) Ler um valor e escrever a mensagem É MAIOR QUE 10! se o valor lido for maior que 10, caso
contrário escrever NÃO É MAIOR QUE 10!<br><br><br><br>";

$num1 = 8;

if ($num1>10){
    echo "É maior que 10";
}

else {
    echo "É menor que 10";
}

echo "<hr>";

echo "<h2> Exercício 15 </h2>";

echo "15) Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo).<br><br><br><br>";

$valor1 = 0;

if ($valor1>-1){
    echo "O valor {$valor1} é positivo";
}

else {
    echo "O valor {$valor1} é negativo";
}

echo "<hr>";

echo "<h2> Exercício 16 </h2>";

echo "16) As maçãs custam R$ 1,30 cada se forem compradas menos de uma dúzia, e R$ 1,00 se forem
compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e
escreva o custo total da compra.<br><br><br><br>";

$valorMaca1 = 1.30;
$valorMaca2 = 1.00;

$valorFinalMaca1 = ($valorMaca1*11);
$valorFinalMaca2 = ($valorMaca2*12);

echo "Se comprar uma dúzia leva por {$valorFinalMaca2} reais, mas se levar 11 fica por {$valorFinalMaca1} reais";

echo "<hr>";

echo "<h2> Exercício 17 </h2>";

echo "17) Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever
uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o
aluno é aprovado). Escrever também a média calculada.<br><br><br><br>";

$aluno2 = "Vitor";

$nota4 = 8.5;
$nota5 = 5.6;

$mediaFinal2 = ($nota1+$nota2)/2;

echo "Olá {$aluno2} a sua média final é de {$mediaFinal2}, isso significa ";



if ($mediaFinal2>=6.0) {
    echo "que você passou!";
}

else {
    echo "que você não passou...";
}

echo "<hr>";

echo "<h2> Exercício 18 </h2>";

echo "18) Ler o ano atual e o ano de nascimento de uma pessoa. Escrever uma mensagem que diga se ela
poderá ou não votar este ano (não é necessário considerar o mês em que a pessoa nasceu).<br><br><br><br>";

$nascimento = 1998;
$anoAtual = 2021;
$idade = ($anoAtual-$nascimento);

echo "Você tem {$idade} anos de idade, significa ";

if ($idade>=16) {
    echo "que você pode votar este ano";
}

else {
    echo "que você não pode votar este ano";
}

echo "<hr>";

echo "<h2> Exercício 19 </h2>";

echo "19) Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles.<br><br><br><br>";

$valorA = 658;
$valorB = 738;

echo "O valor A é de {$valorA} e o valor B é de {$valorB},";

if ($valorB>$valorA) {
    echo " o valor {$valorB} é o maior";
}

else {
    echo " o valor {$valorA} é o maior";
}

echo "<hr>";

echo "<h2> Exercício 20 </h2>";

echo "20) Ler dois valores (considere que não serão lidos valores iguais) e escrevê-los em ordem crescente.<br><br><br><br>";


$valorC = 20;
$valorD = 30;

if ($valorC<$valorD) {
    echo "O {$valorC} vem antes do {$valorD}";
}

else {
    echo "O {$valorD} vem antes do {$valorC}";
}

echo "<hr>";

echo "<h2> Exercício 21 </h2>";

echo "21) Ler a hora de início e a hora de fim de um jogo de Xadrez (considere apenas horas inteiras, sem os
minutos) e calcule a duração do jogo em horas, sabendo-se que o tempo máximo de duração do jogo é
de 24 horas e que o jogo pode iniciar em um dia e terminar no dia seguinte.<br><br><br><br>";

$inicio = 18;
$final = 10;
$max = 24;
$duracao = ($max-($inicio-$final));

echo "O jogo começou às {$inicio} dessa quarta-feira e terminou às {$final} dessa quinta-feira, no total foram {$duracao} horas de duração";

echo "<hr>";

echo "<h2> Exercício 22 </h2>";

echo "22) A jornada de trabalho semanal de um funcionário é de 40 horas. O funcionário que trabalhar mais
de 40 horas receberá hora extra, cujo cálculo é o valor da hora regular com um acréscimo de 50%.
Escreva um algoritmo que leia o número de horas trabalhadas em um mês, o salário por hora e escreva
o salário total do funcionário, que deverá ser acrescido das horas extras, caso tenham sido trabalhadas
(considere que o mês possua 4 semanas exatas).<br><br><br><br>";

$horaMensal = (40*4); // 160 horas
$sal = 1500;
$salPorHora = ($sal/160);
$salExtra = ($sal*0.5);
$salTotal = ($sal+$salExtra);

echo "O total de horas mensais são {$horaMensal} horas,
      o salário por hora é de {$salPorHora} reais,
      já o salário total é de ";

      if ($salTotal>40) {
          echo "{$salTotal} reais caso o funcionário tenha trabalhado por mais de 40 horas";
      }
      
      else {
          echo "{$salTotal} reais caso o funcionário tenha trabalhado por 40 horas ou menos";
      }

echo "<hr>";

echo "<h2> Exercício 24 </h2>";

echo "24) Ler o salário fixo e o valor das vendas efetuadas pelo vendedor de uma empresa. Sabendo-se que
ele recebe uma comissão de 3% sobre o total das vendas até R$ 1.500,00 mais 5% sobre o que
ultrapassar este valor, calcular e escrever o seu salário total.<br><br><br><br>";

$comissao = (1500*0.03);
$extra = (1500*0.08);
$salFixo = (1500+$comissao);
$salTotal = (1500+$extra);

echo "O salário fixo do vendedor é de {$salFixo} reais,<br>
      com o acréscimo de 5%, seu salário é de {$salTotal} reais.";

echo "<hr>";

echo "<h2> Exercício 26 </h2>";

echo "26) Faça um algoritmo para ler: quantidade atual em estoque, quantidade máxima em estoque e
quantidade mínima em estoque de um produto. Calcular e escrever a quantidade média ((quantidade
média = quantidade máxima + quantidade mínima)/2). Se a quantidade em estoque for maior ou igual
a quantidade média escrever a mensagem 'Não efetuar compra', senão escrever a mensagem 'Efetuar
compra'.<br><br><br><br>";

$qntAtual = 659;
$qntMin = 356;
$qntMax = 2500;
$qntMedia = ($qntMax+$qntMin)/2;

echo "A quantidade média do está em {$qntMedia}";

echo "<br>";

if ($qntAtual>=$qntMedia) {
    echo "Não efetuar compra";
}

else {
    echo "Efetuar compra";
}

echo "<h2> Exercícios 48 e 49 </h2>";

echo "48) Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno, calcule e imprima a
média (simples) desse aluno. Só devem ser aceitos valores válidos durante a leitura (0 a 10) para cada
nota.<br><br>
49) Acrescente uma mensagem 'NOVO CÁLCULO (S/N)?' ao final do exercício [48]. Se for
respondido 'S' deve retornar e executar um novo cálculo, caso contrário deverá encerrar o algoritmo.<br><br><br><br>";

$resp = "S";

while($resp =="S"){

    $nota1 = 10;
    $nota2 = 5;
    $media = ($nota1 + $nota2)/2;

    echo "{$media} - ";
    //deseja continuar

    $resp = "n";
}

