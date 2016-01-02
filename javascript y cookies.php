<!DOCTYPE html>
<html>
<head>
	<title>Uso de escape</title>
	<meta charset="UTF-8">
	<script type="text/javascript">
		/*Las cookies nos permiten almacenar y recuperar trozos
		de informacion en el navegador
		escape() sirve para almacenar datos que contienen caracteres
		especiales como , ; tab en una cookie*/
	</script>
</head>
<body>
	<script type="text/javascript">
		var str='Este es un, (corto) trozo de texto;';
		document.write(str+'<br/>'+escape(str));
	</script>
</body>
</html>