<?php


     function criarFuncoesRetangulo($base, $altura) {
            $Area = function () use ($base, $altura) {
            return $base * $altura;
    };

  
            $Perimetro = function () use ($base, $altura) {
            return 2 * ($base + $altura);
    };

             return [$Area, $Perimetro];
}

     for ($i = 1; $i <= 3; $i++) {
          echo "Informe a base do " . $i . "º retângulo em centímetros: " . "\n";
          $base = trim(fgets(STDIN));

          echo "Imforme a altura do " . $i . "º retângulo em centímetros: " . "\n";
          $altura = trim(fgets(STDIN));

          list($area, $perimetro) = criarFuncoesRetangulo($base, $altura);

          echo  "\n" . "Área do " . $i . " º retângulo: " . $area() . " cm²\n";
          echo "Perímetro do " . $i . "º  retângulo: " . $perimetro() . " cm\n\n";
}
?>
