// Funcion SCROLL de Menu Verde = 44B78B  Rojo = 8A303A
window.onscroll = function() {myFunction()};

function myFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById("menu_nav").style = "background-color: #8A303A !important; opacity: 0.8;";
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

//ZOOM
$(window).load(function() {
    $(document.body).css("zoom", 0.8); // zoom the page on DOMReady
    //document.body.style.MozTransform = "scale(0.8)";
});

// Fechas
$(function() {
	$("#fecha_final").datepicker();
	$("#fecha_final").datepicker( "option", "dateFormat", "yy-mm-dd" );
});

function confirmar() {
	if (!confirm("desea continuar?")) return false;
}




