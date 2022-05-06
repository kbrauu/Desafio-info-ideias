<?php
function geraValoresArray()
{
    $valores = [];
    for ($i = 0; $i < 20; $i++) {
        array_push($valores, rand(1, 10));
    }
    return $valores;
}

function verificaDuplicatas($valores)
{
    $numInstanciaValores = array_count_values($valores);
    foreach ($numInstanciaValores as $key => $valor) {
        if ($valor > 1) {
            unset($numInstanciaValores[$key]);
        }
    }
    return array_keys($numInstanciaValores);
}

$valoresAleatorios = geraValoresArray();
$naoDuplicatas = verificaDuplicatas($valoresAleatorios);
echo "Números não duplicados: " . implode(", ", $naoDuplicatas);