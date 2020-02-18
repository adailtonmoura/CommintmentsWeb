<?php require 'vendor/autoload.php'; ?>

<?php require_once('header.php');?>

<div class="container">

    <?php 

        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

        switch($pagina){
            

            case 'login':
                include_once 'App/view/login.php';
                break;
    
            case 'registro':
                include_once 'App/view/registro.php';
                break;
    
            default: 
                include_once 'App/view/login.php';
                break;
        }

    ?>


</div>

<?php require_once('footer.php');?>