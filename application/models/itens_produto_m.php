<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Itens_produto_m extends CI_Model {

	public function get($slug = '')
	{
		if($slug != '')
		{
			$query = $this->db
						->select('ip.id, ip.nome')
						->from('itens_produto ip')
						->join('produto p', 'p.id = ip.produto_id')
						->where('p.slug', $slug)
						->get();

			if($query->num_rows() > 0)
			{
				return $query->result();
			}
		}

		return array();
	}

}

/* End of file itens_produtos_m.php */
/* Location: ./application/models/itens_produtos_m.php */