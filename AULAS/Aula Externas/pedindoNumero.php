<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Input</title>
</head>
<body>
    <form action="pedindoNumero.php" method="get">
        <label for="num">Adicione um número inteiro:</label>
        <input type="number" id="num" name="num">
        <input type="submit">
    </form>
    <?php
        $numero = $_GET["num"];
        echo "Numero: $numero";
    ?>
</body>
</html>
