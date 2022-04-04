<?php

function validaNome(string $nome): bool
{

    if (empty($nome)) {
    //Verifica se a variável está vazia
        setarMensagemErro(mensagem: 'O nome não pode estar vazio.');
        return false;
    } elseif (strlen($nome) < 3) {
    //Verifica a qtd de caracteres na string
        setarMensagemErro(mensagem: 'O nome deve conter mais que 3 caracteres.');
        return false;
    } elseif (strlen($nome) > 40) {
    //Verifica a qtd de caracteres na string
        setarMensagemErro(mensagem: 'O nome não deve conter mais que 40 caracteres.');
        return false;
    }
    return true;
}
function validaIdade(string $idade): bool
{
    if (!is_numeric($idade)) {
    //Verifica se é um número
        setarMensagemErro(mensagem: 'Informe um número válido.');
        header('location: index.php');
        return false;
    }
    return true;
}
