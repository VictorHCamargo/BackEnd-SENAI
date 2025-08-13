<?php
    class teste {
        public string $teste_name;
        public int $teste_idade;
        public function insertDados($teste_name,$teste_idade) {
            $this->teste_name = $teste_name;
            $this->teste_idade = $teste_idade;
        }
    }
    $test = new teste();
    $test->insertDados("Victor",25);
    echo $test->teste_name, $test->teste_idade;
?>