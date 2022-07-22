<?php
require('login.php');
class Pessoa {
    private string $nome;
    private string $sobrenome;
    private Login $login;
    private string $email;
    private string $telefone;

    function __construct(string $nome, string $sobrenome, Login $login, string $email, string $telefone) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->login = $login;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    public function getNome() {
        return $nome;
    }
    public function getSobrenome() {
        return $sobrenome;
    }
    public function getLogin() {
        return $login;
    }
    public function getEmail() {
        return $email;
    }
    public function getTelefone() {
        return $telefone;
    }
}
?>