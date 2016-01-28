<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Carrega um módulo do sistema devolvendo a tela solicitada
function loadModule($module=null, $screen=null, $dir = 'painel')
{
    $ci =& get_instance();
    if($module != null){
        return $ci->load->view("$dir/$module", array('screen'=>$screen), true);
    }else{
        return false;
    }
}

// Seta valores ao array $tema da classe sistema
function setTheme($prop, $value, $replace = true)
{
    $ci =& get_instance();
    $ci->load->library('system');
    if($replace)
    {
        $ci->system->theme[$prop] = $value;
    }else{
        if(!isset($ci->system->theme[$prop]))
        {
            $ci->system->tema[$prop] = '';
        }
        $ci->system->theme[$prop] .= $value;
    }
}

// Retorna os valores do array $tema da classe system
function getTheme()
{
    $ci =& get_instance();
    $ci->load->library('system');
    return $ci->system->theme;
}

// Inicializa o painel adm, carregando os recursos necessários
function initAdmin()
{
    $ci =& get_instance();
    $ci->load->library(array('system','session','form_validation'));
    $ci->load->helper(array('form','url','array','text'));
    // $ci->load->model(array());

    setTheme('defaultTitle','My Dashboard');
    setTheme('defaultSubtitle','Almost Everything!');
    $year = date('Y');
    setTheme('defaultFooter',"<p class='text-center'>&copy; $year | Todos direitos reservados para <strong>Ricardo Amb</strong></p>");
    setTheme('template','painel');
}

// Carrega um template passando o array como parametro
function loadTemplate()
{
    $ci =& get_instance();
    $ci->load->library('system');
    $ci->parser->parse($ci->system->theme['template'], getTheme());
}

/* End of file functions_helper.php */
/* Location ./src/app/helpers/functions_helper.php */

