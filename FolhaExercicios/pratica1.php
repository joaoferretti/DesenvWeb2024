<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="numeroum">Número 1</label>
        <input type="number" name="numeroum" id="numeroum" required>
        <label for="numerodois">Número 2</label>
        <input type="number" name="numerodois" id="numerodois" required>
        <label for="numerotres">Número 3</label>
        <input type="number" name="numerotres" id="numerotres" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(!$_POST) {
            return;
        }

        $iNumeroum   = $_POST['numeroum'];
        $iNumerodois = $_POST['numerodois'];
        $iNumerotres = $_POST['numerotres'];
        $iResultado = $iNumeroum + $iNumerodois + $iNumerotres;

        if($iNumeroum > 10) {
            $sCor = 'blue';
        } 
        if($iNumerodois < $iNumerotres) {
            $sCor = 'green';
        } 
        if($iNumerotres < $iNumeroum && $iNumerotres < $iNumerodois) {
            $sCor = 'red';
        }
        echo "<p style=\"color:$sCor\">$iResultado</p>";
    ?>
</body>
</html>