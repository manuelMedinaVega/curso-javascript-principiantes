<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hola mundo desde javascript</title>
</head>
<body>
	<script>
	//metodo alert: el navegador abre una ventana emergente
	//mostrando un mensaje y un boton ok, ademas impide que
	//el usuario pueda llevar acabo otra accion en el navegador
	//hasta que cierre la ventana
		alert(document.title);

	//metodo write: escribe los caracteres directamente en el
	//documento html
		document.write("Este es el mensaje");
		//document.write(alert("Hola mundo"));
		document.write(document.title)
	</script>
</body>
</html>