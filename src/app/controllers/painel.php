<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        initAdmin();
    }
    
	public function index()
	{
		$this->appStart();
	}

    private function appStart()
    {
        if(isLogged(false))
        {
            setTheme('title','Dashboard');
            setTheme('content','<div class="conteiner"><h2>Escolha um menu para iniciar</h2></div>');
            loadTemplate();
        }else{
            redirect('usuarios/login');
        }
    }

}

/* End of file painel.php */
/* Location ./src/app/controllers/painel.php */