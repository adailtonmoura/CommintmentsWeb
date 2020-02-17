<?php require_once('header.php');

require 'vendor/autoload.php';

?>

<div class="container">

    <?php 

        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

        switch($pagina){
        
            case 'login':
                include_once 'App/view/login.php';
                break;
    
            case 'home':
                include_once 'App/view/home.php';
                break;
    
            case 'registro':
                include_once 'App/view/registro.php';
                break;
    
                default: 
                include_once 'App/view/home.php';
        }

    ?>


</div>

<?php require_once('footer.php');?>