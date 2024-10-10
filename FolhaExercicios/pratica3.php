<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="lado">Lado do quadrado</label>
        <input type="number" name="lado" id="lado" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(!$_POST) {
            return;
        }
        $iLado = $_POST['lado'];
        echo "<p>A área do quadrado de lado $iLado metros é ".($iLado * $iLado)." metros quadrados</p>";
    ?>
</body>
</html>