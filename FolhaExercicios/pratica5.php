<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="base">Base do triângulo</label>
        <input type="number" name="base" id="base" required>
        <label for="altura">Altura do triângulo</label>
        <input type="number" name="altura" id="altura" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(!$_POST) {
            return;
        }
        $iAltura = $_POST['altura'];
        $iBase   = $_POST['base'];
        echo "<p>A área do triângulo retângulo é ".(($iAltura * $iBase) / 2)."</p>";
    ?>
</body>
</html>