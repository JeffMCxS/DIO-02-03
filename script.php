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

if (empty($nome)) { //Verifica se a variável está vazia
    echo 'O nome não pode estar vazio.';
    return;
}

if (strlen($nome) < 3) { //Verifica a qtd de caracteres na string
    echo 'O nome deve conter mais que 3 caracteres';
    return;
}

if (strlen($nome) > 40) { //Verifica a qtd de caracteres na string
    echo 'O nome é muito extenso';
    return;
}

if (!is_numeric($idade)) {
    echo "Informe um número válido";
    return;
}


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
