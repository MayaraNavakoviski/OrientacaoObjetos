<?php


    $num = readline("Me informe um número: " . "\n");

    if ($num >= 0) {
        echo "Este número é positivo, então o dobro dele é: " . "\n" . $num*2;
  } else {
        echo "Este número é negativo, então o triplo dele é: " . "\n" . $num*3;
  }
