<!DOCTYPE html>
<html>
<head>
	<title>Cambiar clases con javascript</title>
	<meta charset="UTF-8">
	<style type="text/css">
		.classA{
			width: 180px;
			border: 3px solid black;
			background-color: white;
			color: red;
			font: normal 24px arial;
			padding: 20px;
		}
		.classB{
			width: 180px;
			border: 3px dotted white;
			background-color: black;
			color: yellow;
			font: italic bold 24px "Times New Roman";
			padding: 20px;
		}
	</style>
	<script type="text/javascript">
		function cambiarClass(){
			var myElement=document.getElementById("id1");
			if(myElement.className=="classA"){
				myElement.className="classB";
			}
			else{
				myElement.className="classA";
			}
		}
		window.onload=function(){
			document.getElementById("btn1").onclick=cambiarClass;
		}
	</script>
</head>
<body>
	<div id="id1">Terminamos</div>
	<input type="button" id="btn1" value="Cambiar"/>
</body>
</html>