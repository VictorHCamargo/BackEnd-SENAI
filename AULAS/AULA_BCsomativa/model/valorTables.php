<?php
namespace AULAS\AULA_BCsomativa;

class valorTables{
    public static function getClientes() {
        return [
            "id_cliente"      => null,
            "nome_cliente"    => null,
            "cpf_cliente"     => null,
            "contato_cliente" => null,
            "cep_cliente"     => null,
            "whereValue"      => null
        ];
    }

    public static function getVeiculos() {
        return [
            "id_veiculo"        => null,
            "marca_veiculo"     => null,
            "modelo_veiculo"    => null,
            "descricao_veiculo" => null,
            "placa_veiculo"     => null,
            "id_cliente"        => null,
            "whereValue"        => null
        ];
    }

    public static function getFuncionarios() {
        return [
            "id_funcionario"     => null,
            "nome_funcionario"   => null,
            "salario_funcionario"=> null,
            "data_entrada"       => null,
            "tipo_funcionario"   => null,
            "cpf_funcionario"    => null,
            "cep_funcionario"    => null,
            "whereValue"         => null
        ];
    }

    public static function getEstoque() {
        return [
            "id_peca"            => null,
            "quantidade_estoque" => null,
            "nome_peca"          => null,
            "descricao_peca"     => null,
            "valor_peca"         => null,
            "local_estoque"      => null,
            "whereValue"         => null
        ];
    }

    public static function getServicos() {
        return [
            "id_servico"        => null,
            "nome_servico"      => null,
            "descricao_servico" => null,
            "valor_servico"     => null,
            "tipo_servico"      => null,
            "data_servico"      => null,
            "whereValue"        => null
        ];
    }

    public static function getRequisitar() {
        return [
            "id_servico" => null,
            "id_peca"    => null,
            "whereValue" => null
        ];
    }

    public static function getOrdem_servico() {
        return [
            "id_veiculo" => null,
            "id_servico" => null,
            "whereValue" => null
        ];
    }

    public static function getRealizam() {
        return [
            "id_servico"     => null,
            "id_funcionario" => null,
            "whereValue"     => null
        ];
    }
}
?>