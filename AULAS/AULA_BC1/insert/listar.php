<?php
$conn = new mysqli("localhost","root","senaisp","test");
$result = $conn->query("SELECT * FROM test_post");

echo "<h2>Usuários</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['nome']}</td>
    <td>{$row['email']}</td>
    <td><a href='editar.php?id={$row['id']}'>Editar</a><br>
    <a href='deletar.php?id={$row['id']}'>Deletar</a></td>
    </tr>";
}

echo "</table>";
$conn->close();
?>
<head>
    <meta charset="UTF-8">
    <title>Inserir e Listar Usuários</title>
    <link rel="stylesheet" href="style.css"> 
</head>