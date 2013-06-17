<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Área Administrativa</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/estilo.css" />	
</head>
<body>
<?php $this->load->view('layout/cabecalho'); ?>
<div id="container">
	<h1>Área do Funcionário!</h1>
	
	<ul id="tabmenu">
    	<li ><a href="<?php echo base_url() ?>funcionariopessoas" class="">Pessoas</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionariofilmes" class="">Filmes</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionariogenero" class="">Generos</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionarioemprestimo" class="active">Emprestimos</a></li> 
    </ul>	
	<div id="body" style="padding-top:10px">
		<div class="bloco">
			<div class="linha">
				<div class="celula">
					<form action="<?php echo base_url()."funcionarioemprestimo/adicionarFilme/".$this->uri->segment(3)."/".$this->uri->segment(4).""?>" method="POST">
						<input type="hidden" name="emp_cod" value="<?php echo $this->uri->segment(3) ?>">
					<div class="linha">
							<div class="celula">Filme</div>
							<div class="celula">
								<select name="fil_cod" required>
									<option value="">Selecione</option>
<?php 
	foreach ($filme as $campo) {
		echo '<option value="'.$campo->fil_cod.'">'.$campo->fil_nome.'</option>';
	}
 ?>
								</select>
							</div>
					</div>
					<div class="linha">
							<div class="celula"></div>
							<div class="celula"><input type="submit" value="Adicionar"> <input type="reset" value="Limpar"></div>
						</div>				
					</form>
				</div>
				<div class="celula" style="padding-left:20px">
<?php
		foreach ($filmes as $campo) {
			echo '<div class="linha">';
			echo '<div class="celula">'.$campo->fil_nome.'</div>';
			echo '<div class="celula"><a href="'.base_url().'funcionarioemprestimo/excluiEmprestimoFilme/'.$campo->emp_cod.'/'.$campo->fil_cod.'/'.$this->uri->segment(4).'">Excluir</a></div>';			
			echo '</div>';
		}
?>
				</div>				
			</div>
		</div>
	</div>
	
<?php $this->load->view('layout/rodape'); ?>	
</div>

</body>
</html>