<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Acceder y modificar CSS con JavaScript.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		div, #parra1{ 
			color: red;
			font-size: 12pt; /* fontSize en javascript*/
			font-weight: bold; /* fontWeight en javascript*/
		}

		.info{
			color:blue;
			font-size: 12pt;
			font-weight: bold;
		}
		span{
			font-size: 16pt;
			font-family: arial,helvetica,sans-serif;
			padding: 20px;
		}
	</style>
	<script type="text/javascript">
		function alternar(){
			var miElemento=document.getElementById("id2");
			if(miElemento.style.backgroundColor=='red'){
				miElemento.style.backgroundColor='yellow';
				miElemento.style.color='black';
			}
			else{
				miElemento.style.backgroundColor='red';
				miElemento.style.color='white';
			}
		}
		window.onload=function(){
			document.getElementById("btn1").onclick=alternar;
		}
	</script>
</head>
<body>
	<!Como usar javascript para acceder y modificar codigo css>

	<span id="id2">Bienvenido a mi sitio WEB</span>
	<input type="button" id="btn1" value="Cambiar"/>
	<br><br>
	<div id="id1" style="width:200px;">Bienvenido a mi WEB</div>
	<script type="text/javascript">
		var miNodo=document.getElementById("id1");
		alert(miNodo.style.width);
	</script>
	<p id="parra1">Este texto esta en rojo</p>
	<div>Este texto tambien esta en rojo</div>

	<p class="info">Este texto esta en azul</p>
	<h1 class="info">Este texto tambien esta en azul</h1>

	<p style="color:red; font-size:12px">Lea las normas antes de seguir</p>
</body>
</html>