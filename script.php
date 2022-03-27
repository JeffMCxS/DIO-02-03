<?php

namespace PHP;

//Arrays

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);


//$nome = $_GET['nome'];
//$idade = $_GET['idade'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    //echo 'infantil';
    for ($i = 0; $i <= count($categorias); $i++) {
        if (
            $categorias[$i] == 'infantil'
        ) {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
        }
    }
} elseif ($idade >= 13 && $idade <= 18) {
    //echo 'adolescente';
    for ($i = 0; $i <= count($categorias); $i++) {
        if (
            $categorias[$i] == 'adolescente'
        ) {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
        }
    }
} else {
    //echo 'adulto';
    for ($i = 0; $i <= count($categorias); $i++) {
        if (
            $categorias[$i] == 'adulto'
        ) {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
        }
    }
}
