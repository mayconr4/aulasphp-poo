<?php
class Cliente
{
 // atributos privados     
    private string $nome;
    private int $idade;
    private string $email;

        /* métodos setters: reponsável por receber/atribuir dados
        para as propriedades/atributos */

    public function setnome(string $nome): void 
    { 
       /*this nome para acessar este metodo*/ $this->nome = $nome;
    }

    public function setidade(int $idade): void 
    {   
        if($idade <= 0){ 
            throw new InvalidArgumentException("idade não pode ser negativa");
        }

        $this->idade = $idade;
    }

    public function setemail(string $email): void 
    {  
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new InvalidArgumentException("Email invalido");

        }
        $this->email = $email;
    } 

    public function getNome() :string
    {
        return $this-> nome;

    }

    public function getIdade() :int 
    { 
        return $this-> idade;
    }

    public function getEmail() :string 
    { 
        return $this-> email;
    }

}
