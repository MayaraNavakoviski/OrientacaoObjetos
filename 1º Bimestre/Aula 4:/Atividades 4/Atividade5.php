<?php


$pessoas = [];


   for ($i = 0; $i < 4; $i++) {

       $nome = readline("Informe seu Nome: " . "\n");
       $idade = readline("Informe sua Idade: " . "\n");
       $cidade = readline("Informe sua Cidade Natal: " . "\n");
       $profissao = readline("Informe sua Profissão: " . "\n");

       $pessoas[] = [
          "nome" => $nome,
          "idade" => $idade,
          "cidade" => $cidade,
          "profissao" => $profissao
    ];
}


     $maior_idade = PHP_INT_MIN;

     foreach ($pessoas as $pessoa) {
          if ($pessoa["idade"] > $maior_idade) {
             $maior_idade = $pessoa["idade"];
             $pessoa_mais_velha = $pessoa;
    }
}


       echo "A pessoa mais velha é:\n";
       echo "Nome: " . $pessoa_mais_velha["nome"] . "\n";
       echo "Idade: " . $pessoa_mais_velha["idade"] . "\n";
       echo "Cidade Natal: " . $pessoa_mais_velha["cidade"] . "\n";
       echo "Profissão: " . $pessoa_mais_velha["profissao"] . "\n";
