<?php

function defineCategoriaCompetidor(string $nome, string $idade): ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

//Valida se os valores foram preenchidos
    if (validaNome($nome) && validaIdade($idade)) {
//Define as Categorias
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'infantil') {
                    setarMensagemSucesso(mensagem: "O nanador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } elseif ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adolescente') {
                    setarMensagemSucesso(mensagem: "O nanador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adulto') {
                    setarMensagemSucesso(mensagem: "O nanador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
