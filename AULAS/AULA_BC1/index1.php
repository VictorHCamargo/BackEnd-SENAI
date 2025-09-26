<?php
// comunicação banco de dados
$mysql = mysqli_connect('localhost','root','senaisp','formativa');

// Segurança em buscar valores no banco
$columns = array('titulo','ano','preco');

$column = isset($_GET['column']) && in_array($_GET['column'],$columns) ? $_GET['column'] : $columns[0];
// Trazer dados em ordem e decrescente
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';


//verificar dados no banco
if ($result = $mysql->query('SELECT * FROM livros ORDER BY ' .  $column . ' ' . $sort_order)) {
    // várias para a tabela
    $up_or_down = str_replace(array('ASC','DESC'), array('up','down'),$sort_order);
    $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
    $add_class = 'class="highlight"';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Banco de Dados - Códigos e Letras </title>
        <meta charset="UTF-8">
        <style>
			html {
				font-family: Tahoma, Geneva, sans-serif;
				padding: 10px;
			}
			table {
				border-collapse: collapse;
				width: 500px;
			}
			th {
				background-color: #54585d;
				border: 1px solid #54585d;
			}
			th:hover {
				background-color: #64686e;
			}
			th a {
				display: block;
				text-decoration:none;
				padding: 10px;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
			}
			th a i {
				margin-left: 5px;
				color: rgba(255,255,255,0.4);
			}
			td {
				padding: 10px;
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #ffffff;
			}
			tr .highlight {
				background-color: #f9fafb;
			}
            </style>
    </head>
    <body>
        <table>
            <tr>
					<th><a href="index1.php?column=titulo&order=<?php echo $asc_or_desc; ?>">Titulo<i class="fas fa-sort<?php echo $column == 'titulo' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th><a href="index1.php?column=ano&order=<?php echo $asc_or_desc; ?>">Ano<i class="fas fa-sort<?php echo $column == 'ano' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					<th><a href="index1.php?column=preco&order=<?php echo $asc_or_desc; ?>">Preço <i class="fas fa-sort<?php echo $column == 'preco' ? '-' . $up_or_down : ''; ?>"></i></a></th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td <?php echo $column == 'titulo' ? $add_class : ''; ?>> <?php echo $row ['titulo']; ?></td>
                    <td<?php echo $column == 'ano' ? $add_class : ''; ?>> <?php echo $row ['ano']; ?></td>
                    <td<?php echo $column == 'preco' ? $add_class : ''; ?>> <?php echo $row ['preco']; ?></td>
                </tr>
                <?php endwhile; ?>
        </table>
    </body>
</html>
<?php 
$result->free();
}
?>