<?php
namespace AULAS\AULA_16;
require_once __DIR__ . "\\..\\controller\\bebidaController.php";
$bebidas = $controller->ler();
foreach($bebidas as $b => $bebida) {
    echo "<tr>
        <td>{$bebida->getNome()}</td>
        <td>{$bebida->getCategoria()}</td>
        <td>{$bebida->getVolume()}</td>
        <td>{$bebida->getValor()}</td>
        <td>{$bebida->getQtde()}</td>
        <td><a href='editar.php?nome={$bebida->getNome()}&categoria={$bebida->getCategoria()}&volume={$bebida->getVolume()}&valor={$bebida->getValor()}&qtde={$bebida->getQtde()}' type='button'>Editar</a>
        <form action='./index.php' method='GET'>
        <input type='hidden' name='nome' value='{$bebida->getNome()}'> 
        <input type='hidden' name='acao' value='deletar'> 
        <button type='submit'>Deletar</button></form></td>
    </tr>";
}
?>