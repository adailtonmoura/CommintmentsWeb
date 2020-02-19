<?php
    
    namespace App\Model;
    use App\Controller\Database;

        class DBUsuario
        {
            
            function validarLogin($login,$senha)
            {    

                    $data = new Database();

                    $sql = "SELECT *FROM `usuario` WHERE login = '$login' and  senha = '$senha'";

                    $result = mysqli_query($data->connect(),$sql);

                    if (mysqli_num_rows($result) == 1) {
                        return $result;
                    }else{
                        return false;
                    }

            }
            
            function cadastrarUsuario($nome,$login,$senha)
            {
                    $data = new Database(); //Instanciando o App/Controller/Database.php

                    $sql = "INSERT INTO `usuario`(`Nome`, `login`, `Senha`) VALUES ('$nome','$login','$senha')"; //Montando a query do select

                    $result = mysqli_query($data->connect(),$sql);//Executando a query do select

                    if ($result == true) {
                        return true;
                    }else{
                        return false;
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
