<?php

echo "<p style='color:blue'>Carregando:  include_arquivo <br></p>";

$variavel = "Estou definida em escopo global"; //variável definida diretamente dentro do arquivo tem escopo global


if(!function_exists('soma')){  //forma de proteger a redefinição da função
          function soma($a, $b){
                    $result = $a + $b;
                    return "Soma entre $a e $b = {$result} <br> ";
          }
}else{
          echo "Function já foi chamada antes <br>";
}
