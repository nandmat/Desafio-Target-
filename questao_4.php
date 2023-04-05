<?php 

function porcentagem($base, $valor) {
    return $valor / $base * 100;
}

$faturamento = [
    'sp' => 67836.43,
    'rj' => 36678.66,
    'mg' => 29229.88,
    'es' => 27165.48,
    'outros' => 19849.53
];

$total = array_sum($faturamento);

echo "Valor total: R$ " . (number_format(array_sum($faturamento), 2, ',', '')) . "<br>";

echo "Percentual SP: " . number_format(porcentagem($total, $faturamento['sp']), 2, ',', '') . "% <br>";
echo "Percentual RJ: " . number_format(porcentagem($total, $faturamento['rj']), 2, ',', '') . "% <br>";
echo "Percentual MG: " . number_format(porcentagem($total, $faturamento['mg']), 2, ',', '') . "% <br>";
echo "Percentual ES: " . number_format(porcentagem($total, $faturamento['es']), 2, ',', '') . "% <br>";
echo "Percentual OUTROS: " . number_format(porcentagem($total, $faturamento['outros']), 2, ',', '') . "% <br>";

?>