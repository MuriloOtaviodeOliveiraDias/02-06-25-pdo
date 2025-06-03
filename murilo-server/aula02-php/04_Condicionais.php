<?php
 
//exemplo 1
$idade = 18;
$isCNH = false;
if( $isCNH && $idade >= 18){
    echo "Apto a Dirigir  <br><hr>";
}else if (!$isCNH && $idade >= 18){
    echo "Apto a tirar a CNH, mas não pode dirigir <br><hr><br>";
}else{
    echo "Não pode digirir";
}
echo"<br><br><br><hr>";
echo "<h2>EXEMPLO 2</h2>";

$possuiAcesso = false;
if(!$possuiAcesso){
echo  "acesso negado<br>";
}else{
    echo "Acesso autorizado <br>";
}
echo"<br><br><br><hr>";
echo "<h2>EXEMPLO 3</h2>";
$mediaAluno = 9;
if($mediaAluno >= 9){
    echo "Nota: MB";
}else if($mediaAluno >= 7 && $mediaAluno <= 8){
    echo "Nota: B";
}else if($mediaAluno >= 5 && $mediaAluno <= 7){
    echo "Nota R";
}else if($mediaAluno >= 0 && $mediaAluno <= 5){
    echo "Nota I";
} else{
    echo "Média Inválida";
}

echo"<br><br><br><hr>";
echo "<h2>EXEMPLO 4</h2>";
?>