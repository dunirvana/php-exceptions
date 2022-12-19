<?php

class MinhaExcecao extends DomainException
{
    public function exibeMensagemAleatoria()
    {
        echo "Mensagem Aleatoria";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeMensagemAleatoria();
}
