<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Locadora Master</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/estilo.css" />
</head>
<body>
<?php $this->load->view('layout/cabecalho'); ?>
<div id="container">	
    <ul id="tabmenu">
        <li ><a href="<?php echo base_url() ?>masterprincipal" class="active">Principal</a></li> 
        <li ><a href="<?php echo base_url() ?>masterfilmes" class="">Filmes</a></li> 
        <li ><a href="<?php echo base_url() ?>mastergenero" class="">Categorias</a></li> 
        <li ><a href="<?php echo base_url() ?>masterlancamentos" class="">Lançamentos</a></li> 
        <li ><a href="<?php echo base_url() ?>mastercliente" class="">Cliente</a></li>
        <li ><a href="<?php echo base_url() ?>funcionarioprincipal" class="">Administrador</a></li>        
    </ul>	
	<div id="body">
		principal
	</div>
	<?php $this->load->view('layout/rodape'); ?>
</div>
</body>
</html>