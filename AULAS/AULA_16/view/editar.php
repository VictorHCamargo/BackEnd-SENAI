<?php
    namespace AULAS\AULA_16;
    require_once __DIR__ . "\\..\\controller\\bebidaController.php";
    $controller = new bebidaController();
    $nome = $_GET['nome'];
    $categoria = $_GET['categoria'];
    $volume = $_GET['volume'];
    $valor = $_GET['valor'];
    $qtde = $_GET['qtde'];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome=$_POST['nome'];
        $novoNome= $_POST['novonome'];
        $qtde =$_POST['qtde'];
        $valor = $_POST['valor'];
        $categoria = $_POST['categoria'];
        $volume = $_POST['volume'];
        $controller->atualizar($nome,$novoNome,$valor,$qtde,$volume,$categoria);
        echo "<script>window.location.href = 'index.php'</script>";
    }
?>


<form method="POST">
    <h1>Editar</h1>
    <input type="hidden" name="nome" value="<?php echo $nome;?>" required>
    <input type="text" name="novonome" value="<?php echo $nome;?>" required>
    <select name="categoria" required>
        <option value="">Selecione a Categoria</option>
        <option value="Refrigerante" <?php if($categoria == "Refrigerante") echo 'selected'?> >Refrigerante</option>
        <option value="Cerveja" <?php if($categoria == "Cerveja") echo 'selected'?> >Cerveja</option>
        <option value="Vinho" <?php if($categoria == "Vinho") echo 'selected'?> >Vinho</option>
        <option value="Destilado" <?php if($categoria == "Destilado") echo 'selected'?> >Destilado</option>
        <option value="Agua" <?php if($categoria == "Agua") echo 'selected'?> >Água</option>
        <option value="Energetico" <?php if($categoria == "Energetico") echo 'selected'?> >Energético</option>
    </select>
    <input type="number" name="volume" placeholder="Volume (ex:300ml):" value="<?php echo $volume;?>" required>
    <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$)" value="<?php echo $valor;?>" required>
    <input type="number" name="qtde" placeholder="Quantidade em Estoque:" value="<?php echo $qtde; ?>" required>
    <button type="submit">Atualizar</button>
</form>