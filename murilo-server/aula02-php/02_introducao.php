<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indrodução - PHP</title>
</head>
<body>

    <?php
//código php precisa estar dentro da tag
    $nome = "Murilo";
    $idade = 18;
    $altura = 1.92;
    $isAluno = true;
    $texto = "isso";
    $Texto ="Disso";

    //escreve na tela
    echo $nome,"<br>",
     $idade,"<br>", $altura,'<br>';
    echo $texto, ' é diferente ', $Texto,'<br>';
    
    //Imprimir para o usuário: "Meu nome é XXXXXX"
    echo "<br> Meu nome é  $nome";

    echo "<br> pulando linha <br> linha quebrada";

    //Quebrando linhas

    echo "<br><br><br><hr>";

    echo "<br> nome: $nome <br> idade: $idade <br> altura: $altura";

    /*
    */


    ?>

</body>
</html>