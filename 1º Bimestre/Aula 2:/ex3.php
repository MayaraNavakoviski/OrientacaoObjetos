<?php


    $n;
    $p;
    $a;

  
   for ($i=0; $i <= 5 ; $i++) { 

      $n = readline ("Me informe seu nome: ");
      $p = readline ("Me informe seu peso: ");
      $a = readline ("Me informe sua altura: ");

      $imc = $p / ($a*$a);
        
      echo $n . " tem peso " . $p . ", altura " . $a . " e IMC. " . $imc . "\n";
      }

    

    
