<?php
function CalcularAreaCirculo($r) {
    $a = 3.14 * $r * $r;
    return $a;
}

function CalcularCircunferencia($r) {
    $circunferencia = 2 * 3.14 * $r;
    return $circunferencia;
}

for ($i = 0; $i < 3; $i++) {
    $r = readline("Informe o raio do círculo em centímetros: " . "\n");
    
    $a = CalcularAreaCirculo($r);
    $circunferencia = CalcularCircunferencia($r);
    
    echo "Para o círculo com raio " . $r . "cm." . "\n";
    echo "Área: " .  $a . "cm²." . "\n";
    echo "Circunferência: " .  $circunferencia . "cm." . "\n";
}
