<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Crear Código JavaScript dinámicamente</title>
	<script type="text/javascript">

	/*Codigo al vuelo: crearemos codigo en una pagina ya cargada.
	createElement(): nos permite crear un elemento HTML <script>
	Ejemplo:
	createElement()

	var scr=document.createElement("script");
	scr.setAttribute("src","nuevoScript.js");
	document.head.appendChild(scr)

	src.onload=function(){
	...cosas que se deben hacer cuando el nuevo codigo fuente
	se ha cargado
	}
	*/
	</script>
	<script src="menu.js"></script>
    <script>window.onload = hacerMenu;</script>
</head>
<body>
<h1>Juego de tronos (serie de televisión)</h1>
    <h2>Argumento</h2>
    <p>Juego de tronos sigue las múltiples líneas argumentales de 
    Canción de hielo y fuego. La mayor parte de la historia tiene 
    lugar en Poniente, un continente ficticio donde las estaciones 
    pueden durar años, y se centra en las violentas luchas dinásticas
     que surgen entre varias familias nobiliarias por el control del 
     Trono de Hierro..</p>
    <h2>Temporadas</h2>
    <p>De momento se han desarrollado cinco temporadas: La primera, 
    con el nombre de Juego de Tronos, se emitió en la primavera de
     2011, la segunda, Choque de reyes, en la primavera de 2012, 
     la tercera, Tormenta de Espadas, primera parte, en la primavera
      de 2013, la cuarta, Tormenta de Espadas, segunda parte, en la 
      primavera de 2014, y en la actualidad se ha iniciado la Quinta
       Temporada, con el título de Festín de cuervos y Danza de
        dragones.</p>
    <h2>Reparto y personajes</h2>
    <p>A continuación se presenta un listado de los actores que han 
    figurado en el reparto principal de la serie durante alguna de 
    sus temporadas, así como el personaje que interpretó cada uno:.</p>
    <h2>Concepción</h2>
    <p>El escritor George R. R. Martin, autor de la serie de novelas 
    Canción de hielo y fuego, recibió un par de propuestas para llevar
     su obra a la gran pantalla. Él se negó al considerar que, por su 
     extensión, no podría adaptarse bien a una película. También sopesó
     la posibilidad de realizar una serie de televisión, pero las 
     numerosas escenas de sexo y violencia supondrían un problema y 
     creyó que HBO era la única solución.[18] El 16 de enero de 2007,
      la revista Variety informó que la cadena de televisión había 
      adquirido los derechos de las novelas de Martin con la intención 
      de convertirlas en una serie y que David Benioff y D. B. Weiss
       serían sus guionistas y productores ejecutivos. Originalmente
        cada temporada abarcaría uno de los volúmenes de Canción de 
        hielo y fuego y todos los episodios serían escritos por Benioff
         y Weiss, excepto uno por temporada, que estaría en manos del 
         autor y quien también se desempeñaría como coproductor 
         ejecutivo.</p>
    <h2>Producción</h2>
    <p>El rodaje principal de la primera temporada dio comienzo el 26
     de julio de 2010.[28] Las localizaciones principales fueron el
      Paint Hall Studio de Belfast (Irlanda del Norte),[29] y Malta, 
      que sustituyó a Marruecos.[28] Carncastle,[30] Shane's Castle
      ,[31] Castle Ward,[32] Magheramorne[33] y Tollymore Forest 
      Park[31] en Irlanda del Norte, y Doune Castle en Escocia,[34] 
      fueron, además, otras localizaciones en las que se filmó el 
      episodio piloto en 2009.[35] Éste costó entre cinco y diez
       millones de dólares,[36] y la primera temporada completa 
       entre cincuenta y sesenta millones.</p>
    <h2>Nueva cabecera añadida</h2>
    <p>Esta es una nueva cabecera añadida, que incluye un párrafo 
    y que automáticamente aparecerá también en el Menú de la parte 
    superior</p>
</body>
</html>