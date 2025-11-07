<?php
$conn = new mysqli("localhost","root","senaisp","test");
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE test_post SET nome='$nome', email='$email' WHERE id=$id";

if($conn->query($sql) === true) {
    echo "Dados atualizados com sucesso!";
    echo "<br><a href='index.php' type='button'>Voltar</a>";
} else {
    echo "Erro:". $conn->error;
}

$conn->close();
?>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    a[type='button'] {
        border-radius: 8px;
        border: 4px solid #2d1;
        text-decoration: none;
        color: #000;
        padding: 10px;
    }
    a[type='button']:hover {
        background-color: #2d1;
        color: #fff;
    }
</style>