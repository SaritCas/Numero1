$(document).ready(function(){/*todo lo que estara adentro se ejecutará hasta que la pagina halla cargado*/
	$('.ir-arriba').click(function(){
		$('body,html').animate({
			scroolTop:'0px'
		} 300);/*velocidad para subir en milisegundos*/
	});
	$(window).scroll(function(){/*si el usuario no a bajado, no aparecera el boton*/
		if( $(this).scroolTop()>0){
			$('.ir-arriba').slideDown(300);
		}else{
			$('.ir-arriba').slideDown(300);
		}
	});
});