<?php
namespace AULAS\AULA_17;
require_once __DIR__. '\\..\\Controller\\LivroController.php';
$controller = new livroController();

$generos = [
    "Romance",
    "Ficção",
    "Fantasia",
    "Terror",
    "Aventura",
    "Biografia",
    "História",
    "Poesia",
    "Comédia",
    "Autoajuda",
    "Juvenil"
];

// Variável para feedback de sucesso
$mensagem_sucesso = '';

// 2. Processamento das Ações POST (Criar, Deletar, Atualizar)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';
    
    if ($acao === 'criar') {
        try {
            $controller->criar(
                $_POST['titulo'],
                $_POST['autor'],
                $_POST['ano'],
                $_POST['genero'],
                $_POST['quantidade']
            );
            $mensagem_sucesso = 'Livro cadastrado com sucesso!';
        } catch (\Exception $e) {
            $mensagem_sucesso = 'Erro ao cadastrar livro. Verifique se o título já existe.';
        }
    } elseif ($acao === 'deletar') {
        $controller->deletar($_POST['titulo']);
        $mensagem_sucesso = 'Livro excluído com sucesso!';
    } elseif ($acao === 'atualizar') { 
        try {
            $controller->atualizar(
                $_POST['titulo_antigo'],
                $_POST['titulo'],
                $_POST['autor'],
                $_POST['ano'],
                $_POST['genero'],
                $_POST['quantidade']
            );
            $mensagem_sucesso = 'Livro atualizado com sucesso!';
        } catch (\Exception $e) {
            $mensagem_sucesso = 'Erro ao atualizar livro.';
        }
        // Redireciona para limpar o estado de edição
        header('Location: index.php?msg=' . urlencode($mensagem_sucesso));
        exit;
    }
}

// Captura mensagem de sucesso da URL (após redirecionamento)
if (isset($_GET['msg'])) {
    $mensagem_sucesso = $_GET['msg'];
}

// 3. Leitura dos Dados e Lógica de Carregamento para Edição (GET)
$livros = $controller->ler();
$livro_editando_titulo = $_GET['atualizar'] ?? null; 
$livro_selecionado = null;

if ($livro_editando_titulo && !empty($livros)) {
    foreach ($livros as $livro) {
        if ($livro->getTitulo() === $livro_editando_titulo) {
            $livro_selecionado = $livro;
            break;
        }
    }
}

