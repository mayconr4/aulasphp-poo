<?php

namespace MeuProjeto\Models;
/*Usamos o use para indicar a utilização de otras classes\enums que temos */

use MeuProjeto\Enums\Situacao;

// Usamos o 'use' para indicar a utilização de classesn internas 
use InvalidArgumentException;

abstract class Cliente
{
    private string $nome;
    private string $email;
    private Situacao $situacao;


    public function __construct(string $nome, string $email, Situacao $situacao = Situacao::INATIVO)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSituacao($situacao);
    }

    public function relatorio(): string
    {
        return "<div> 
            <h4> {$this->getNome()} </h4> 
            <p><b>Contato:</b> {$this->getEmail()}</p>
        </div>";
    }

    /*Visisbilidade protegida: desta forma, este método pode ser usado aqui em Cliente (Superclasse) e també nas subclasses  o acesso externo (no nosso caso em index) continua sendo bloqueado.**/
    protected function setSituacao(Situacao $situacao): void
    {
        $this->situacao = $situacao;
    }

    public function getSituacao(): Situacao
    {
        return $this->situacao;
    }

    private function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    private function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("E-mail inválido!");
        }

        $this->email = $email;
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function getEmail(): string
    {
        return $this->email;
    }
}
