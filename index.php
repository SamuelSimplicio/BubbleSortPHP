<?php

   function bubble_sort($vetor){

    $tamanho = count($vetor);
 
    for($i = 0; $i < $tamanho; $i++){
        for ($j=0; $j < $tamanho-$i-1; $j++) { 
            if ($vetor[$j] > $vetor[$j+1]) {
                $aux = $vetor[$j];
                $vetor[$j] = $vetor[$j+1];
                $vetor[$j + 1]=$aux;
            } 
        }
    }

    return $vetor;
    }

$vetor = array(4,6,1,5,9,3,7,2,8,10);

echo "Vetor antes da ordanação: \n";

print_r($vetor);

$vetor = bubble_sort($vetor);
echo "Vetor depois da ordenação: \n";
print_r($vetor);

?>