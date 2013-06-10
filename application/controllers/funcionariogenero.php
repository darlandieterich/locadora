<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class funcionariogenero extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_genero','genero');
	}		
	public function index()
	{
		$data['genero'] = $this->genero->listaGenero();
		$this->load->view('view_funcionariogenero',$data);
	}
	public function gravaGenero()
	{	
		$this->genero->cadastraGenero();		
		redirect(base_url()."funcionariogenero");		
	}
	public function carregaGenero($codigo = NULL)
	{
		$codigo = $this->uri->segment(3);
		$data['genero'] = $this->genero->listaGenero($codigo);
		$this->load->view('view_funcionariogeneroedicao.php',$data);
	}
	public function atualizaGenero($codigo = NULL)
	{		
		$codigo = $this->input->post('gen_cod');
		$this->genero->editaGenero($codigo);
		redirect(base_url()."funcionariogenero");		
	}
	public function excluiGenero($codigo = NULL)
	{		
		$codigo = $this->uri->segment(3);
		$this->genero->removeGenero($codigo);		
		redirect(base_url()."funcionariogenero");
	}
}
