<?php
function verificaPrimo($count)
{
    if ($count == 1)
        return 0;
    for ($i = 2; $i <= $count / 2; $i++) {
        if ($count % $i == 0)
            return 0;
    }
    return 1;
}

function primos($valorInicial, $valorFinal)
{
    for ($count = $valorInicial; $count <= $valorFinal; $count++) {
        if (verificaPrimo($count) == 1) {
            echo $count . " ";
        }
    }
}

echo primos(1, 100);
