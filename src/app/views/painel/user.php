<?php defined('BASEPATH') OR exit('No direct script access allowed');

    $this->load->library('system');
    switch ($screen)
    {
        case 'login':
            $this->load->view('painel/templates/login');
            break;
        default:
            echo '<div class="jumbotron text-center"><h1>Ops... Erro 404!</h1><p>Página não encontrada!</p></div>';
    }

/* End of file user.php */
/* Location ./src/app/views/user.php */

