<?php

namespace Alura\Banco\Modelo\Conta\Exceptions;

use DomainException;

class SaldoInsuficienteException extends DomainException { 

    public function __construct(float $valorSaque, float $saldo) {
        $message = "Voce tentou sacar {$valorSaque} mais o seu saldo é de {$saldo}.";
        parent::__construct($message);
    }

}