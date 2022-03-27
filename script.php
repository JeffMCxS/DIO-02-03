<?php

namespace PHP;

session_start();
//Este comando deve estar sempre no início do script

//Arrays
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
//Verifica se a variável está vazia
    $_SESSION['mensagem-de-erro'] = 'O nome não pode estar vazio.';
    header('location: index.php');
    return;
} elseif (strlen($nome) < 3) {
//Verifica a qtd de caracteres na string
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais que 3 caracteres.';
    header('location: index.php');
    return;
} elseif (strlen($nome) > 40) {
//Verifica a qtd de caracteres na string
    $_SESSION['mensagem-de-erro'] = 'O nome não deve conter mais que 40 caracteres.';
    header('location: index.php');
    return;
} elseif (!is_numeric($idade)) {
//Verifica se é um número
    $_SESSION['mensagem-de-erro'] = 'Informe um número válido.';
    header('location: index.php');
    return;
}


if ($idade >= 6 && $idade <= 12) {
//echo 'infantil';
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['mensagem-de-sucesso'] = "O nanador " . $nome . " compete na categoria " . $categoria[$i];
            header('location: index.php');
            return;
        }
    }
} elseif ($idade >= 13 && $idade <= 18) {
//echo 'adolescente';
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem-de-sucesso'] = "O nanador " . $nome . " compete na categoria " . $categoria[$i];
            header('location: index.php');
            return;
        }
    }
} else {
//echo 'adulto';
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['mensagem-de-sucesso'] = "O nanador " . $nome . " compete na categoria " . $categoria[$i];
            header('location: index.php');
            return;
        }
    }
}
