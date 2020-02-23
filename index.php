<?php require 'vendor/autoload.php'; 
            session_start();

?>

<?php require_once('header.php');?>

<div class="container">

    <?php 

        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

        switch($pagina){
            
            case 'home':
                if(isset ($_SESSION['usuario-logado'])) { 
                    include_once 'App/view/home.php';
                }else{
                    include_once 'App/view/login.php';
                }
                break;

            case 'login':
                include_once 'App/view/login.php';
                break;
    
            case 'registro':
                include_once 'App/view/registro.php';
                break;

            case 'teste':
                include_once 'App/view/teste.php';
                break;
    
            default: 
                include_once 'App/view/login.php';
                break;
        }

    ?>


</div>

<?php require_once('footer.php');?>