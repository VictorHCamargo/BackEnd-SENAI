<!-- Cenário 3 – Fantasia e Destino
John Snow, Papai Smurf, Deadpool e Dexter estão em uma jornada. Durante o
caminho, começa a chover, e eles precisam amar uns aos outros para superar as
dificuldades. No fim da jornada, eles celebram ao comer juntos. -->
<?php
    namespace AULAS\AULA_12;
    class Personagens {
        public function comer(){
            echo "Eles estão comendo juntos";
        }
        public function amar(){
            echo "Eles estão se amando juntos";
        }

    }
    class Way {
        public function chover(){
            echo "Está chovendo...";
        }
    }
    // Way e personagens temos uma agregação, no qual personagens e o todo e o way e apenas uma parte, mas pode existir independente do personagens





?>