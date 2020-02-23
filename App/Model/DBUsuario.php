<?php
    
    namespace App\Model;
    use App\Controller\Database;
use PDO;
use PDOException;

class DBUsuario
        {
            function pegarDados($login,$senha)
            {    

                    try{
                        $data = new Database();

                        $sql = "SELECT *FROM `usuario` 
                        WHERE login = '$login' 
                        and  senha = '$senha'";
                        
                        $pdo = $data->connect(); //recebendo a conexão;
                        $stmt = $pdo->prepare($sql);    //preparando a sql para ser executada;
                        $stmt->execute();   //executando a sql;

                        $linhas = $stmt->rowCount(); //contando as linhas afetadas com a execução da query sql;

                        if($linhas == 1){
                            return $stmt-> fetch(PDO::FETCH_ASSOC);
                        }else{
                            return false;
                        }

                    }catch(PDOException $e){
                        print "Erro: ". $e->getMessage() . "<br>";
                        die();
                    }

                    

            }
            
            function cadastrarUsuario($nome,$login,$senha)
            {
                    $data = new Database(); //Instanciando a minha classe de banco de dados

                    $sql = "INSERT INTO `usuario`(`Nome`, `login`, `Senha`) VALUES ('$nome','$login','$senha')"; //Montando a linha sql

                    $pdo = $data->connect(); //Recebendo a conexão;
                    $stmt = $pdo->prepare($sql);    //Rreparando a sql para ser executada;
                    $stmt->execute();   //Executando a sql;

                    $linhas = $stmt->rowCount(); //Contando as linhas afetadas com a execução da query sql;

                    if ($linhas == 1) {
                        return true;
                    }else{
                        return false;
                    }
            }
            function validarLogin($login){

                $data = new Database(); //Instaciando minha classe de banco de dados;

                $sql = "SELECT *FROM `usuario` WHERE login = '$login' ";  // Montando a linha sql;

                $pdo = $data->connect(); //Recebendo a conexão;
                $stmt = $pdo->prepare($sql);    //Preparando a sql para ser executada;
                $stmt->execute();   //Executando a sql;

                $linhas = $stmt->rowCount(); //Contando as linhas afetadas com a execução da query sql;

                if($linhas == 1){
                    return true;
                }else{
                    return false;
                }
            }

        }
