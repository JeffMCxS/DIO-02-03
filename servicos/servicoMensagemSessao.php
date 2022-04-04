<?php

session_start();

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
