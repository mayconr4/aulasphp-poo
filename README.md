# Exemplos de programação orientada a objetos usando PHP

## 02_encapsulamento-para-visuabilidade 

- Controle da forma como os dados são acessados (getters) e modificados (setters)
- com está abordagem, podemos esconder detalhes de implementação da classe 
- Podemos atribuir diferentes lógicas de negócio (validações, sanitizações , etc...)

## 01_abstracao-usando-classes-atributos-metodos

- Pasta `src` para organização das classes
- Criação da classe `Cliente.php` *(Sempre iniciando com maiúscula)* 
-  Definição de atributos: 
    - Tipo de visibilidade (nos exemplos ,usamos `public`)
    - tipo de dados 
    - nome do atributo
 - definição de metodos contendo:
    - Tipo de visibilidade (nos exemplos ,usamos `public`)
    - nome do método
    - detalhes adicionais (parâmetros, tipo de retorno etc)
- Na `index.php`
    - Uso do `require` para referenciar a classe `Cliente`
    - Criação dos objetos `$clienteA` e `$clienteB` a partir da classe usando `new Cliente()`
    - Atrivuiçãp de dados de forma direta aos atributos usando`$nomeObjeto->atributo`
    - Chamada de métodos através do objeto usando `$nomeObjeto->metodo()`
