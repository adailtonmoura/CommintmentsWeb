<?php
    
    namespace App\Model;
    use App\Controller\Database;

        class DBUsuario
        {
            
            function validarLogin($login,$senha)
            {    
                if(!empty($login) && !empty($senha)){

                    $data = new Database();

                    $sql = "SELECT *FROM `usuario` WHERE login = '$login' and  senha = '$senha'";

                    $result = mysqli_query($data->connect(),$sql);

                    if (mysqli_num_rows($result) == 1) {
                        return true;
                    }else{
                        return false;
                    }

                }else{
                    return "Preencha todos os campos";
                }
            }
            
            function cadastrarUsuario($nome,$login,$senha)
            {
                if(!empty($nome) && !empty($login) && !empty($senha)){

                    $data = new Database();

                    $sql = "INSERT INTO `usuario`(`Nome`, `login`, `Senha`) VALUES ('$nome','$login','$senha')";

                    $result = mysqli_query($data->connect(),$sql);

                    if ($result == true) {
                        return true;
                    }else{
                        return false;
                    }

                }else{
                    return "Preencha todos os campos";
                }

            }
            function verificarLogin($login){
                $data = new Database();

                $sql = "SELECT *FROM `usuario` WHERE login = '$login'";

                $result = mysqli_query($data->connect(),$sql);

                if (mysqli_num_rows($result) == 1) {
                    return true;
                }else{
                    return false;
                }
            }

        }
