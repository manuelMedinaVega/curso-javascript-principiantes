<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pasar argumentos a funciones</title>
	<script>
		//Se aconseja poner el codigo con funciones en el head
		function cubo(x){
			alert(x*x*x);
		}
		function areaRect(a,b){
			alert(a*b);
		}
	</script>
</head>
<body>
	<script>
		var a=5;
		cubo(a)
		areaRect(a,10);
	</script>
</body>
</html>