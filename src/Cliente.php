<?php
class Cliente
{
    // atributos (caracteristicas da Classe)
    public string $nome;
    public int $idade;
    public string $email;

    // Métodos (comportamentos da Classe)
    public function exibirDados(): void 
    {
        echo "<p style='color:royalblue'>Este é o cliente.... $this->nome</p>"; // passando atributo com this 
    }
    public function verificarIdade(int $idade): bool
    {
        return true; // só para não ficar dando alerta de erro
    }
}
