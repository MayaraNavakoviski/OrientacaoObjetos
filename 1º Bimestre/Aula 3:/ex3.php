<?php 

   function ParImpar($num){
     return($num % 2 == 0);
   }
   $num = 5;
   while($num != 0){
        $num = readline("Informe um número, se o número informado for PAR, o programa retornará TRUE e se o número for IMPAR retornará FALSE:  " . "\n");

        $isPar = ParImpar($num);
       if($isPar){
         echo "O número é par" . "\n";
         
       }else {
        echo "O número é impar" . "\n";
       }
       
   } 
