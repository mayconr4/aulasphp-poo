<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>orientação a objeto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>  
    <div class="container">
        <h1 class=" text-center">exemplo2 PHP COM POO</h1>
    <hr>    
<?php 
// Carregando/importando a classe
require_once "src/Cliente.php"; 

// Criando objeto/ instancia da classe
$clienteA  = new Cliente();
$clienteB  = new Cliente();


// inserindo valores atraves do setters/metodo
$clienteA ->setnome("Fulano da silva");
$clienteA ->setidade(30);
$clienteA ->setemail("Fulano@gmail.com");


$clienteB ->setnome("Maycon Henrique");
$clienteB ->setidade(17);
$clienteB ->setemail("mayconr4@gmail.com");
 
?>

<h2>Acessando/lendo dados dos objetos</h2>



<ul>     
    <li><b>Idade: </b> <?=$clienteA->getIdade()?> </li>
    <li><b>email: </b> <?=$clienteA->getEmail()?> </li> 
    <li><b>nome: </b> <?=$clienteA->getnome()?> </li>
</ul>


<ul>     
    <li><b>Idade: </b> <?=$clienteB->getNome()?> </li>
    <li><b>email: </b> <?=$clienteB->getEmail()?> </li>
    <li><b>idade: </b> <?=$clienteB->getIdade()?> </li>
</ul>


<h2>Testes de acesso aos recursos da classe atráves do objeto</h2> 



<pre><?=var_dump($clienteA, $clienteB)?></pre>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>