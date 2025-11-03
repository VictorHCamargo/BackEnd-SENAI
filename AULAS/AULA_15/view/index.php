<?php
// Confirmações de formulario
require_once "../controller/bebidaController.php";
if($_SERVER['REQUEST_METHOD']==='POST') {
    $acao = $_POST['acao'] ?? '';
    if($acao === 'criar') {
        $controller->salvar(
            $_POST['nome'],
            $_POST['categoria'],
            $_POST['volume'],
            $_POST['valor'],
            $_POST['qtde']
        );
    } elseif($acao === 'deletar') {
        $controller->deletar($_POST['id']);;
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
        <input type="hidden">
        <input type="text" name="nome" id="nome" required placeholder="Nome da bebida">
        <select name="categora" id="categoria">
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
        <input type="number" name="volume" id="volume" placeholder="Volume da bebida:" required>
        <input type="number" name="valor" id="valor" step="0.01" placeholder="Valor em Reais (R$):" required>
        <input type="number" name="qtde" id="qtde" placeholder="Quantidade em estoque" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

