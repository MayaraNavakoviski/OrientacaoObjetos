<?php 

   
  $vetorA = [];
  $vetorB = [];
  $vetorC = [];
  $vetorD = [];

  for ($i=0; $i < 5; $i++) { 

      $A = readline("Informe um número para o Grupo A: " . "\n");
      $vetorA[$i] = $A;

  }

  for ($i=0; $i < 5; $i++) { 

    $B = readline("Informe um número para o Grupo B: " . "\n");
      $vetorB[$i] = $B;

} 

echo "A interseção dos Grupos informados é: ";

for ($i=0; $i < 5; $i++) {
      if (in_array($vetorA[$i], $vetorB)) {
        echo  $vetorC[$i] = $vetorA[$i] . " ";
      }
  }

  $vetorD = array_merge($vetorA, $vetorB);
  $vetorE = array_unique($vetorD);

   echo "\n" . 'A união dos Grupos A e B é: ' . "\n";

   foreach ($vetorE as $number) {
      echo $number . " ";
} 
      echo "\n";
