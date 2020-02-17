<?php
    
    namespace App\Model;
    use App\Controller\Database;

        class DBUsuario
        {
            
            function validarLogin($email,$senha)
            {    
                $data = new Database();

                $sql = "SELECT *FROM `usuario` WHERE email = '$email' and  senha = '$senha'";

                $result = mysqli_query($data->connect(),$sql);

                if (mysqli_num_rows($result) == 1) {
                    return true;
                }else{
                    return false;
                }
            }

        }
