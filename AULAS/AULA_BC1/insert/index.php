
<head>
    <meta charset="UTF-8">
    <title>Inserir e Listar Usuários</title>
    <link rel="stylesheet" href="style.css"> 
</head>

<form action="inserir.php" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <label>Email:</label>
    <input type="text" name="email" required>
    <button type="submit">Enviar</button>
</form>
<a href="listar.php">Lista</a>

<?php
include "listar.php";
?>