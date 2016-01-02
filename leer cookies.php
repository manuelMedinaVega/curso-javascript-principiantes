<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Leer Cookie</title>
	<script type="text/javascript">
		/*Para leer una cookie se hace uso del metodo split() el cual
		toma un string y lo divide a partir de un caracter que se le 
		pasa como argumento
		var trozos=document.cookie.split(';')
		El metodo charAt() nos devuelve un caracter por el index
		que se pasa como argumento
		El metodo indexOf() nos devuelve el primer caracter del string
		que se le pase como argumento
		el metodo substring() nos devuelve el trozo de string contenido
		entre dos indices que se pasan como argumentos
		Con estos 3 metodos podemos acceder a la parte de la cookie que queremos
		*/
	</script>
	<script type="text/javascript">
		function setCookie(cname,cvalue,exdays) {
			var d=new Date();
			d.setTime(d.getTime()+(exdays*24*60*60*1000));
			var expires="expires="+d.toUTCString();
			document.cookie=cname+"="+cvalue+";"+"expires";		
		}

		function getCookie(cname){
			var name=cname+"=";
			var ca=document.cookie.split(';');//Las cookies en document estan separadas por ;
			for(var i=0;i<ca.length;i++){
				var c=ca[i];
				while(c.charAt(0)==' ') c=c.substring(1);
				if(c.indexOf(name)==0) return unescape(c.substring(name.length, c.length));

			}
			return "";
		}
		setCookie("nombre","pablo",5);
		setCookie("estatus","activo",3);
		setCookie("preferencias","basicas",5);
		var leer=getCookie("estatus");

	</script>
</head>
<body>
	<script type="text/javascript">
		document.write("El valor de la cookie estatus es: "+leer);
	</script>
</body>
</html>