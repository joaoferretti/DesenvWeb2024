<?php
    $iValorVista = 8654.00;
    $iParcelas = [24, 36, 48, 60];
    $iTaxaInicial = 2 / 100; 

    foreach($iParcelas as $iIndex => $n) {
        $iTaxa = $iTaxaInicial + ($iIndex * 0.003);
        $iMontante = $iValorVista * pow((1 + $iTaxa), $n);
        $iParcela = $iMontante / $n;
        echo "<p>Parcelas em $n vezes: R$ " . number_format($iParcela, 2, ',', '.') . "</p>";
    }
?>