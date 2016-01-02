<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uso de navigator</title>
	<style>
		td{border: 1px solid gray; padding: 3px 5px;}
	</style>
	<script>
		/*
		El objeto navigator nos provee informacion sobre el navegador mismo (chrome, explorer,firefox)
		*/
	</script>
</head>
<body>
	<script>
		document.write("<table>");
		document.write("<tr><td>appName</td><td>"+navigator.appName+"</td></tr>");
		document.write("<tr><td>appCodeName</td><td>"+navigator.appCodeName+"</td></tr>");
		document.write("<tr><td>appVersion</td><td>"+navigator.appVersion+"</td></tr>");
		document.write("<tr><td>language</td><td>"+navigator.language+"</td></tr>");
		document.write("<tr><td>cookieEnabled</td><td>"+navigator.cookieEnabled+"</td></tr>");
		document.write("<tr><td>cpuClass</td><td>"+navigator.cpuClass+"</td></tr>");
		document.write("<tr><td>onLine</td><td>"+navigator.onLine+"</td></tr>");
		document.write("<tr><td>platform</td><td>"+navigator.platform+"</td></tr>");
		document.write("<tr><td>No of Plugins</td><td>"+navigator.plugins.length+"</td></tr>");
		document.write("</table>");

	</script>
</body>
</html>