<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 07</h1>
    <hr>

<?php
/*Sempre que trablaharmos com namespaces será necessário espessificar
atráves do 'use' quais classes /enums/funções serão usadas */ 
use MeuProjeto\Models\PessoaFisica;
use MeuProjeto\Models\PessoaJuridica;


require_once "vendor/autoload.php";


$clientePF = new PessoaFisica("Tiago", "tiago@gmail.com", 30, "123.456.789-00");
$clientePJ = new PessoaJuridica("Jão Pedro","joao@tabajara.com", "123.456.789-00",2019,"Corporação Tabajara");  

/*Subistituimos os requires anteriores,
por um UNICO REQUIRE apontando para o autoload */
use MeuProjeto\Calculadora;
   
/*Acessando um método estático (ou sejá, sem passar por um objeto) */
$total = Calculadora::somar(10,5);
echo $total;
?>

<h2>Relátorios</h2>

<h3>PF</h3>
<?=$clientePF->relatorio()?>

<!-- Acessamos as opções do enum através do getSituacao()->name -->
<p><b>Situação: </b> <?=$clientePF->getSituacao()->name?> </p>

<h3>PJ</h3>
<?=$clientePJ->relatorio()?>
<p><b>Situação: </b> <?=$clientePj->getSituacao()->name?> </p>

</body>
</html>