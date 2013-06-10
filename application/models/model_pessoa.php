<?php
class Model_pessoa extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function listaPessoa($codigo = NULL)
	{
		if (!isset($codigo)) {
			$query = $this->db->get('pessoa');
			return $query->result();	
		}
		else
		{
			$this->db->where('pes_cod',$codigo);
			$query = $this->db->get('pessoa');
			return $query->result();	
		}
	}
	function cadastraPessoa()
	{
		$this->pes_nome = $_POST['pes_nome'];
		$this->pes_cpf = $_POST['pes_cpf'];
		$this->pes_cidade = $_POST['pes_cidade'];
		$this->pes_endereco = $_POST['pes_endereco'];
		$this->pes_usuario = $_POST['pes_usuario'];
		$this->pes_senha = $_POST['pes_senha'];
		$this->pes_tipo = $_POST['pes_tipo'];//c = cliente ou f = funcionario
		$this->pes_status = 'a';
		$this->db->insert('pessoa',$this);
	}
	function editaPessoa($codigo = NULL)
	{
		$this->pes_nome = $_POST['pes_nome'];
		$this->pes_cpf = $_POST['pes_cpf'];
		$this->pes_cidade = $_POST['pes_cidade'];
		$this->pes_endereco = $_POST['pes_endereco'];
		$this->pes_usuario = $_POST['pes_usuario'];
		$this->pes_senha = $_POST['pes_senha'];
		$this->pes_tipo = $_POST['pes_tipo'];//c = cliente ou f = funcionario
		$this->pes_status = $_POST['pes_status'];
		$this->db->update('pessoa',$this,array('pes_cod' => $codigo));
	}
	function removePessoa($codigo = NULL)
	{
		$this->db->where('pes_cod',$codigo);
		$this->db->delete('pessoa');
	}
}