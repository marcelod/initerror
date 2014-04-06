<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Migrations extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $ret = $this->exec_func('current');
        echo $ret;
    }

    public function version($id = NULL)
    {
        if(is_null($id)) die("<p>Informe o n&uacute;mero da vers&atilde;o.</p>");
        
        $ret = $this->exec_func('version', $id);
        echo $ret;
    }

    private function exec_func($func, $id = NULL)
    {
        $this->load->library('migration');

        if ( ! $this->migration->{$func}($id) )
        {
            return $this->migration->error_string();
        }

        return "<p>Migra&ccedil;&atilde;o bem sucedida!</p>";        
    }

}