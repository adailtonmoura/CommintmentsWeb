<?php 
 require '../../vendor/autoload.php';

    
    use App\Classes\Usuario;

    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? md5($_POST['senha']) : '';    

    if(!empty($login) && !empty($senha)){
        $user = new Usuario();
        $user -> setLogin($login);
        $user -> setSenha($senha);

        if($user -> dadosUsuario() != false){
            session_start();
    
        $_SESSION['usuario-logado'] = true;
        $_SESSION['username'] = $user -> getNome();


       header("Location: https://localhost/CommitmentsWeb/?pagina=home");
        
        }
        else 
            if($user -> dadosUsuario($login,$senha) == false){
                //header("Location: https://localhost/CommitmentsWeb/?pagina=login&erro= Login ou Senha invalidos!");
            }
    }else{
      // header("Location: https://localhost/CommitmentsWeb/?pagina=login&erro= Preencha todos os campos!");
    }
?>