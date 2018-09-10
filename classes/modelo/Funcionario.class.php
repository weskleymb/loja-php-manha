<?php

require_once(__DIR__ . "/./Sexo.class.php");

class Funcionario {

    private $matricula;
    private $nome;
    private $cpf;
    private $sexo;
    private $supervisor;

    public function getMatricula() {
        return $this->matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getSupervisor() {
        return $this->supervisor;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setNome($nome) {
        $this->nome = strtoupper($nome);
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setSexo(Sexo $sexo) {
        $this->sexo = $sexo;
    }

    public function setSupervisor(Funcionario $supervisor) {
        $this->supervisor = $supervisor;
    }

}
