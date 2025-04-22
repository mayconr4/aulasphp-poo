<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 05</h1>
    <hr>

<?php  // a super classe sempre deve estar por cima das sub classes
require_once "src/Enums/Situacao.php"; // Enum
require_once "src/Models/Cliente.php"; // Superclasse
require_once "src/Models/PessoaJuridica.php"; // subclasse 
require_once "src/Models/PessoaFisica.php"; // Subclasse

$clientePF = new PessoaFisica("Tiago", "tiago@gmail.com", 30, "123.456.789-00");
$clientePJ = new PessoaJuridica("Jão Pedro","joao@tabajara.com", "123.456.789-00",2019,"Corporação Tabajara");  

/* Cliente é uma classe abstrata, portanto,não podemos criar objeto a partitr dela*/
// $clienteGenerico = new Cliente("Fulano","Fulano@gmail.com");
// var_dump($clienteGenerico);


// $clientePJ->setSituacao(Situacao::ATIVO);
?>

<h2>Relátorios</h2>

<h3>PF</h3>
<?=$clientePF->relatorio()?>

<h3>PJ</h3>
<?=$clientePJ->relatorio()?>

</body>
</html>