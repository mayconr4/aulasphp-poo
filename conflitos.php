<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conflito de classes</title>
</head>
<body>
    <h1>Evitando conflito de classes</h1>

<?php

use Fornecedores\Pagamento;
use Prestadores\Pagamento as PrestadoresPagamento; // Neste caso, com apelido

require_once "vendor/autoload.php";

// Criando objeto para usar as classes de pagamento
$pagamentoFornecedor = new Pagamento();
$pagamentoPrestador = new PrestadoresPagamento();

?>
    
</body>
</html>