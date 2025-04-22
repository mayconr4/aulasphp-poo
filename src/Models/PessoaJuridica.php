<?php 
/*Classe final: não permite herança, ou seja , não será possivel criar uma subclasse que extenda PessoaJuridica */
class PessoaJuridica extends Cliente 
{ 
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia; 

    public function __construct(string $nome, string $email, string $cnpj, int $ano, string $nomeFantasia)
    {
        parent::__construct($nome, $email);

        $this->setCnpj($cnpj);
        $this->setanoFundacao($ano);
        $this->setNomeFantasia($nomeFantasia);  

        /*Como o método foi definido na superclasse como protected agora é possivel usá-lo para mudar a situação de PJ. */ 
        $this->setSituacao(Situacao::PENDENTE);
    } 

    public function relatorio(): string 
    {
        return "<div>" 
            . parent::relatorio() .
            "<p><b>Nome Fantrasia:</b> {$this->getNomeFantasia()}</p>
            <p><b>CNPJ:</b> {$this->getCnpj()} </p>
        </div>";
    }
 

    private function setCnpj(string $cnpj):void{ 
        $this->cnpj = $cnpj;
    } 
    
    private function setAnoFundacao(int $ano):void{ 
        $this-> anoFundacao = $ano;
    } 
    
    private function setNomeFantasia(string $nome):void{ 
        $this-> nomeFantasia = $nome;
    } 
    
    public function getCnpj(): string  
    { 
        return $this->cnpj; 
    }

    public function getAnoFundacao(): int  
    { 
        return $this->anoFundacao; 
    } 

    public function getNomeFantasia(): string  
    { 
        return $this->nomeFantasia; 
    }


}