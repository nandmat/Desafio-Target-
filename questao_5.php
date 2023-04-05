<?php 
$string = "matheus";

$array = array();
$size = strlen($string);
$cont = 0;

print_r(substr($string, $size - $cont, 1));

while($size >= $cont) {
    $array[$cont] = substr($string, $size - $cont, 1);
    $cont++;
}

echo "String invertida: ";
for($i = 0; $i <= $size; $i++) {
    echo $array[$i];
}
?>