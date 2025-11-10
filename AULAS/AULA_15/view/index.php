<?php
    namespace AULAS\AULA_15;
    // Confirmações de formulario
    require_once __DIR__ . "\\..\\controller\\bebidaController.php";

    $controller = new bebidaController();
    if($_SERVER['REQUEST_METHOD']==='POST') {
        $acaoViaURL = $_GET['acao'];
        $acao = $_POST['acao'] ?? "";
        if($acao === 'criar') {
            $controller->criar(
                $_POST['nome'],
                $_POST['categoria'],
                $_POST['volume'],
                $_POST['valor'],
                $_POST['qtde']
            );
        } elseif($acaoViaURL === 'deletar') {
            $controller->deletar($_GET['nome']);;
        }
        
    }
?>
<!-- Formulário em html  -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de bebidas</title>
</head>
<body>
    <h1>Formulário para preenchimento de bebidas:</h1>
    <form method="POST">
        <input type="hidden" name="acao" value="criar">
        <input type="text" name="nome"  required placeholder="Nome da bebida">
        <select name="categoria">
            <option value="">Selecione a categoria</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Agua">Àgua</option>
            <option value="Suco">Suco</option>
            <option value="Energetico">Energético</option>
            <!-- Categoria -->
        </select>
        <input type="number" name="volume"  placeholder="Volume da bebida:" required>
        <input type="number" name="valor"  step="0.01" placeholder="Valor em Reais (R$):" required>
        <input type="number" name="qtde"  placeholder="Quantidade em estoque" required>
        <button type="submit" id="button">Cadastrar</button>
    </form>
    <h1>Lista de Bebidas</h1>
    <table>
        <thead>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Volume</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php
            include "lista.php";
            ?>
        </tbody>
    </table>
</body>
</html>

