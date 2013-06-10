<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class funcionariofilmes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_filme','filme');
		$this->load->model('Model_genero','genero');
	}		
	public function index()
	{
		$data['filme'] = $this->filme->listaFilme();
		$data['genero'] = $this->genero->listaGenero();
		$this->load->view('view_funcionariofilmes',$data);
	}
	public function gravaFilme()
	{	
		$this->filme->cadastraFilme();		
		redirect(base_url()."funcionariofilmes");		
	}
	public function carregaFilme($codigo = NULL)
	{
		$codigo = $this->uri->segment(3);
		$data['filme'] = $this->filme->listaFilme($codigo);
		$data['genero'] = $this->genero->listaGenero();
		$this->load->view('view_funcionariofilmesedicao.php',$data);
	}
	public function atualizaFilme($codigo = NULL)
	{		
		$codigo = $this->input->post('fil_cod');
		$this->filme->editaFilme($codigo);
		redirect(base_url()."funcionariofilmes");		
	}
	public function excluiFilme($codigo = NULL)
	{		
		$codigo = $this->uri->segment(3);
		$this->filme->removeFilme($codigo);		
		redirect(base_url()."funcionariofilmes");
	}
}