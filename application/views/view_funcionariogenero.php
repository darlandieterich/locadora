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
     	<li ><a href="<?php echo base_url() ?>funcionariogenero" class="active">Generos</a></li> 
     	<li ><a href="funcionarioemprestimo" class="">Emprestimos</a></li> 
    </ul>	
	<div id="body" style="padding-top:10px">		
		<div class="bloco">
			<div class="linha">
				<div class="celula">
					<form action="<?php echo base_url()."funcionariogenero/gravaGenero"?>" method="POST">				
						<div class="linha">
							<div class="celula">Nome</div>
							<div class="celula"><input type="text" name="gen_nome"/></div>
						</div>
						<div class="linha">
							<div class="celula"></div>
							<div class="celula"><input type="submit" value="Enviar"> <input type="reset" value="Limpar"></div>
						</div>							
					</form>
				</div>
				<div class="celula" style="padding-left:20px">
<?php
		foreach ($genero as $campo) {
			echo '<div class="linha">';
			echo '<div class="celula">'.$campo->gen_nome.'</div>';
			echo '<div class="celula"><a href="'.base_url().'funcionariogenero/carregaGenero/'.$campo->gen_cod.'">Editar</a></div>';
			echo '<div class="celula"><a href="'.base_url().'funcionariogenero/excluiGenero/'.$campo->gen_cod.'">Excluir</a></div>';			
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