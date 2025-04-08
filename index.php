<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo - 01</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 01</h1>
    <hr>    
<?php 
// Carregando/importando a classe
require_once "src/Cliente.php"; 

// Criando objeto/ instancia da classe
$clienteA  = new Cliente();
$clienteB  = new Cliente();


// Atribuindo valores para os atributos/ colocando dados no objetos
$clienteA ->nome = "Fulano da silva";
$clienteA ->idade = 30;
$clienteA ->email = "fulano@gmail.com"; 
?>

<h2>Testes de acesso aos recursos da classe atráves do objeto</h2> 

<pre><?=var_dump($clienteA, $clienteB)?></pre>


</body>
</html>