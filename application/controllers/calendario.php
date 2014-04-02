<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends CI_Controller {

	public function index()
	{

		$prefs['template'] = '{table_open}<table class="table table-bordered">{/table_open}';
		$prefs['show_next_prev'] = TRUE;
		
		$this->load->library('calendar', $prefs);
		
		$data['dados'] = array(
			'1'  => 'mentira',
			'7'  => 'fui...',
			'11'  => '...voltei'
		);

		$data['titulo'] = 'Calendário';

		$this->load->view('default/topo', $data);
		$this->load->view('calendario', $data);
		$this->load->view('default/rodape');
	}

}

/* End of file calendario.php */
/* Location: ./application/controllers/calendario.php */