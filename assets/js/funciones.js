// Funcion SCROLL de Menu Rojo = D03954
window.onscroll = function() {myFunction()};
function myFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById("menu_nav").style = "background-color: rgba(208, 57, 84, .8) !important;"; 
	} else {
		document.getElementById("menu_nav").style = "";
	}
}


// Funcion de ANIMACION Scroll
$(window).scroll(function() {
	$('#elem_1').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+700) {
			$(this).addClass("slideRight");
		}
	});

	$('#elem_2').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+700) {
			$(this).addClass("slideUp");
		}
	});


	$('#elem_3').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+700) {
			$(this).addClass("slideLeft");
		}
	});
});

function mostrar(id_campo, check){
	var x = document.getElementById(check).checked;
	if (x == true){
		document.getElementById(id_campo).type = 'text';
	}
	else{
		document.getElementById(id_campo).type = 'password';
	}
}

// Fechas
$(function() {
	$("#fecha_final").datepicker();
	$("#fecha_final").datepicker( "option", "dateFormat", "yy-mm-dd" );
});

function confirmar() {
	if (!confirm("Esta seguro que desea continuar")) return false;
}

function ver_check(){
	var div_verifica =  document.getElementById("verificado");
	if (div_verifica.style.display == "none"){
		div_verifica.style.display = "block";
	}else{
		div_verifica.style.display = "none";
	}
}