// Variáveis para preencher o formulário
$form_acao = $livro_selecionado ? 'atualizar' : 'criar';
$form_titulo = $livro_selecionado ? 'Editar Livro: ' . htmlspecialchars($livro_selecionado->getTitulo()) : 'Cadastrar Novo Livro';
$titulo_valor = $livro_selecionado ? $livro_selecionado->getTitulo() : '';
$autor_valor = $livro_selecionado ? $livro_selecionado->getAutor() : '';
$ano_valor = $livro_selecionado ? $livro_selecionado->getAno() : '';
$genero_valor = $livro_selecionado ? $livro_selecionado->getGenero() : '';
$quantidade_valor = $livro_selecionado ? $livro_selecionado->getQuantidade() : '';
$titulo_antigo_input = $livro_selecionado ? '<input type="hidden" name="titulo_antigo" value="' . htmlspecialchars($livro_selecionado->getTitulo()) . '">' : '';
$botao_texto = $livro_selecionado ? 'Salvar Edição' : 'Cadastrar';
$botao_cor = $livro_selecionado ? '#924848ff' : '#a24b4bff';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Livros - Biblioteca Escolar</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            background: linear-gradient(135deg, #ea6666ff 0%, #a24b4bff 100%);
            min-height: 100vh;
        }
        
        .header {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }
        
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px;
        }
        
        .header p {
            font-size: 1.2em;
            opacity: 0.9;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            gap: 20px;
            flex-direction: column;
        }
        
        .mensagem-sucesso {
            background-color: #702727ff;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            animation: slideDown 0.5s ease;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-area {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .form-area.editing {
            border: 3px solid #962e2eff;
            box-shadow: 0 8px 32px rgba(28, 76, 150, 0.3);
        }
        
        .form-area h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
        }
        
        input[type="text"], 
        input[type="number"], 
        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ff4040ff;
            border-radius: 6px;
            font-size: 1em;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus, 
        input[type="number"]:focus, 
        select:focus {
            outline: none;
            border-color: #a33e3eff;
        }
        
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        button[type="submit"], .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1em;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        button[type="submit"] {
            background-color: var(--btn-color, #764ba2);
            color: white;
        }
        
        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        
        .btn-cancelar {
            background-color: #a72d18ff;
            color: white;
        }
        
        .btn-cancelar:hover {
            background-color: #dd3a3aff;
        }
        
        .list-area {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }
        
        .list-area h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        
        thead {
            background: linear-gradient(135deg, #ea6666ff 0%, #a24b4bff 100%);
            color: white;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
        }
        
        th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9em;
            letter-spacing: 0.5px;
        }
        
        tbody tr {
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.3s;
        }
        
        tbody tr:hover {
            background-color: #db1e1eff;
        }
        
        tbody tr.editing {
            background-color: #6d3217ff !important;
        }
        
        .btn-editar {
            background-color: #94eb61ff;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9em;
            margin-right: 5px;
            display: inline-block;
            transition: background-color 0.3s;
        }
        
        .btn-editar:hover {
            background-color: #649229ff;
        }
        
        .btn-excluir {
            background-color: #6cf71cff;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9em;
            transition: background-color 0.3s;
        }
        
        .btn-excluir:hover {
            background-color: #54f723ff;
        }
        
        .empty-state {
            text-align: center;
            padding: 40px;
            color: #999;
        }
        
        .empty-state p {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8em;
            }
            
            table {
                font-size: 0.9em;
            }
            
            th, td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1> <strong>📖 Catálogo de Livros da Biblioteca Escolar</strong></h1>
        <p>Sistema de Gerenciamento</p>
    </div>
    
    <div class="container">
        
        <?php if ($mensagem_sucesso): ?>
        <div class="mensagem-sucesso">
            <?php echo htmlspecialchars($mensagem_sucesso); ?>
        </div>
        <?php endif; ?>
        
        <div class="form-area <?php echo $livro_selecionado ? 'editing' : ''; ?>">
            <h2><?php echo $form_titulo; ?></h2>
            <form method="POST">
                <input type="hidden" name="acao" value="<?php echo $form_acao; ?>">
                <?php echo $titulo_antigo_input; ?>
                
                <div class="form-group">
                    <label>Título do Livro:</label>
                    <input type="text" name="titulo" placeholder="Digite o título do livro" value="<?php echo htmlspecialchars($titulo_valor); ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Autor:</label>
                    <input type="text" name="autor" placeholder="Digite o nome do autor" value="<?php echo htmlspecialchars($autor_valor); ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Ano de Publicação:</label>
                    <input type="number" name="ano" placeholder="Ex: 2024" min="1000" max="2100" value="<?php echo htmlspecialchars($ano_valor); ?>" required>
                </div>
                
                <div class="form-group">
                    <label>Gênero Literário:</label>
                    <select name="genero" required>
                        <option value="">Selecione o gênero</option>
                        <?php foreach ($generos as $gen): ?>
                            <option value="<?php echo $gen; ?>" <?php echo ($genero_valor === $gen) ? 'selected' : ''; ?>>
                                <?php echo $gen; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Quantidade de Livro:</label>
                    <input type="number" name="quantidade" placeholder="Quantidade disponível" min="0" value="<?php echo htmlspecialchars($quantidade_valor); ?>" required>
                </div>
                
                <div class="button-group">
                    <button type="submit" style="--btn-color: <?php echo $botao_cor; ?>;">
                        <?php echo $botao_texto; ?>
                    </button>
                    
                    <?php if ($livro_selecionado): ?>
                        <a href="index.php" class="btn btn-cancelar">Cancelar Edição</a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <div class="list-area">
            <h2>Livros Cadastrados</h2>
            <?php if (empty($livros)): ?>
                <div class="empty-state">
                    <p>Nenhum livro cadastrado ainda.</p>
                    <p style="font-size: 0.9em;">Comece adicionando o primeiro livro ao catálogo!</p>
                </div>
            <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Ano</th>
                        <th>Gênero</th>
                        <th>Exemplares</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($livros as $livro): ?>
                    <tr class="<?php echo ($livro_selecionado && $livro->getTitulo() === $livro_selecionado->getTitulo()) ? 'editing' : ''; ?>">
                        <td><strong><?php echo htmlspecialchars($livro->getTitulo()); ?></strong></td>
                        <td><?php echo htmlspecialchars($livro->getAutor()); ?></td>
                        <td><?php echo htmlspecialchars($livro->getAno()); ?></td>
                        <td><?php echo htmlspecialchars($livro->getGenero()); ?></td>
                        <td><?php echo htmlspecialchars($livro->getQuantidade()); ?></td>
                        <td>
                            <a href="?atualizar=<?php echo urlencode($livro->getTitulo()); ?>" class="btn-editar"> <strong>Editar</strong></a>
                            
                        <form method="POST" style="display: inline;">
                         <input type="hidden" name="acao" value="deletar">
                         <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($livro->getTitulo()); ?>">
                         <button type="submit" class="btn-excluir">Excluir</button>
                        </form>
        </td>
        </tr>
            <?php endforeach; ?>
    </tbody>
    </table>
            <?php endif; ?>
    </div>
    </div>

</body>
</html>