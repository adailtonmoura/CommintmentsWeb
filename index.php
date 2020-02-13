<?php require_once('header.php'); ?>

<div class="container">

    <?php 

        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

        switch($pagina){
        
            case 'login':
                include_once 'view/login.php';
                break;
    
            case 'home':
                include_once 'view/home.php';
                break;
    
            case 'registro':
                include_once 'view/registro.php';
                break;
    
                default: 
                include_once 'view/home.php';
        }

    ?>


</div>

<?php require_once('footer.php');?>