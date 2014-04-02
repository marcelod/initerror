<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function __construct()
    {
        parent::__construct();        
	}

	public function index()
	{
		$data['titulo'] = 'Produto';

		$this->load->model('produtos_m');
		$data['produtos'] = $this->produtos_m->getAll();

		$this->load->view('default/topo', $data);
		$this->load->view('produto', $data);
		$this->load->view('default/rodape');
	}


	public function listaItens($produto)
	{
		$data['titulo'] = 'Produto - ' . ucfirst($produto);

		$data['produto'] = $produto;

		$this->load->model('itens_produto_m');
		$data['itens'] = $this->itens_produto_m->get($produto);

		$this->load->view('default/topo', $data);
		$this->load->view('itensProduto', $data);
		$this->load->view('default/rodape');
	}

}

/* End of file produto.php */
/* Location: ./application/controllers/produto.php */