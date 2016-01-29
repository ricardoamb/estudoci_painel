<?php //defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function login($email=null, $senha=null)
    {
        if($email != null && $senha != null)
        {
            $this->db->where('email', $email);
            $this->db->where('senha', $senha);
            $this->db->where('ativo', 1);
            $query = $this->db->get('usuarios');
            if($query->num_rows == 1){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}

/* End of file users.php */
/* Location ./src/app/models/users.php */