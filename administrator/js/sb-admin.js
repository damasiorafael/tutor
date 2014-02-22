$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        //console.log($(this).width())
        if ($(this).width() < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    });

    if($('form')[0]){
	    $('form').validate({
			errorElement: "span",
			rules: {
				login: {
					required: true
				},
				password: {
					required: true
				}
			},
			messages: {
				login: {
					required: "Digite seu login"
				},
				password: {
					required: "Digite sua senha"
				}
			}
		});
	}

	if($('.tdCursos')[0]){
		newArray = [];
		$('.tdCursos').each(function(){
			var $this 	= $(this),
			arrayCursos	= $this.text().split(',');
			var tamArray = arrayCursos.length;
			for(var i = 0; i < tamArray; i++){
				if(arrayCursos[i] != '' && arrayCursos[i] != ' '){
					newArray.push(arrayCursos[i]+'<br />');
				}
			}
			$this.html(newArray.join(' '));
			newArray = [];
		});
	}
});