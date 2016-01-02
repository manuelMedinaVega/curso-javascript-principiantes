<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alcance de variables</title>
	<script>
		var total="Esta variable es global";
		function agregarImpuesto(subtotal, tasaImpuesto){
			var total=subtotal*(1+(tasaImpuesto/100)); //variable local
			return total;
		}
	</script>
</head>
<body>
	<script>
		var valorFactura=agregarImpuesto(450,20);
		alert(valorFactura);
		alert(total);
	</script>
</body>
</html>