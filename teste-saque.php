<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

try {

    $conta = new ContaPoupanca(
        new Titular(
            new CPF('123.456.789-10'),
            'Vinicius Dias',
            new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
        )
    );

    $conta->deposita(500);
    $conta->saca(600);

    echo $conta->recuperaSaldo();
}
catch(Throwable $e) {
    echo $e->getMessage();
}


