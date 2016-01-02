function hacerMenu(){
	//Obtener todos los elementos cabecera H2
	var h2s=document.getElementsByTagName("h2");
	//crear un nuevo elemento pagina para el menu
	var menu=document.createElement("div");
	//crear un elemento UL y añadirlo al div menu
	var menuUl=document.createElement("ul");
	menu.appendChild(menuUl);
	//Iterarse a traves de las cabeceras h2 para agregarlas al menu
	for(var i=0;i<h2s.length;i++){
		//Obtener el nodo de texto del elemento h2
		var itemText=h2s[i].childNodes[0].nodeValue;
		//añadir un item de la lista
		var menuLi=document.createElement("li");
		//añadirlo a la lista menu
		menuUl.appendChild(menuLi);
		//El item lista contiene un enlace
		var menuLiA=document.createElement("a");
		menuLiA=menuLi.appendChild(menuLiA);
		//configurar el href del enlace
		menuLiA.setAttribute("href","#item"+i);
		//configurar el texto del enlace
		var menuText=document.createTextNode(itemText);
		menuLiA.appendChild(menuText);
		//crear elemento anchor matching
		var anc=document.createElement("a");
		anc.setAttribute("name","item"+i);
		//añadir anchor antes de la cabecera
		document.body.insertBefore(anc,h2s[i]);
	}
	document.body.insertBefore(menu,document.body.firstChild);
	window.onload=hacerMenu;
}