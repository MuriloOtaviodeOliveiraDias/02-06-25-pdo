<?php
//estrutura do PHP
/**
 * Comentário em bloco
 */
// Ctrl + ;
echo"Olá, Mundo! <br> \n";  
//tipos de dados
//String tioSAM

/** Para declarar uma variável em PHP
 * devemos utilixar o sinal de $
 */

$nome = 'SLA'; //String
$idade = 18; // inteiro
$altura = 1.92; //double
$peso = 130; //double
$is_Vacinada = true; //Booleano

echo"Nome: $nome <br>\n
echo Idade: $idade<br>\n
echo Altura: $altura<br>\n
echo Peso: $peso<br>\n
echo Vacinada?: $is_Vacinada <br>\n";

//Condicionais
if($idade >= 18){
echo"$nome, é maior de idade e possui $idade anos";
}else{
    echo "$nome, é menor de idade e possui $idade anos";
}

echo "<br>\nLAÇOS DE REPETIÇÃO<br>\n";
function verificarNumeroPares(){
for($i = 1; $i <= 100; $i++){
if($i %2 == 0){
    echo "Números Pares";
     echo "$i <br>\n";
        }
    }
}
//chamando a função
verificarNumeroPares();
?>