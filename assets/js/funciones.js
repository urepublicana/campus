// Funcion SCROLL de Menu Rojo = D03954
window.onscroll = function() {myFunction()};
function myFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		$("#menu_nav").addClass("menu_scroll");
		$("#redes").addClass("redes_scroll");
	} else {
		$("#menu_nav").removeClass("menu_scroll");
		$("#redes").removeClass("redes_scroll");
	}
}

var var_cambio = setInterval(cambio, 6000);
function cambio(){
	var frase1 =  document.getElementById("frase1");
	var frase2 =  document.getElementById("frase2");
	if (frase2.className == "no_ver"){
		frase2.className = "fadeIn";
		frase1.className = "no_ver";
	}else{
		frase2.className = "no_ver"
		frase1.className = "fadeIn"
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


// AYUDA 
function ver_check(){
	$("#verificado").removeClass("ocultar").addClass("mostrar slideUp");
	$('html, body').stop().animate({
		scrollTop: jQuery("#botones").offset().top
	}, 1500);
}


function campus(){
	//var div_enlaces =  document.getElementById("enlaces_campus");
	$("#enlaces_campus").removeClass("ocultar").addClass("mostrar fadeIn");
	$('html, body').stop().animate({
		scrollTop: jQuery("#img_campus").offset().top
	}, 1500);
	//alert("esta")
}

$(document).ready(function() {
    $('.ancla').click(function(){
        var link = $(this);
        var anchor  = link.attr('href');
         $('.cont_campus').addClass( "ocultar" );
        $(anchor).removeClass( "ocultar" ).addClass( "mostrar espacio" );
        $('html, body').stop().animate({
            scrollTop: jQuery(anchor).offset().top
        }, 1500);
        return false;
    });
});



