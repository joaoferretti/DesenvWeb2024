<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="valorAvista">Preço a vista</label>
        <input type="number" name="valorAvista" id="valorAvista" required>
        <label for="valorParcela">Valor da parcela</label>
        <input type="number" name="valorParcela" id="valorParcela" required>
        <label for="qtdParcela">Quantidade de parcelas</label>
        <input type="number" name="qtdParcela" id="qtdParcela" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(!$_POST) {
            return;
        }

        $iValorAvista  = $_POST['valorAvista'];
        $iValorParcela = $_POST['valorParcela'];
        $iQtdParcela  = $_POST['qtdParcela'];
        
        $iTotalParcelado = $iValorParcela * $iQtdParcela;

        echo "<p>O valor a ser pago a vista é $iValorAvista.</p>";
        echo "<p>O valor a ser pago a prazo é $iTotalParcelado</p>";
        echo "<p>A diferença entre os dois valores é de ".abs($iTotalParcelado - $iValorAvista)."</p>";
    ?>
</body>
</html>