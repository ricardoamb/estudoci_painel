<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
	public function index()
	{
		$this->appStart();
	}

    private function appStart()
    {
        redirect('users/login');
    }

}

/* End of file painel.php */
/* Location ./src/app/controllers/painel.php */