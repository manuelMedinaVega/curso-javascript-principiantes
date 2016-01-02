<!DOCTYPE html>
<html>
<head>
	<title>Ingredientes de una cookie</title>
	<meta charset="UTF-8">
	<script type="text/javascript">
	/*Atributo domain: le dice al navegador a que dominio pertenece la cookie
	cuando no se especifica su valor predeterminado es el del dominio
	de la pagina que configura la cookie
	Atributo path:  permite especificar un directorio donde este disponible
	la cookie, de modo determinado path es la raiz / y la cookie es valida para todo el dominio
	Atributo secure: indica que el navegador tiene que usar seguridad ssl
	cuando envia la cookie al servidor
	Atributo expires: fecha de caducidad de la cookie, despues de esa fecha la
	cookie se borra, debe estar en tiempo UTC,Si no se configura el valor de
	expires la cookie expirara al cerrar el navegador */

	//Creamos una cookie
	document.cookie="nombreUsuario=alfredo; expires=15/06/2013 00:00:00";
	//Otra forma
	var cookieDate=new Date(2013,05,15);
	document.cookie="nombreUsuario=alfredo;expires="+cookieDate.toUTCString();
	//Otra version usando escape
	var cookieDate=new Date(2013,05,15);
	var usuario="alfredo blanco";
	document.cookie="nombreUsuario="+escape(usuario)+";expires="+cookieDate.toUTCString();
	
	//funcion para crear cookies
	function createCookie(name,value,days,path,domain,secure){
		if(days){
			var date=new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires=date.toGMTString();
		}else var expires="";
		cookieString =name+"="+escape(value);
		if(expires) cookieString+="; expires="+expires;
		if(path) cookieString+=": path="+escape(path);
		if(domain) cookieString+="; domain="+escape(domain);
		if(secure) cookieString+="; secure";
		document.cookie=cookieString;
	}
	createCookie("nombreUsuario","Alfredo blanco",5);
	createCookie("pais","españa",5);
	createCookie("estatus","registrado",5);
	</script>
</head>

<body>
Comprueba las cookies para este dominio usando las herramientas de tu navegador
</body>
</html>