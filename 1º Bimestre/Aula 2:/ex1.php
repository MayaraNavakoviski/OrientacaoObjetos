<?php



   $numeros = 0;


   for ($i=0; $i <=10 ; $i++) { 

      $numeros = readline ("Me informe um número: ") ;

      if ($numeros < 0) {
        echo "Esse número é negativo " . $numeros ."\n";

      } else if ($numeros > 0) {
              echo "Esse número é positivo " . $numeros . "\n";
      }
    


}
