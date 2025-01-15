<?php

$carros = [
    ["Toyota", 2022, "Corolla"],
    ["BMW", 2021, "X5"],
    ["Porsche", 2022, "911"]
    
];

foreach ($carros as $carro) {
    echo "Marca: " . $carro[0] ,
     ", Ano: " . $carro[1] , ",
      Modelo: " . $carro[2] , "<br>";
}


echo "<pre>";
print_r($carros);
echo "</pre>";
?>