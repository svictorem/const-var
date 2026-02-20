<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Const_Var</title>
</head>
<body>
    <?php
    /*int = numero,
    string = caractere,
    boleano = true/ false,
    float = 0.0*/

    $aluno = "Sinastra Marcolone";
    $idade = "100";
    /*const inicial com a palavra "define"
    entre aspas duplas
    1º constante
    2º valor*/
    define("instituicao", "centro de educação tecnológica do amazonas");

    echo "Olá aluno, $aluno $idade bem vindo ao " . instituicao

    ?>
</body>
</html>