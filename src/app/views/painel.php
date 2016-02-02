<?php defined('BASEPATH') OR exit('No direct script access allowed');
        include('painel/includes/header.php'); ECHO PHP_EOL;
        include('painel/includes/sidebar.php'); ECHO PHP_EOL;
        include('painel/includes/contentUpper.php');
?>

        <!-- HTML CODE -->

        <div class="container">
            {content}
        </div>
<?php   include('painel/includes/contentDown.php');?>
        <!-- END OF HTML CODE -->
<?php   include('painel/includes/footer.php'); ?>