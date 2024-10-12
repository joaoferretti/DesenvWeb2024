<?php
    $iValorVista = 8654.00;
    $iQtdParcelas = [24, 36, 48, 60];
    $iTaxaInicial = 1.5 / 100;

    foreach ($iQtdParcelas as $index => $n) {
        $iTaxa = $iTaxaInicial + ($index * 0.005);
        $iMontante = $iValorVista * (1 + $iTaxa * $n);
        $iParcela = $iMontante / $n;
        echo "<p>Parcelas em $n vezes: R$ " . number_format($iParcela, 2, ',', '.') . "</p>";
    }
?>