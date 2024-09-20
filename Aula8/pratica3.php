<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $iSalario1 = 1000;
    $iSalario2 = 2000;
    $iSalario2 = $iSalario1;
    $iSalario2 += 1;
    $iSalario1 += $iSalario1 * 0.10;
    echo "Valor Salário 1: $iSalario1 e Valor Salário: $iSalario2<br>";

    if($iSalario2 > $iSalario1) {
        echo "O Valor do salário da variável 2 é maior que o da variável 1";
    } else if($iSalario1 > $iSalario2) {
        echo "O Valor do salário da variável 2 é maior que o da variável 1";
    } else {
        echo "O Valor do salário da variável 2 é igual ao da variável 1";
    }

    $dados = ['array', 'yee', 'aaaa'];
    foreach($dados as $a) {
        echo "$a<br>";
    }
    ?>
</body>
</html>