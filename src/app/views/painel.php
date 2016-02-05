<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        include('painel/includes/header.php'); ECHO PHP_EOL;
        if(isLogged()){
            include_once('painel/includes/sidebar.php');
        }
?>

        <!-- HTML CODE -->

        <div class="content">
            <?php if(isLogged()) include_once('painel/includes/contentUpper.php'); ?>
            {content}
            <?php if(isLogged()) include_once('painel/includes/contentDown.php'); ?>
        </div>
        <?php if(isLogged()){ ?>
            <div class="layer-container">

                <?php include_once('painel/includes/menus/menu.php'); ?>

                <?php include_once('painel/includes/search.php'); ?>

                <?php include_once('painel/includes/profile.php'); ?>

            </div>
        <?php } ?>

        <!-- END OF HTML CODE -->

<?php
        include('painel/includes/footer.php');
?>