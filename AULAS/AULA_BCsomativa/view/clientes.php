<?php
namespace AULAS\AULA_BCsomativa;
require_once __DIR__ . "\\..\\model\\connTable.php";
$connCliente = new connTable("clientes");

if($_SERVER['REQUEST_METHOD']== 'POST') {
    $cliente = [
        'id_cliente' => null
    ];
    $cliente['id_cliente'] = $_POST['id_cliente'];
    $connCliente->delete($cliente,'id_cliente');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
</head>
<body>
    <h1>Bem vindo á area de Clientes</h1>
    <div class="list-botoes">
        <button onclick="navegarPara('cadastro.php')">Cadastrar</button>
        <button onclick="navegarPara('/../index.php')">Voltar</button>
    </div>
    <div class="information-list">
        <h2>Todos os clientes cadastrados</h2>
        <div class="list">
            <table>
                <thead>
                    <th>id_cliente</th>
                    <th>nome_cliente</th>
                    <th>cep_cliente</th>
                    <th>cpf_cliente</th>
                    <th>contato_cliente</th>
                    <th>ações</th>
                </thead>
                <tbody>
                <?php if(!empty($connCliente->select())): ?>
                <?php foreach ($connCliente->select() as $dados): ?>
                    <tr>
                        <td><?=$dados['id_cliente']?></td>
                        <td><?=$dados['nome_cliente']?></td>
                        <td><?=$dados['cep_cliente']?></td>
                        <td><?=$dados['cpf_cliente']?></td>
                        <td><?=$dados['contato_cliente']?></td>
                        <td>
                            <form method="POST" action="#">
                                <input type="hidden" name="id_cliente" value="<?=$dados['id_cliente']?>">
                                <button type="submit">Deletar</button>
                            </form>
                            <button onclick="navegarPara('cadastro.php?id=<?=$dados['id_cliente']?>')">Editar</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Não nenhum cliente cadastrado</td>
                    </tr>
                <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../script/navegar.js"></script>
</body>
</html>