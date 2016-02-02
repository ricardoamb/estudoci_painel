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
        $this->form_validation->set_rules('email','E-mail','required|valid_email');
        $this->form_validation->set_rules('senha','Senha','required');
        if($this->form_validation->run())
        {
            $email = $this->input->post('email', true);
            $senha = md5($this->input->post('senha', true));
            if($this->users_model->login($email, $senha)){
                echo '<p class="text-center">Logado com Sucesso!</p>';
            }else{
                echo '<p class="text-center">Falha de Login</p>';
            }
        }
        setTheme('title','Login');
        setTheme('content', loadModule('user','login'));
        loadTemplate();
    }

}

/* End of file users.php */
/* Location ./src/app/controllers/users.php */