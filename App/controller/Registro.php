<?php 
 require '../../vendor/autoload.php';

    
    use App\Classes\Usuario;

    
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? md5($_POST['senha']) : '';
    $confirmarsenha = isset($_POST['confirmarsenha']) ? md5($_POST['confirmarsenha']) : '';
    
    if(!empty($nome) && !empty($login) && !empty($senha) && !empty($confirmarsenha)){

        if($confirmarsenha == $senha){

            $user =  new Usuario();
            $user -> setNome($nome);
            $user -> setLogin($login);
            $user -> setSenha($senha);

            if($user->loginDisponivel() == false){

                $result = $user -> novoUsuario();
                
                if($result == true){
                    header("Location: https://localhost/CommitmentsWeb/?pagina=login");  
                }else{
                    echo "Erro no banco de dados";
                }
                }else{
                    header("Location: https://localhost/CommitmentsWeb/?pagina=registro&name=$nome&erro= Login indisponível");
                }
        }else{
            header("Location: https://localhost/CommitmentsWeb/?pagina=registro&name=$nome&login=$login&erro= Senhas não correspondem");
        }
    }else{
        header("Location: https://localhost/CommitmentsWeb/?pagina=registro&erro= Preencha todos os campos");
    }

       
?>