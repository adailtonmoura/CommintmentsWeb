<?php 
 require '../../vendor/autoload.php';

    
    use App\Model\DBUsuario;

    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? md5($_POST['senha']) : '';

    if(!empty($login) && !empty($senha)){
        $dbuser = new DBUsuario();

        if($dbuser -> validarLogin($login,$senha) != false){
            session_start();
    
        $usuario = mysqli_fetch_assoc($dbuser -> validarLogin($login,$senha));

        //var_dump($usuario);
        $_SESSION['usuario-logado'] = true;
        $_SESSION['username'] = $usuario['Nome'];


        header("Location: https://localhost/CommitmentsWeb/?pagina=home");
        
        }
        else{
            header("Location: https://localhost/CommitmentsWeb/?pagina=login&erro= Login ou Senha invalidos!");
        }
    }
?>