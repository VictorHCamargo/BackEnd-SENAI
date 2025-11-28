<?php
namespace AULAS\AULA_BCsomativa;
require_once __DIR__ . "\\..\\model\\connTable.php";
require_once __DIR__ . "\\..\\model\\valorTables.php";
$nome = $_GET['table'];
$model = new connTable('$nome');
$dados = valorTables::getClientes();

if(!$dados){
    die('Tabela não informada. Ex: cadastro.php?tabela=clientes');
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

        <?php foreach($dados as $col): ?>
            <?php if($col === 'id') continue; ?>
            <div>
                <label><?= ucfirst($col) ?>:</label>
                <input type="text" name="<?= $col ?>">
            </div>
        <?php endforeach; ?>


        <button type="submit">Salvar</button>
    </form>


</body>
</html>
?>