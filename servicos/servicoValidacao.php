<?php

function ValidaNome(string $nome): bool
{

    if (empty($nome)) {
    //Verifica se a variável está vazia
        $_SESSION['mensagem-de-erro'] = 'O nome não pode estar vazio.';
        return false;
    } elseif (strlen($nome) < 3) {
    //Verifica a qtd de caracteres na string
        $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais que 3 caracteres.';
        return false;
    } elseif (strlen($nome) > 40) {
    //Verifica a qtd de caracteres na string
        $_SESSION['mensagem-de-erro'] = 'O nome não deve conter mais que 40 caracteres.';
        return false;
    }
    return true;
}
function ValidaIdade(string $idade): bool
{

    if (!is_numeric($idade)) {
    //Verifica se é um número
        $_SESSION['mensagem-de-erro'] = 'Informe um número válido.';
        header('location: index.php');
        return false;
    }
    return true;
}
