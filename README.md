# Mercado JWT

Este programa em PHP é um sistema básico de controle de vendas que utiliza duas classes principais: Produto e Venda.
Classe Produto

    Atributos: nome, preco, e quantidade.
    Métodos:
        setProduto($data): Define os valores dos atributos da classe Produto com base nos dados fornecidos.
        getProduto(): Retorna um array associativo contendo as informações do produto.

Classe Venda

    Herda da classe Produto.
    Novos atributos: quantidadeVendida e desconto.
    Métodos:
        setVenda($data): Registra uma venda, verificando se o produto está cadastrado e se há estoque suficiente.
        getVenda(): Exibe informações sobre a última venda registrada.
        getQuantidade(): Retorna a quantidade de produtos em estoque.
        setQuantidade($quantidade): Define a quantidade de produtos em estoque.

Como Executar o Programa

    Certifique-se de ter o PHP instalado em seu ambiente de desenvolvimento.

    Abra um editor de texto ou uma IDE que suporte PHP e copie o código fornecido.

    Salve o arquivo com a extensão .php, por exemplo, controle_vendas.php.

    Abra um terminal ou prompt de comando na pasta onde o arquivo PHP foi salvo.

    Execute o programa digitando o seguinte comando e pressionando Enter:
        php MercadoJWT.php

        O exemplo no final do código demonstra como criar um produto (Banana), inicializar o estoque e registrar uma venda. Você pode adaptar esse exemplo conforme necessário para o seu caso de uso.

$produto = new Produto();
$produto->setProduto(['Item' => 'Banana', 'preco' => 10, 'quantidade' => 50]);

$venda = new Venda();
$venda->setProduto(['Item' => 'Banana', 'preco' => 10, 'quantidade' => 50]);
$venda->setVenda(['Item' => 'Banana', 'quantidade' => 20, 'desconto' => 2]);
