<?php
namespace AULAS\AULA_BCsomativa;
require_once __DIR__ . "\\..\\model\\connTable.php";
$result = new connTable("CLIENTES");
$dados = $result->select();
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
        <button onclick="navegarPara('cadastro.php?table=clientes')">Cadastrar</button>
        <button onclick="navegarPara('/../index.php')">Voltar</button>
    </div>
    <div class="information-list">
        <h2>Todos os clientes cadastrados</h2>
        <div class="list">
            <table>
                <thead>
                    <th>cep_cliente</th>
                    <th>id_cliente</th>
                    <th>nome_cliente</th>
                    <th>cpf_cliente</th>
                    <th>contato_cliente</th>
                    <th>ações</th>
                </thead>
                <tbody>
                <?php foreach ($resultado as $linha): ?>
                    <tr>
                        <?php foreach ($linha as $valor): ?>
                            <td><?= htmlspecialchars($valor) ?></td>
                        <?php endforeach; ?>
                        <td>
                            <form method="DELETE">
                                <input type="text" name="id_cliente" value="<?= $linha['id_cliente'] ?>">
                                <button type="submit">Deletar</button>
                            </form>
                            <button onclick="navegarPara('editar.php?table=clientes&table=clientes&id=<?= $linha['id_cliente'] ?>&tableDados=<?= $dados ?>')">Editar</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../script/navegar.js"></script>
</body>
</html>