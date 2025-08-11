<?php
    // Classificação de Temperatura
    // Peça a temperatura e use if...else para exibir:
    // • Menor que 15°C → "Frio"
    // • Entre 15°C e 25°C → "Agradável"
    // • Maior que 25°C → "Quente"
    $temp = readline("Digite a temperatura que está sendo registrada no sensor: ");
    if ($temp >= 25) {
        echo "Com a temperatura $temp °C, está quente";
    } elseif ($temp >= 15) {
        echo "Com a temperatura $temp °C, está Agradável";
    } else {
        echo "Com a temperatura $temp °C, está frio";
    }
?>