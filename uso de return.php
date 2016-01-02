<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uso de return</title>
	<script>
		function cubo(x){
			return(x*x*x);
		}
		function areaCir(r){
			this.r=r;
			return (3.1416*(r*r));
		}
	</script>
</head>
<body>
	<script>
		var r=r;
		var resultado=areaCir(4);
		document.write("El area del circulo de radio "+r+ " es "+this.resultado);
	</script>
</body>
</html>