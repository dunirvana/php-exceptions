<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


try {

    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.789-10'),
            //'Vinicius Dias',
            'a',
            new Endereco('Cidade', 'bairro', 'rua', 'numero')
        )
    );
    
    $contaCorrente->deposita(-100);

} catch (\InvalidArgumentException | \DomainException $ex) {
    echo $ex->getMessage();
}



