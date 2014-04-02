<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos_m extends CI_Model {

	public function getAll()
	{
		return $this->db->order_by('nome asc')->get('produto')->result();
	}

}

/* End of file produtos_m.php */
/* Location: ./application/models/produtos_m.php */