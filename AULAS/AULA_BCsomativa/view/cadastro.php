<?php
namespace AULAS\AULA_BCsomativa;
require_once __DIR__ . "\\..\\model\\connTable.php";
require_once __DIR__ . "\\..\\model\\valorTables.php";
$connCliente = new connTable('clientes');
$tables = new valorTables();
$cliente = $tables->getClientes();
$clienteEdita = '';
if($_SERVER['REQUEST_METHOD']== 'POST'){
    if($_POST['id_cliente']){
        $cliente['nome_cliente'] = $_POST['nome_cliente'];
        $cliente['cep_cliente'] = $_POST['cep_cliente'];
        $cliente['cpf_cliente'] = $_POST['cpf_cliente'];
        $cliente['contato_cliente'] = $_POST['contato_cliente'];
        $connCliente->update("id_cliente",$_POST['id_cliente'],$cliente);
    } else {
        $cliente['nome_cliente'] = $_POST['nome_cliente'];
        $cliente['cep_cliente'] = $_POST['cep_cliente'];
        $cliente['cpf_cliente'] = $_POST['cpf_cliente'];
        $cliente['contato_cliente'] = $_POST['contato_cliente'];
        $connCliente->insert($cliente);
    }
    
}
if(!empty($_GET['id'])){
    foreach($connCliente->select() as $dados) {
        if($dados['id_cliente'] == $_GET['id']){
            $clienteEdita = $dados;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>


    <form method="POST">

        <label for="nome_cliente">Nome do Cliente</label>
        <input type="text" id="nome_cliente" name="nome_cliente" <?php if($clienteEdita !== '') echo "value='{$clienteEdita['nome_cliente']}'"?> required>

        <label for="cpf_cliente">CPF</label>
        <input type="text" id="cpf_cliente" name="cpf_cliente" <?php if($clienteEdita !== '') echo "value='{$clienteEdita['cpf_cliente']}'"?> required>

        <label for="contato_cliente">Contato (Telefone)</label>
        <input type="text" id="contato_cliente" name="contato_cliente" <?php if($clienteEdita !== '') echo "value='{$clienteEdita['contato_cliente']}'"?> required>

        <label for="cep_cliente">CEP</label>
        <input type="text" id="cep_cliente" name="cep_cliente" <?php if($clienteEdita !== '') echo "value='{$clienteEdita['cep_cliente']}'"?> required>
        
        <?php if($clienteEdita !== '') echo "<input type='hidden' name='id_cliente' value='{$clienteEdita['id_cliente']}'>" ?>
        <button type="submit">Salvar</button>
    </form>
    <button onclick="navegarPara('clientes.php')">Voltar</button>
    <script src="../script/navegar.js"></script>
</body>
</html>
