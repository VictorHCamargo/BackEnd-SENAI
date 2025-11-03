<?php
namespace AULAS\AULA_15;


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
        $bebida = new bebida($nome,$categoria,$volume,$valor,$qtde);
        $this->dao->criarBebidas($bebida);
    }
    //Atualiza bebida existente
    public function atualizar($nome,$valor,$qtde) {
        $this->dao->atualizarBebidas($nome,$valor,$qtde);
    }
    public function deletar($nome) {
        $this->dao->excluirBebida($nome);
    }
}



?>