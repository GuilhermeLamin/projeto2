$(document).ready(function(){
	$(".tab").click(function(){
		var id;
		/*Pegar id de quem clicou*/
		id = $(this).attr('id');

		/*Esconder todos os conteudos*/
		$('.conteudo').addClass('escondido');

		/*Aparecer o conteudo relativo a tab clicada*/
		$("."+id).removeClass('escondido');

		/*Tirar o status de ativo das tabs*/
		$(".tab").removeClass('ativo');

		/*Manter somente a tab clicada como ativo*/
		$("#"+id).addClass('ativo');
	})
})



$(document).ready(function(){

	$(".clique").click(function(){
		$(".azul").toggleClass("escondido");

  $(".clique-info").click(function(){
  	$('.info-professor').toggleClass("escondido");
  	if($('.clique info').html()=='<b>Fechar</b>'){
  		$('clique-info').html("<b>Mostrar Informações</b>");

  	}else{
  		$('.clique-info').html("<b>Fechar</b>");
  	}
  })