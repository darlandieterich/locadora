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
		<div class="linha">
				<div class="celula">
					<form action="<?php echo base_url()."funcionariofilmes/atualizaFilme"?>" method="POST">
					<input type="hidden" name="fil_cod" value="<?php echo $filme[0]->fil_cod ?>"/>								
						<div class="linha">
							<div class="celula">Nome</div>
							<div class="celula"><input type="text" name="fil_nome" value="<?php echo $filme[0]->fil_nome ?>"/></div>
						</div>
						<div class="linha">
							<div class="celula">Genero</div>
							<div class="linha">
								<select name="gen_cod">
								<option value="<?php echo $filme[0]->gen_cod ?>">
<?php 
	foreach ($genero as $campo) {		
		if ($filme[0]->gen_cod == $campo->gen_cod) {
			echo $campo->gen_nome;
		}
	}
 ?>
								</option>
								<option value="<?php echo $filme[0]->gen_cod ?>">------------</option>
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
								<textarea name="fil_sinopse" rows="4"><?php echo $filme[0]->fil_sinopse ?></textarea>
							</div>
						</div>
						<div class="linha">
							<div class="celula">Autor</div>
							<div class="celula"><input type="text" name="fil_autor" value="<?php echo $filme[0]->fil_autor ?>"/></div>
						</div>
						<div class="linha">
							<div class="celula">Duração</div>
							<div class="celula">
							<input type="time" name="fil_duracao" value="<?php echo $filme[0]->fil_duracao ?>"/>
							</div>
						</div>
						<div class="linha">
							<div class="celula">Idade</div>
							<div class="celula"><input type="text" name="fil_idade" value="<?php echo $filme[0]->fil_idade ?>"/></div>
						</div>
						<div class="linha">
							<div class="celula">Linguagem</div>
							<div class="celula"><input type="text" name="fil_linguagem" value="<?php echo $filme[0]->fil_linguagem ?>"/></div>
						</div>
						<div class="linha">
							<div class="celula">Valor</div>
							<div class="celula"><input type="number" step="any" name="fil_valor" value="<?php echo $filme[0]->fil_valor ?>"/></div>
						</div>						
						<div class="linha">
							<div class="celula">Data lançamento</div>
							<div class="celula"><input type="date" name="fil_data_lancamento" value="<?php echo $filme[0]->fil_data_lancamento ?>"/></div>
						</div>
						<div class="linha">
							<div class="celula">Midia</div>
							<div class="celula"><input type="text" name="fil_midia" value="<?php echo $filme[0]->fil_midia ?>"/></div>
						</div>						
						<div class="linha">
							<div class="celula">Lancamento?</div>
							<div class="celula">
<?php 
	if ($filme[0]->fil_lancamento_situacao == 's')
	{
		echo '<input type="radio" name="fil_lancamento_situacao" value="s" checked>Sim';
		echo '<input type="radio" name="fil_lancamento_situacao" value="n">Não';
	}else
	{
		echo '<input type="radio" name="fil_lancamento_situacao" value="s" >Sim';
		echo '<input type="radio" name="fil_lancamento_situacao" value="n" checked>Não';
	}
 ?>
							</div>
						</div>
						<div class="linha">
							<div class="celula">Status</div>
							<div class="celula">
<?php 
	if ($filme[0]->fil_status == 'v')
	{
		echo '<input type="radio" name="fil_status" value="v" checked>Vago';
		echo '<input type="radio" name="fil_status" value="o">Ocupado';
	}else
	{
		echo '<input type="radio" name="fil_status" value="v">Vago';
		echo '<input type="radio" name="fil_status" value="o" checked>Ocupado';
	}
 ?>
							</div>
						</div>

						<div class="linha">
							<div class="celula"></div>
							<div class="celula"><input type="submit" value="Editar"> <input type="reset" value="Limpar"></div>
						</div>							
					</form>
				</div>							
		</div>
	</div>
	
<?php $this->load->view('layout/rodape'); ?>	
</div>

</body>
</html>