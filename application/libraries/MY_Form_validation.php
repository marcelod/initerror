<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    /**
    * constructor method
    */
    public function __construct($config = array())
    {
        parent::__construct($config);

        $this->_error_prefix = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>';
        $this->_error_suffix = '</div>';
    }
        
}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */