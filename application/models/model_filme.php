<?php
class Model_filme extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	function listaFilme($codigo = NULL)
	{   
		if (!isset($codigo)) {
			$query = $this->db->get('filme');
			return $query->result();	
		}
		else
		{
			$this->db->where('fil_cod',$codigo);
			$query = $this->db->get('filme');
			return $query->result();	
		}
	}
	function cadastraFilme()
	{
		$this->gen_cod = $_POST['gen_cod'];
		$this->fil_nome = $_POST['fil_nome'];
		$this->fil_sinopse = $_POST['fil_sinopse'];
		$this->fil_autor = $_POST['fil_autor'];
		$this->fil_duracao = $_POST['fil_duracao'];
		$this->fil_idade = $_POST['fil_idade'];
		$this->fil_linguagem = $_POST['fil_linguagem'];
		$this->fil_valor = $_POST['fil_valor'];
		$this->fil_data_lancamento = $_POST['fil_data_lancamento'];
		$this->fil_midia = $_POST['fil_midia'];
		$this->fil_img = $_POST['fil_img'];
		$this->fil_status = "v";//vago
		$this->fil_lancamento_situacao = $_POST['fil_lancamento_situacao'];
		$this->db->insert('filme',$this);
	}
	function editaFilme($codigo = NULL)
	{
		$this->gen_cod = $_POST['gen_cod'];
		$this->fil_nome = $_POST['fil_nome'];
		$this->fil_sinopse = $_POST['fil_sinopse'];
		$this->fil_autor = $_POST['fil_autor'];
		$this->fil_duracao = $_POST['fil_duracao'];
		$this->fil_idade = $_POST['fil_idade'];
		$this->fil_linguagem = $_POST['fil_linguagem'];
		$this->fil_valor = $_POST['fil_valor'];
		$this->fil_data_lancamento = $_POST['fil_data_lancamento'];
		$this->fil_midia = $_POST['fil_midia'];		
		$this->fil_status = $_POST['fil_status'];
		$this->fil_lancamento_situacao = $_POST['fil_lancamento_situacao'];
		$this->db->update('filme',$this,array('fil_cod' => $codigo));
	}
	function removeFilme($codigo = NULL)
	{
		$this->db->where('fil_cod',$codigo);
		$this->db->delete('filme');
	}	
}