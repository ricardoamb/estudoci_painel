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
            $ci->system->theme[$prop] = '';
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

function getThemeByName($name)
{
    $ci =& get_instance();
    $ci->load->library('system');
    return $ci->system->theme[$name];
}

// Inicializa o painel adm, carregando os recursos necessários
function initAdmin()
{
    $ci =& get_instance();
    $ci->load->library(array('system','session','form_validation'));
    $ci->load->helper(array('form','url','array','text'));
    $ci->load->model(array('users_model')); // Models

    setTheme('defaultTitle','My Dashboard');
    setTheme('defaultSubtitle','Almost Everything!');
    $year = date('Y');
    setTheme('defaultFooter',"");
    setTheme('template','painel');
    setTheme('templateFolder','templates');
    // Header Globals
    setTheme('coreCSS', loadStyle(array('admin','elements','main','perfect-scrollbar')), false);
    setTheme('pluginsCSS', loadStyle(array('plugins')), false);
    setTheme('headerJS',loadJavascript(array('modernizr.min')), false);
    setTheme('headerIncludes',loadStyle(array('ionicons.min','font-awesome.min','Lobibox.min','animate')), false);
    // Footer Globals
    setTheme('globalVendors',loadJavascript(array('global-vendors')),false);
    setTheme('pluginsArea','',false);
    setTheme('initPlugins','',false);
    setTheme('footerIncludes',loadJavascript(array('pleasure','layout','bootstrap.min','perfect-scrollbar.jquery','lobibox.min','notifications.min','main')), false);
}

// Carrega um template passando o array como parametro
function loadTemplate()
{
    $ci =& get_instance();
    $ci->load->library('system');
    $ci->parser->parse($ci->system->theme['template'], getTheme());
}

// Carrega 1 ou vários arquivos CSS
function loadStyle($file=null,$folder='assets/css',$media='all')
{
   if($file!=null)
   {
       $ci =& get_instance();
       $ci->load->helper('url');
       $retorno = '';
       if(is_array($file))
       {
           $x = 1;
           foreach($file as $styleFile)
           {
               if ($x == 1){
                   $retorno .= '<link rel="stylesheet" type="text/css" href="'. base_url("$folder/$styleFile.css").'" media="'.$media.'"/>'.PHP_EOL;
               }else{
                   $retorno .= "\t" . '<link rel="stylesheet" type="text/css" href="'. base_url("$folder/$styleFile.css").'" media="'.$media.'"/>'.PHP_EOL;
               }
               $x++;
           }
       }else{
           $retorno = '<link rel="stylesheet" type="text/css" href="'. base_url("$folder/$file.css").'" media="'.$media.'"/>'.PHP_EOL;
       }
       return $retorno;
   }else{
       return false;
   }
}

// Carrega 1 ou vários arquivos Javascript
function loadJavascript($file=null,$folder='assets/js',$remote=false)
{
    if($file!=null)
    {
        $ci =& get_instance();
        $ci->load->helper('url');
        $retorno = '';
        if(is_array($file))
        {
            $x = 1;
            foreach($file as $jsFile)
            {
                if($remote)
                {
                    $retorno .= '<script type="text/javascript" src="'.$jsFile.'"></script>'.PHP_EOL;
                }else{
                    $retorno .= '<script type="text/javascript" src="'.base_url("$folder/$jsFile.js").'"></script>'.PHP_EOL;
                }
                $x++;
            }
        }else{
            if($remote)
            {
                $retorno .= '<script type="text/javascript" src="'.$file.'"></script>'.PHP_EOL;
            }else{
                $retorno .= '<script type="text/javascript" src="'.base_url("$folder/$file.js").'"></script>'.PHP_EOL;
            }
        }
        return $retorno;
    }else{
        return false;
    }
}

// verifica se o usuarios esta logado no sistema
function isLogged()
{
    $ci =& get_instance();
    $ci->load->library('session');
    $ci->load->driver('session');
    $userStatus = $ci->session->userdata('logged');
    if(!isset($userStatus) || $userStatus != true)
    {
        return false;
    }else{
        return true;
    }
}

// define uma mensagem para ser exibida na proxima tela carregada
function setMessage($id = 'msg', $msgTitle=null, $msg=null, $type = 'default')
{
    $ci =& get_instance();
    $ci->load->library('session');
    $ci->load->driver('session');
    $ci->session->set_flashdata('status',true);
    $ci->session->set_flashdata('id', $id);
    $ci->session->set_flashdata('msgTitle', $msgTitle);
    $ci->session->set_flashdata('msg',$msg);
    $ci->session->set_flashdata('type', $type);
}


 function getMessage($id, $print=true)
 {
     $ci =& get_instance();
     if($ci->session->flashdata($id)){
         if($print)
         {
             echo '<span id="message"
                 data-status="'   . $ci->session->flashdata('status') .'"
                 data-msgTitle="' . $ci->session->flashdata('msgTitle') . '"
                 data-msg="'      . $ci->session->flashdata('msg').'"
                 data-type="'     . $ci->session->flashdata('type') .'"></span>';
             return true;
         }else{
             return array(
                 'status'   => $ci->session->flashdata('status'),
                 'msgTitle' => $ci->session->flashdata('msgTitle'),
                 'msg'      => $ci->session->flashdata('msg'),
                 'type'     => $ci->session->flashdata('type')
             );
         }
     }else{ return false; }
 }
/* End of file functions_helper.php */
/* Location ./src/app/helpers/functions_helper.php */