<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class funcionariofilmes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_filme','filme');
		$this->load->model('Model_genero','genero');
		$this->load->helper(array('form', 'url','file'));
	}		
	public function index()
	{
		$data['filme'] = $this->filme->listaFilme();
		$data['genero'] = $this->genero->listaGenero();
		$data['sucesso'] = "";
		$data['erro'] = "";
		$this->load->view('view_funcionariofilmes',$data);
	}
	public function gravaFilme()
	{	
		///processo do upload
		$nome_imagem = time();
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nome_imagem;			
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload())
		{
			$extensao = $this->upload->data();
			$nomeextensao = $nome_imagem.$extensao['file_ext'];
			
			//processo do criação da mini
			$config['image_library'] = 'gd2';
			$config['source_image']	= './images/'.$nomeextensao;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']	 = 75;
			$config['height']	= 50;
			$config['new_image'] = './images/mini/'.$nomeextensao;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();

			///processo de cadastro dos dados
			$_POST['fil_img'] = $nomeextensao;
			$this->filme->cadastraFilme();
			$data['sucesso'] = "Upload com sucesso";
			$data['filme'] = $this->filme->listaFilme();
			$data['genero'] = $this->genero->listaGenero();
			//redirect(base_url()."funcionariofilmes");
			$this->load->view('view_funcionariofilmes',$data);
		}else
		{
			$data['filme'] = $this->filme->listaFilme();
			$data['genero'] = $this->genero->listaGenero();
			$data['erro'] = "Houve um erro no upload!";
			//redirect(base_url()."funcionariofilmes");
			$this->load->view('view_funcionariofilmes',$data);
		}
		
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