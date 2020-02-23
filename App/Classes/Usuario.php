<?php
    namespace App\Classes;
    use App\Model\DBUsuario;

    class Usuario
{
    private $nome;
    private $login;
    private $senha;


        public function getNome()
        {
            return $this->nome;
        }

        public function getLogin()
        {
            return $this->login;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setNome($nome_p)
        {
            $this->nome = $nome_p;
        }

        public function setLogin($login_p)
        {
            $this->login = $login_p;
        }

        public function setSenha($senha_p)
        {
            $this->senha = $senha_p;
        }

        public function novoUsuario (){
            $data = new DBUsuario();

            return $data -> cadastrarUsuario($this->getNome(),$this->getLogin(),$this->getSenha());
        }

        public function loginDisponivel(){
            $data = new DBUsuario();

            return $data -> validarLogin($this->getLogin());
        }
        
        public function dadosUsuario(){
            $data = new DBUsuario;

            if($data -> pegarDados($this->getLogin(),$this->getSenha()) != false){

                $dados = $data -> pegarDados($this -> getLogin() , $this->getSenha());

                $this->setNome($dados['Nome']);
                $this->setLogin($dados['login']);
                $this->setSenha($dados['Senha']);

                return true;
            }else{
                return false;
            }
        }
    }
?>

    