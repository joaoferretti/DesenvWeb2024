<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>Disciplina</td>
        <td>Faltas</td>
        <td>Média</td>
    </tr>

<?php
    $aDisciplinas = [
        "Matemática"      => ['Faltas' => 5 , 'Média' => 8.5],
        "Português"       => ['Faltas' => 2 , 'Média' => 9],
        "Geografia"       => ['Faltas' => 10, 'Média' => 6],
        "Educação Física" => ['Faltas' => 2 , 'Média' => 8],
    ];

    foreach($aDisciplinas as $sDisciplina => $aDados) {
        echo "<tr>
                  <td>$sDisciplina</td>";
        foreach($aDados as $iDado) {
            echo "<td>$iDado</td>";
        }
        echo "</tr>";
    }
?>
</table>
</body>
</html>