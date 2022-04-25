<?php

$codigos = [12, 13, 14, 15, 16, 17, 18];

list($codigo0, $codigo1, $codigo2,, $codigo4) = $codigos;

print_r($codigos);

echo "<br><br> $codigo0 , $codigo1, $codigo2, $codigo4 <br>";

unset($codigos[3], $codigos[5]);

echo ("<br>");
list($codigo0, $codigo1, $codigo2,, $codigo4) = $codigos;

print_r($codigos);
echo "<br><br> $codigo0 , $codigo1, $codigo2, $codigo4 <br><br>";


$lugares = [
    "Padaria" => "FECHADO",
    "Mercado" => "FECHADO",
    "Bar" => "ABERTO"
];

["Padaria" => $padaria, "Bar" => $bar] = $lugares;

print_r($lugares);

echo "<br><br> A Padaria esta $padaria e o Bar esta $bar";

?>