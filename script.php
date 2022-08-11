<?php


function reqEscribo($valor_inicial)
{
    //define o valor final em 0
    $valor_final = 0;

    //Faz a validação dos valores dgitados, permitindo continuar caso cumpra os requisitos
    while (($valor_inicial < 0) || (!is_numeric($valor_inicial)) || (floor($valor_inicial) != $valor_inicial)) {
        $valor_inicial =  readline("O valor digitado ($valor_inicial) não é um valor válido, por favor, digite um novo valor, um número inteiro que seja positivo: ");
    }

    //percorre o valor informado incrementando o valor final, se de acordo com os requisitos
    for ($i = 0; $i < $valor_inicial; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $valor_final += $i;
        }
    }

    return print "Valor recebido com sucesso $valor_inicial, valor final $valor_final";
}



//Recebe o valor inicial do console
$num = readline("Digite um número inteiro que seja positivo: ");


reqEscribo($num);
