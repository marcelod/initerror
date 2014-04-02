<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['titulo'] = 'Home';

		$this->load->view('default/topo', $data);
		$this->load->view('home');
		$this->load->view('default/rodape');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */