<?php
class ContaBancaria { public $titular; public $saldo; public $banco;

    function depositar($valor) { $this->saldo = $this->saldo + $valor; }
    function sacar($valor) { $this->saldo = $this->saldo - $valor; }
    function mostrarSaldo() {
        echo "Titular: " . $this->titular . "\n";
        echo "Banco: " . $this->banco . "\n";
        echo "Saldo: R$ " . $this->saldo . "\n";
    }
}

$conta1 = new ContaBancaria();
$conta1->titular = "Ana";
$conta1->saldo = 1000;
$conta1->banco = "Banco A";

$conta2 = new ContaBancaria();
$conta2->titular = "Bruno";
$conta2->saldo = 500;
$conta2->banco = "Banco B";

$conta1->depositar(250);
$conta2->sacar(100);

echo "=== Conta 1 ===\n";
$conta1->mostrarSaldo();

echo "\n=== Conta 2 ===\n";
$conta2->mostrarSaldo();
