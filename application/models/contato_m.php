<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato_m extends CI_Model {

	public function save($dados = array())
	{
		if(is_array($dados))
		{
			$this->db->insert('contato', $dados);			
		}

		return TRUE;
	}

}

/* End of file contato_m.php */
/* Location: ./application/models/contato_m.php */