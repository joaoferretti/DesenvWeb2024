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
    echo "Valor Salário 1: $iSalario1 e Valor Salário: $iSalario2";
    ?>
</body>
</html>