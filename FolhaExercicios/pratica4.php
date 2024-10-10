<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="altura">Altura do quadrado</label>
        <input type="number" name="altura" id="altura" required>
        <label for="largura">Largura do quadrado</label>
        <input type="number" name="largura" id="largura" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(!$_POST) {
            return;
        }

        $iAltura  = $_POST['altura'];
        $iLargura = $_POST['largura'];
        $iArea    = $iAltura * $iLargura;
        
        if($iArea > 10) {
            $sTag = "h1";
        } else {
            $sTag = "h3";
        }
        echo "<$sTag>A área do retângulo de lados $iAltura e $iLargura metros é $iArea metros quadrados.</$sTag>";
    ?>
</body>
</html>