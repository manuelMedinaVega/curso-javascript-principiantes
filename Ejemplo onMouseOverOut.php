<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejemplo onMouseOver y onMouseOut</title>
</head>
<body>
	
	<!-- Añadimos una imagen
	<img src="imagen.jpg" alt="imagen" onmouseover="alert('El puntero esta sobre la imagen')" onmouseout="alert('El puntero esta fuera de la imgen')">
	<img src="imagen.jpg" alt="imagen" onmouseover="src='imagen2.jpg'" onmouseout="src='imagen.jpg'">-->
	<img src="imagen.jpg" alt="imagen" onmouseover="this.src='imagen2.jpg'" onmouseout="this.src='imagen.jpg'">
</body>
</html>