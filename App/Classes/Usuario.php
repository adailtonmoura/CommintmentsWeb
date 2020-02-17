<?php
    namespace App\Classes;
    class Usuario
{
    private $nome;
    private $email;
    private $senha;

        public function __construct($nome_p,$email_p,$senha_p)
        {
        $this->setNome($nome_p);
        $this->setEmail($email_p);
        $this->setSenha($senha_p);
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getPassword()
        {
            return $this->senha;
        }

        public function setNome($nome_p)
        {
            $this->nome = $nome_p;
        }

        public function setEmail($email_p)
        {
            $this->email = $email_p;
        }

        public function setSenha($senha_p)
        {
            $this->senha = $senha_p;
        }
    }
?>

    