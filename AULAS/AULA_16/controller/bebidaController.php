<?php
namespace AULAS\AULA_16;


require_once __DIR__ . "\\..\\model\\bebidaDAO.php";
require_once __DIR__ . "\\..\\model\\bebida.php";

class bebidaController {
    private $dao;

    //Construtor: cria o objeto DAO (responsável por salvar/carregar)

    public function __construct() {
        $this->dao = new BebidaDAO();
    }
    //Lista todas as bebidas
    public function ler() {
        return $this->dao->lerBebidas();
    }
    //Cadastra nova bebida
    public function criar($nome,$categoria,$volume,$valor,$qtde) {
        $bebida = new bebida($nome,$categoria,$volume,$qtde,$valor);
        $this->dao->criarBebidas($bebida);
    }
    //Atualiza bebida existente
    public function atualizar($nome,$novoNome,$valor,$qtde,$volume,$categoria) {
        $this->dao->atualizarBebidas($nome,$novoNome,$valor,$qtde,$volume,$categoria);
    }
    public function deletar($nome) {
        $this->dao->excluirBebida($nome);
    }
}



?>