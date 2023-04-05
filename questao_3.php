<?php

$json = file_get_contents("dados.json");

$data = json_decode($json);
$total = 0;
$termos = 0;
$termos2 = 0;

//pegando a média fazendo separação de dias em que não houve faturamento:
foreach ($data as $value) {
    if ($value->valor > 0) {
        $total = $total + $value->valor;
        $arrayTotal[$termos] = $value->valor;
        $termos++;
    }
}
$media = $total / $termos;

foreach($data as $value){
    if($media > $value->valor) {
        $termos2++;
    }
}

echo "A média de faturamento é: ". number_format($media, 2, ',', '') . "<br>";

echo "O menor faturamento é: " . number_format(min($arrayTotal), 2, ',', '') . "<br>";

echo "O maior faturamento é: " . number_format(max($arrayTotal), 2, ',', '') . "<br>";

echo "Total de dias de faturamento acima da média: " . $termos2 . "<br>";




//
