<?php
echo "QUESTÃO - 2 <BR>";

//Declarar variáveis inciais
$value = 1;
$n1 = 0;
$n2 = 1;
$n3 = 0;

echo "Sequência de Fibonnaci!! <br>";

//Loop de verificação:
while ($value > $n3) {
    $n3 = $n1 + $n2;
    $n1 = $n2;
}

if ($value == 0 || $value == 1) {
    echo ' faz parte';
} elseif ($value == $n3) {
    echo ' Não faz parte';
} else {
    echo ' Não faz parte';
}
