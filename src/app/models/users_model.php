<?php //defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function login($email=null, $senha=null)
    {
        if($email != null && $senha != null)
        {
             $query = $query = $this->db->get_where('usuarios', array('email' => $email, 'senha' => $senha));
             if($query->num_rows() == 1){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function getUser($email=null)
    {
        if($email != null)
        {
            return $this->db->get_where('usuarios',array('email'=>$email),1);
        }else{
            return false;
        }

    }
}

/* End of file users.php */
/* Location ./src/app/models/users.php */