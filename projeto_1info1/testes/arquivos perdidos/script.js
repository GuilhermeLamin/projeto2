$(document).ready(function(){


	$(".clique").click(function(){
		$('.blue').toggleClass("escondido");

	})


	$(".info").click(function(){
		$('.DP').toggleClass("escondido");
		if($('.info').html()=='<b>Fechar</b>'){
			$('.info').html("<b>Informações</b>");
		}else{
			$('.info').html("<b>Fechar</b>");			
		}

		})


})
