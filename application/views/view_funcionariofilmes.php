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
     	<li ><a href="<?php echo base_url() ?>funcionariofilmes" class="active">Filmes</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionariogenero" class="">Generos</a></li> 
     	<li ><a href="<?php echo base_url() ?>funcionarioemprestimo" class="">Emprestimos</a></li> 
    </ul>
	<div id="body">
<?php 
	if (!empty($sucesso)) {
		echo '<strong style="color:green;font-size:15px">'.$sucesso.'</strong>';
	}
	if (!empty($erro)) {
		echo '<strong style="color:red;font-size:15px">'.$erro.'</strong>';
	}
?>
		<div class="linha">
				<div class="celula">
						<form method="post" action="funcionariofilmes/gravaFilme" enctype="multipart/form-data" />
						<div class="linha">
							<div class="celula">Nome</div>
							<div class="celula"><input type="text" name="fil_nome"/></div>
						</div>
						<div class="linha">
							<div class="celula">Genero</div>
							<div class="celula">
								<select name="gen_cod">
<?php 
	foreach ($genero as $campo) {
		echo '<option value="'.$campo->gen_cod.'">'.$campo->gen_nome.'</option>';
	}
 ?>
								</select>
							</div>
						</div>
						<div class="linha">
							<div class="celula">Sinopse</div>
							<div class="celula">
								<textarea name="fil_sinopse" rows="4"></textarea>
								</div>
						</div>
						<div class="linha">
							<div class="celula">Autor</div>
							<div class="celula"><input type="text" name="fil_autor"/></div>
						</div>
						<div class="linha">
							<div class="celula">Duração</div>
							<div class="celula">
							<input type="time" name="fil_duracao">
							</div>
						</div>
						<div class="linha">
							<div class="celula">Idade</div>
							<div class="celula"><input type="text" name="fil_idade"/></div>
						</div>
						<div class="linha">
							<div class="celula">Linguagem</div>
							<div class="celula"><input type="text" name="fil_linguagem"/></div>
						</div>
						<div class="linha">
							<div class="celula">Valor</div>
							<div class="celula"><input type="number" step="any" name="fil_valor"/></div>
						</div>						
						<div class="linha">
							<div class="celula">Data lançamento</div>
							<div class="celula"><input type="date" name="fil_data_lancamento"/></div>
						</div>
						<div class="linha">
							<div class="celula">Midia</div>
							<div class="celula"><input type="text" name="fil_midia"/></div>
						</div>
						<div class="linha">
							<div class="celula">Figura</div>
							<div class="celula">
								<input type="file" name="userfile" size="20" />
							</div>
						</div>
						<div class="linha">
							<div class="celula">Lancamento?</div>
							<div class="celula">
							<input type="radio" name="fil_lancamento_situacao" value="s" checked>Sim
<input type="radio" name="fil_lancamento_situacao" value="n">Não
							</div>
						</div>

						<div class="linha">
							<div class="celula"></div>
							<div class="celula"><input type="submit" value="Enviar"> <input type="reset" value="Limpar"></div>
						</div>							
					</form>
				</div>
				<div class="celula" style="padding-left:20px">
<?php
		foreach ($filme as $campo) {
			echo '<div class="linha">';
			echo '<div class="celula">'.$campo->fil_nome.'</div>';
			echo '<div class="celula"><a href="'.base_url().'funcionariofilmes/carregaFilme/'.$campo->fil_cod.'">Editar</a></div>';
			echo '<div class="celula"><a href="'.base_url().'funcionariofilmes/excluiFilme/'.$campo->fil_cod.'">Excluir</a></div>';			
			echo '</div>';
		}
?>				
				</div>				
		</div>
	</div>
	
<?php $this->load->view('layout/rodape'); ?>	
</div>

</body>
</html>