// Funcion SCROLL de Menu Rojo = D03954
window.onscroll = function() {myFunction()};
function myFunction() {
	var pagina = $("#logo_virtual").attr("title");
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		$("#menu_nav").addClass("menu_scroll");
		$("#redes").addClass("redes_scroll");
		$("#logo_virtual").attr("src", "../imgs/logo_virtual_2.png");
	} else {
		$("#menu_nav").removeClass("menu_scroll");
		$("#redes").removeClass("redes_scroll");
		if(pagina == "index"){
			$("#logo_virtual").attr("src", "../imgs/logo_virtual.png");
		}
	}
}


timer = setTimeout('temporizador()', 5000);
function temporizador() {
	$(document).ready(function() {
		$("#frase1").fadeOut(1500).delay(5000).fadeIn(1500);
		$("#frase2").fadeOut(1500).delay(6000).fadeIn(1500, function(){timer = setTimeout("temporizador()", 2000);
	});
	});
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




function confirmar() {
	if (!confirm("Esta seguro que desea continuar")) return false;
}


// AYUDA 
function ver_check(){
	$("#verificado").removeClass("ocultar").addClass("mostrar slideUp");
	$('html, body').stop().animate({
		scrollTop: jQuery("#help_ticket").offset().top
	}, 1500);
}


function campus(title){
	$('.iconos_campus').addClass("ocultar");
	$('.cont_campus').addClass("ocultar");
	$("#"+title).removeClass("ocultar").addClass("mostrar stretchRight");
	$('html, body').stop().animate({
		scrollTop: jQuery("#ciclista").offset().top
	}, 2000);
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

window.onload = navegador; 

function navegador(){
	
	var recomendacion_nav = "<a target='_blank' href='https://www.mozilla.org/es-ES/firefox/new/'><i class='fa fa-cloud-download'></i> Descargar Firefox</a> <br>"+
	"<a target='_blank' href='https://www.google.es/chrome/browser/desktop/'><i class='fa fa-cloud-download'></i> Descargar Google Chrome</a>";
	
	var navegador = navigator.userAgent;

	if (navigator.userAgent.indexOf('MSIE') !=-1) {
		$('#notifica_nav').removeClass("ocultar");
		$('.nube1').addClass("ocultar");

		//$("#notifica_nav").html("<img src='../imgs/explorer.png' class='img_ayuda' /><h5><i class='fa fa-minus-circle red'></i> Explorer</h5>"+recomendacion_nav);
	} 
	else if (navigator.userAgent.indexOf('Firefox') !=-1) {
		//$("#notifica_nav").html("<img src='../imgs/firefox.png' class='img_ayuda' /><h5>Firefox  <i class='fa fa-check-circle green'></i></h5>");
	} 
	else if (navigator.userAgent.indexOf('Chrome') !=-1) {
		//$("#notifica_nav").html("<img src='../imgs/chrome.png' class='img_ayuda' /><h5>Google Chrome <i class='fa fa-check-circle green'></i></h5>");
	} 
	else if (navigator.userAgent.indexOf('Opera') !=-1) {
		$('#notifica_nav').removeClass("ocultar");
		$('.nube1').addClass("ocultar");
		//$("#notifica_nav").html("<img src='../imgs/opera.png' class='img_ayuda' /><h5><i class='fa fa-minus-circle red'></i> Opera <h5>"+recomendacion_nav);
	} 
	else {
		$('#notifica_nav').removeClass("ocultar");
		$('.nube1').addClass("ocultar");
		//$("#notifica_nav").html("<img src='../imgs/desconocido.png' class='img_ayuda' /><h5><i class='fa fa-minus-circle red'></i> Navegador desconocido </h5>"+recomendacion_nav);
	}
}

function mostrar_nav(){
	var x = $("#mostrar_navegadores").hasClass("ocultar");
	if(x == true){
		$('#mostrar_navegadores').removeClass("ocultar");
	}else{
		$('#mostrar_navegadores').addClass("ocultar");
	}
}

function checkExt(e) {//use in a form event or ina input
	value=e.value;
	if( !value.match(/\.(jpg)|(gif)|(png)$/) ){//here your extensions
		alert("El archivo no es una Imagen");   //actions like focus, not validate...
		$("#boton_enviar").attr('disabled', true);
		$('#create_new').attr('action', 'index.php');
		$('#edit_new').attr('action', 'index.php');
	}
	else {//right extension
		$("#boton_enviar").attr('disabled', false);
		$('#create_new').attr('action', 'crud_noticia.php');
		$('#edit_new').attr('action', 'crud_noticia.php');
	}
}



