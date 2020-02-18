<?php 
 require '../../vendor/autoload.php';

    
    use App\Model\DBUsuario;

    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? md5($_POST['senha']) : '';

    $dbuser = new DBUsuario();

    if($dbuser -> validarLogin($login,$senha) == true){
        header("Location: https://localhost/CommitmentsWeb/?pagina=login");  
    }
    else{
        header("Location: https://localhost/CommitmentsWeb/?pagina=login&erro= Login ou Senha invalidos!");
    }

?>