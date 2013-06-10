// JavaScript Document
$(function(){
		
	$("ul#tabmenu a").click(function(){
	
		pagina = "./"+$(this).attr('href');
	
		$('ul#tabmenu a').removeClass('active');///remove a classe de todos os links dentro da tag ul#tabmenu
		$(this).addClass('active');///adiciona para 'esse' elemento a classe active
				
	})
})