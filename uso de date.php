<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>El uso del objeto date</title>
	<script>
		function diLaFechaYHora(){
			var salida="";
			var ahora=new Date();
			var mes=new Array();
				mes[0]="Enero";
				mes[1]="Febrero";
				mes[2]="Marzo";
				mes[3]="Abril";
				mes[4]="Mayo";
				mes[5]="Junio";
				mes[6]="Julio";
				mes[7]="Agosto";
				mes[8]="Setiembre";
				mes[9]="Octubre";
				mes[10]="Noviembre";
				mes[11]="Diciembre";
			var m=mes[ahora.getMonth()];
			salida+="<br />Fecha: "+ahora.getDate();
			salida+="<br/>Mes: "+m;
			salida+="<br/>Año: "+ahora.getFullYear();
			salida+="<br/>Horas: "+ahora.getHours();
			salida+="<br/>Minutos: "+ahora.getMinutes();
			salida+="<br/>Segundos: "+ahora.getSeconds();
			document.getElementById("div1").innerHTML=salida;
		}
		var miFecha=new Date(); //Captura la fecha actual
	</script>
</head>
<body>
	La Fecha y hora actuales son:<br/>
	<div id="div1"></div>
	<script>
		diLaFechaYHora();
	</script>
	<input type="button" onclick="location.reload()" value="Actualizar" />
	<script>
		//Otras formas de definir una variable date
		//new Date(milliseconds) tiempo transcurrido desde el 1 enero de 1970
		//new Date(dateString)
		//new Date(year,month,day,hours,minutes,seconds,milliseconds)
		var fecha=new Date("September 24, 2015 11:41:00");
		document.write("<br>"+fecha);
		var fecha2=new Date(8620000);
		document.write("<br>"+fecha2);
		var fecha3=new Date(99,5,24);
		document.write("<br>"+fecha3);
		document.write("<br>fecha sin modificar: "+fecha3.getDate());
		fecha3.setDate(15);
		document.write("<br>fecha modificada: "+fecha3.getDate());

		var miFecha=new Date();
		document.write("<br>Creado: "+miFecha.toDateString()+" "+miFecha.toTimeString());
		miFecha.setDate(miFecha.getDate()+33); //Añade 33 dias a la fecha
		document.write("<br>Despues de aumentar 33 dias: "+miFecha.toDateString()+" "+miFecha.toTimeString());
	</script>
</body>
</html>