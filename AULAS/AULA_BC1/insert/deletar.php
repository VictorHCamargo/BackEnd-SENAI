<?php

$conn = new mysqli("localhost","root","senaisp","test");
if($conn->connect_error){
    die("Erro de conexão: ". $conn->connect_error);
}
$id = $_GET['id'];
//Preparar a declaração 
$stmt = $conn->prepare("DELETE FROM test_post WHERE id = ?");
$stmt->bind_param("i",$id);

//Executar e verificar
if ($stmt->execute()) {
    echo "Ususário deletado com sucesso!";
}  else {
    echo "Erro ao deletar: ". $stmt->error;
}
echo "<br><a href='index.php' type='button'>Voltar</a>";

$stmt->close();
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