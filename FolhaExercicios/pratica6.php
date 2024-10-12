<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Preço por Kg</legend>
            <label for="valorMaca">Maçâ</label>
            <input type="number" name="valorMaca" id="valorMaca" required>
            <br>
            <label for="valorMelancia">Melancia</label>
            <input type="number" name="valorMelancia" id="valorMelancia" required>
            <br>
            <label for="valorLaranja">Laranja</label>
            <input type="number" name="valorLaranja" id="valorLaranja" required>
            <br>
            <label for="valorRepolho">Repolho</label>
            <input type="number" name="valorRepolho" id="valorRepolho" required>
            <br>
            <label for="valorCenoura">Cenoura</label>
            <input type="number" name="valorCenoura" id="valorCenoura" required>
            <br>
            <label for="valorBatatinha">Batatinha</label>
            <input type="number" name="valorBatatinha" id="valorBatatinha" required>
        </fieldset>
        <fieldset>
            <legend>Kg a comprar</legend>
            <label for="kgMaca">Maçâ</label>
            <input type="number" name="kgMaca" id="kgMaca" required>
            <br>
            <label for="kgMelancia">Melancia</label>
            <input type="number" name="kgMelancia" id="kgMelancia" required>
            <br>
            <label for="kgLaranja">Laranja</label>
            <input type="number" name="kgLaranja" id="kgLaranja" required>
            <br>
            <label for="kgRepolho">Repolho</label>
            <input type="number" name="kgRepolho" id="kgRepolho" required>
            <br>
            <label for="kgCenoura">Cenoura</label>
            <input type="number" name="kgCenoura" id="kgCenoura" required>
            <br>
            <label for="kgBatatinha">Batatinha</label>
            <input type="number" name="kgBatatinha" id="kgBatatinha" required>
            <br>
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(!$_POST) {
            return;
        }
        
        $iValorMaca      = $_POST['valorMaca'];
        $iValorMelancia  = $_POST['valorMelancia'];
        $iValorLaranja   = $_POST['valorLaranja'];
        $iValorRepolho   = $_POST['valorRepolho'];
        $iValorCenoura   = $_POST['valorCenoura'];
        $iValorBatatinha = $_POST['valorBatatinha'];
        
        $iKgMaca      = $_POST['kgMaca'];
        $iKgMelancia  = $_POST['kgMelancia'];
        $iKgLaranja   = $_POST['kgLaranja'];
        $iKgRepolho   = $_POST['kgRepolho'];
        $iKgCenoura   = $_POST['kgCenoura'];
        $iKgBatatinha = $_POST['kgBatatinha'];

        $iTotal = ($iKgMaca * $iValorMaca) + ($iKgMelancia * $iValorMelancia) + ($iKgLaranja * $iValorLaranja) + ($iKgRepolho * $iValorRepolho) + ($iKgCenoura * $iValorCenoura) + ($iKgBatatinha * $iValorBatatinha);

        if($iTotal > 50) {
            echo "<p style=\"color:red\">Valor ficou acima do orçamento: R$$iTotal</p>";
        } else if($iTotal < 50) {
            echo "<p style=\"color:blue\">Valor ficou abaixo do orçamento R$$iTotal, ainda é possível gastar: R$".(50 - $iTotal)."</p>";
        } else {
            echo "<p style=\"color:green\">Valor ficou exatamente no orçamento R$$iTotal</p>";
        }
    ?>
</body>
</html>