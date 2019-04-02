function AbrirVentana(pagina, parametros, nombre, pancho, palto){
	wancho = (screen.width - pancho)/2;
	walto = (screen.height - palto)/2;
	window.open(pagina+"?"+parametros,nombre,"height="+palto+",width="+pancho+",top="+walto+",left="+wancho+",toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1");
}