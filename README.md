# Exemplos de programação orientada a objetos usando PHP

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
