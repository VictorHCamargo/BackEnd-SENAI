<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $conn = new mysqli("localhost","root","senaisp","test");

    if($conn->connect_error){
        die("Erro de conexão:  $conn->connect_error");
    }
    $sql = "INSERT INTO test_post (nome,email) VALUES ('$nome','$email')";
    if ($conn->query($sql)=== TRUE) {
        echo "Dads salvos com sucesso!";
    } else {
        echo "Erro:  $conn->error";
    }
    header("location: index.html");
    $conn->close();
    exit;
?>