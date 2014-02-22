$(document).ready(function(){
	$('.abrePop').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('.contentFicha').fadeIn();
		$('.overlayFicha').fadeIn();
		$('.contentFicha').height($('#fichaInscricao').height());
		$('.overlayFicha').height($(document).height());
		$('.overflow-loader').height($('#fichaInscricao').height());
		$('.cont-msg-success').height($('#fichaInscricao').height());
	});
	$('a[rel="como_funciona"]').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('.contentHowToWork').fadeIn();
		$('.overlayFicha').fadeIn();
		$('.contentHowToWork').height($('.contentHowToWork img').height());
		$('.overlayFicha').height($(document).height());
	});
	$('.bt_fechar').click(function(){
		$('.contentFicha').fadeOut();
		$('.overlayFicha').fadeOut();
		$('.contentHowToWork').fadeOut();
	});
	$('.shareFace').click(function(e){
		e.preventDefault();
		e.stopPropagation();
    	window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436');
     	return false;
	});
	$('#cpf').mask('999.999.999-99');
	$('#cep').mask('99.999-999');
	$('#telefone, #celular').mask('(99) 9999-9999');
	$('form').validate({
		errorElement: "span",
		rules: {
			nome: {
				required: true
			},
			cpf: {
				required: true
			},
			polo: {
				required: true
			},
			curso1: {
				required: true
			},
			endereco: {
				required: true
			},
			numero: {
				required: true
			},
			bairro: {
				required: true
			},
			cep: {
				required: true
			},
			cidade: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			celular: {
				required: true
			}
		},
		messages: {
			nome: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			cpf: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			polo: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			curso1: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			endereco: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			numero: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			bairro: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			cep: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			cidade: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			},
			email: {
				required: "Este campo &eacute; obrigat&oacute;rio!",
				email: "Preencha o e-mail de forma correta!"
			},
			celular: {
				required: "Este campo &eacute; obrigat&oacute;rio!"
			}
		},
		submitHandler: function(form){
			if(!$('.agree').is(':checked')){
				alert('Você deve aceitar os termos do regulamento');
			} else {
				var queryString = $('form').formSerialize();
				$.ajax({
					url: 	'envia-ficha.php',
					type: 	'post',
					data: 	queryString,
					beforeSend: function(){
    					$('.cont-loader').fadeIn();
  					},
  					success: function(txt){
  						if(txt == "success"){
							$('.cont-loader').fadeOut();
							$('.cont-msg-success').fadeIn();
						} else {
							alert(txt);
							$('.cont-loader').fadeOut();
						}
  					}
				});
			}
		}
	});
});

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-48166414-1', 'unoparead.com.br');
ga('send', 'pageview');