<?php
class Model_genero extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function listaGenero($codigo = NULL)
	{
		if (!isset($codigo)){	
			$this->db->order_by("gen_nome", "asc");
			$query = $this->db->get('genero');
			return $query->result();	
		}
		else
		{
			$this->db->where('gen_cod',$codigo);	
			$query = $this->db->get('genero');
			return $query->result();
		}
	}
	function cadastraGenero()
	{
		$this->gen_nome = $_POST['gen_nome'];
		$this->gen_status = "a";//aberto
		$this->db->insert('genero',$this);
	}
	function editaGenero($codigo = NULL)
	{
		$this->gen_nome = $_POST['gen_nome'];
		$this->gen_status = $_POST['gen_status'];
		$this->db->update('genero',$this,array('gen_cod' => $codigo));
	}
	function removeGenero($codigo = NULL)
	{
		$this->db->where('gen_cod',$codigo);
		$this->db->delete('genero');
	}
}