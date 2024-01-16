<?php
# Classe PRODUTO E SEUS ATRIBUTOS  
class Produto {
    private $nome;
    private $preco;
    protected $quantidade;


    #Função SetProduto onde ele define um valor aos atributos da classe Produto.
    public function setProduto($data) {
        $this->nome = $data["Item"];
        $this->preco = $data["preco"];
        $this->quantidade = $data["quantidade"];
    }


    #Métodogit getProduto onde se obtem o valor dos atributos da classe Produto.
    public function getProduto() {
        return [
            "Item" => $this->nome,
            "preco" => $this->preco,
            "quantidade" => $this->quantidade,
        ];
    }
}


#Classe  Vendas que herda funções da classe produto e também foi acrescentado mais dois atributos "quantidadeVendida" e "desconto".
class Venda extends Produto {
    private $quantidadeVendida;
    private $desconto;

    
    #Métodos SetProduto e getProduto onde ele define e obtem um valor aos atributos da classe Venda.

    public function setVenda($data) {
        $produtoAtual = $this->getProduto();
        if ($produtoAtual['Item'] !== $data['Item']) {
            echo "Produto não cadastrado. \n";
            return;
        }

        if ($produtoAtual['quantidade'] < $data['quantidade']) {
            echo "Estoque insuficiente.\n";
            return;
        }

        $this->quantidadeVendida = $data['quantidade'];
        $this->desconto = $data['desconto'];

        
        #Acesso à propriedade protegida através dos métodos getters e setters
        
        $this->setQuantidade($this->getQuantidade() - $this->quantidadeVendida);

        $this->getVenda();
    }

    public function getVenda() {
        $produtoAtual = $this->getProduto();

        echo "Última venda registrada:\n";
        echo "Nome: " . $produtoAtual['Item'] . "\n";
        echo "Quantidade vendida: " . $this->quantidadeVendida . "\n";
        echo "Desconto: " . $this->desconto . "\n";
        echo "Estoque atual: " . $this->getQuantidade() . "\n";
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
}

# Um exemplo de como usar o programa.
$produto = new Produto();
$produto->setProduto(['Item' => 'Banana', 'preco' => 10, 'quantidade' => 50]);

$venda = new Venda();
$venda->setProduto(['Item' => 'Banana', 'preco' => 10, 'quantidade' => 50]); 
$venda->setVenda(['Item' => 'Banana', 'quantidade' => 20, 'desconto' => 2]);

?>