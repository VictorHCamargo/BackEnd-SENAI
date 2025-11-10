<?php
namespace AULAS\AULA_15;
require_once __DIR__ . "\\..\\controller\\bebidaController.php";
$bebidas = $controller->ler();
foreach($bebidas as $b => $bebida) {
    echo "<tr>
        <td>{$bebida->getNome()}</td>
        <td>{$bebida->getCategoria()}</td>
        <td>{$bebida->getVolume()}</td>
        <td>{$bebida->getValor()}</td>
        <td>{$bebida->getQtde()}</td>
        <td><a href='editar.php?nome={$bebida->getNome()}'>Editar</a>
        <a href='index.php?acao=deletar&nome={$bebida->getNome()}'>Deletar</a></td>
    </tr>";
}
?>