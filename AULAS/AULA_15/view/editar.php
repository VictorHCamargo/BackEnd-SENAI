<?php
    namespace AULAS\AULA_15;
    include "index.php";
    require_once __DIR__ . "\\..\\controller\\bebidaController.php";
    $nome = $_GET['nome'];
    $bebidaAntiga;
    foreach($bebidas as $b => $bebida) {
        if($bebida->getNome()==$nome) {
            $bebidaAntiga = $bebida;
        }
    }
    echo "<script>
    window.onload = function() {
        document.getElementsByName('nome')[0].value = '$nome';
        document.getElementsByName('nome')[0].readOnly = true;
        document.getElementsByName('categoria')[0].value = '{$bebidaAntiga->getCategoria()}';
        document.getElementsByName('volume')[0].value = '{$bebidaAntiga->getVolume()}';
        document.getElementsByName('valor')[0].value = '{$bebidaAntiga->getValor()}';
        document.getElementsByName('qtde')[0].value = '{$bebidaAntiga->getQtde()}';
        botao_salvar = document.getElementById('button');
        botao_salvar.innerHTML = 'Salvar';
        botao_salvar.onclick = function() {
            window.location.href = 'index.php';
        }
        botao_cancelar = document.createElement('button');
        botao_cancelar.innerHTML = 'Cancelar';
        botao_cancelar.onclick = function() {
            window.location.href = 'index.php';
        }
        pai = document.getElementById('button').parentNode
        pai.appendChild(botao_cancelar);
    }
    </script>";
    
?>