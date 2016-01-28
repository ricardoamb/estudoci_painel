<?php defined('BASEPATH') OR exit('No direct script access allowed');

class System {

    protected $ci;
    public $theme = array();

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->helper('functions');
    }

}

/* End of file system.php */
/* Location ./src/app/libraries/system.php */