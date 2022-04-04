<?php

session_start();

function setarMensagemSucesso(string $mensagem): void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso(): ?string //?string significa que pode retornar string ou null
{
    if (isset($_SESSION['mensagem-de-sucesso'])) {
        return $_SESSION['mensagem-de-sucesso'];
    }
    return null;
}

function setarMensagemErro(string $mensagem): void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro(): ?string //?string significa que pode retornar string ou null
{
    if (isset($_SESSION['mensagem-de-erro'])) {
        return $_SESSION['mensagem-de-erro'];
    }
    return null;
}

//Limpar mensagem que foi exibida anteriormente
function removerMensagemSucesso(): void
{
    if (isset($_SESSION['mensagem-de-sucesso'])) {
        unset($_SESSION['mensagem-de-sucesso']);
    }
}

function removerMensagemErro(): void
{
    if (isset($_SESSION['mensagem-de-erro'])) {
        unset($_SESSION['mensagem-de-erro']);
    }
}
