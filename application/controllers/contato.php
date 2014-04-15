<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index()
	{
		$data['titulo'] = 'Contato';

		$this->load->view('default/topo', $data);
		$this->load->view('contato');
		$this->load->view('default/rodape');
	}


	public function enviar()
	{
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');		
		$this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required|min_length[3]|nl2br');

		if ($this->form_validation->run() === FALSE)
		{
			$this->index();
		}
		else
		{
			$dados = array(
	            'nome'    	=> $this->input->post('nome'),
	            'email'     => $this->input->post('email'),
	            'mensagem'  => $this->input->post('mensagem'),
	            'data'		=> date('Y-m-d H:i:s')
	        );

			$this->load->model('contato_m');
			$this->contato_m->save($dados);

			// prepara e envia o e-mail
	        $this->load->library('email');
	        
	        $this->email->from(EMAIL_FROM, NAME_FROM);
	        $this->email->to($dados['email']);
	        
	        $this->email->subject('Contato do site: ' . SITE_NAME);
	        
	        $message = $this->load->view('email/contato', $dados, TRUE);
	        $this->email->message($message);
	        
	        if( ! $this->email->send() )
	        {
	            log_message('error', "E-mail de contato não enviado");
	        }
	            
			redirect('contato/sucesso', 'refresh');
		}
	}

	public function sucesso()
	{
		$data['titulo'] = 'Contato - Sucesso';

        $this->load->view('default/topo', $data);
        $this->load->view('contatoSucesso');
        $this->load->view('default/rodape');
	}

}

/* End of file contato.php */
/* Location: ./application/controllers/contato.php */