<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('system');
        initAdmin();
    }
    
	public function index()
	{
		$this->load->view('users');
	}

    public function login()
    {
        setTheme('title','Login');
        setTheme('content', loadModule('user','login'));
        loadTemplate();
    }

}

/* End of file users.php */
/* Location ./src/app/controllers/users.php */