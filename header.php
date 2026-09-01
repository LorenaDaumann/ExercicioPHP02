<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<br>Bem-vindo ";
    echo "<br>Este é um arquivo para mostraros conhecimentos adquiridos em PHP na aula 1 e 2.";

    $nome = "Lorena";
    define("TURMA", "TIN3");

    echo "<br><br>Arquivo feito por: " . $nome . ". Turma: " . TURMA . "<br><br>";

    $vetor = ["TIN3", 10, 3.14, "prog", "estude!"];

    echo $vetor[0];
    echo "<br>";

    foreach ($vetor as $valor) {
        echo $valor . ",<br>";
    }

    ?>
</body>

</html>