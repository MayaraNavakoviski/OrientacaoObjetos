<?php


     $vetor = [];

     for ($i=0; $i < 10; $i++) { 
          $nums = readline("Informe um número: " . "\n");
          $vetor[] = $nums;
     }

     $media =   array_sum($vetor)/count($vetor);

     echo "A média dos valores informados é: " . $media . "\n";
