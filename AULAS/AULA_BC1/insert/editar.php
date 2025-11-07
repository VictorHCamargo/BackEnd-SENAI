<?php
$conn = new mysqli("localhost","root","senaisp","test");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM test_post WHERE id = $id");
$row = $result->fetch_assoc();
?>
<style>
/* Container do Formulário */
form {
    max-width: 400px; /* Limita a largura do formulário */
    margin: 50px auto; /* Centraliza o formulário na página */
    padding: 30px;
    background-color: #fff; /* Fundo branco */
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Sombra suave */
    display: flex; /* Usa flexbox para organizar os elementos */
    flex-direction: column;
    gap: 15px; /* Espaço entre os elementos */
}

/* Rótulos (Labels) */
form label {
    font-weight: 600; /* Deixa o texto do rótulo mais forte */
    color: #555;
    margin-bottom: 5px;
    display: block; /* Garante que o rótulo ocupe sua própria linha */
}

/* Campos de Input (Nome e Email) */
input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px 15px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Garante que padding e border não aumentem a largura total */
    font-size: 16px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Efeito de Foco nos Campos */
input[type="text"]:focus,
input[type="email"]:focus {
    border-color: #007bff; /* Borda azul ao focar */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3); /* Sombra suave azul */
    outline: none; /* Remove o contorno padrão do navegador */
}

/* Botão de Envio (Atualizar) */
input[type="submit"] {
    background-color: #28a745; /* Cor verde de sucesso */
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

/* Efeito Hover no Botão */
input[type="submit"]:hover {
    background-color: #218838; /* Verde mais escuro ao passar o mouse */
}
</style>
<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    Nome: <input type="text" name="nome" value="<?php echo $row['nome'];?>">
    <br>
    Email: <input type="email" name="email" value="<?php echo $row['email'];?>">
    <br>
    <input type="submit" value="Atualizar">
</form>