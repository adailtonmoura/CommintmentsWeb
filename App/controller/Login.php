<?php 
require '../../vendor/autoload.php';

    
    use App\Model\DBUsuario;

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? md5($_POST['senha']) : '';

    $dbuser = new DBUsuario();

    if($dbuser -> validarLogin($email,$senha) == true){
        header("Location: https://localhost/CommitmentsWeb/?pagina=home");  
    }
    else{
        header("Location: https://localhost/CommitmentsWeb/?pagina=login&erro= Login ou Senha invalidos!");
    }

?>