<?php

class Produto {

    private $id;
    private $nome;
    private $preco;
    private $marca;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setMarca(Marca $marca) {
        $this->marca = $marca;
    }

    

}