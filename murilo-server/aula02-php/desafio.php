<?php 

$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($media >= 9 && 10){
    echo"$nome, sua media foi essa: $media + (MB), Muito bem, Parabéns";
}else if($media >= 7 && 8){
    echo "$nome, sua media final foi essa: $media + (B), Você foi bem";
}else if($media >= 6 && 5){
    echo "$nome, sua media final foi essa: $media + (R), Desempenho Regular, podemos melhorar";
} else if($media >= 0 && 5){
    echo "$nome, sua media final foi essa: $media + (I), foi Insatisfatório";
}else{
    echo "$nome, sua média foi essa $media por conta de sua Nota";
}
?>