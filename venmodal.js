function venmodal(){
// capturamos el nombre del producto
	var nombreproducto = document.getElementsByClassName("product_title entry-title")[0].innerText;
// Construimos bien el string que queremos
	nombreproducto = "Nombre producto: " + nombreproducto;
//Introducimos la información para que la visualice el usuario
	var nodonombre = document.getElementsByClassName("prodnom")[0].innerText=nombreproducto;
//lo enviaremos mediante un input escondido (hidden) a los onos del usuario
	document.getElementById("prodnomf").value = nombreproducto;
// capturamos la url del producto
	var urlprod = window.location.href;
	urlprod = "Dirección producto: " + urlprod;
	var nodourl = document.getElementsByClassName("produrl")[0].innerText=urlprod;
	document.getElementById("produrlf").value = urlprod;
// capturamos la referencia del producto
	var refprod = document.getElementsByClassName("sku")[0].innerText;
	refprod = "Referencia producto: " + refprod;
	var nodoreferencia = document.getElementsByClassName("prodref")[0].innerText=refprod;
	document.getElementById("prodreff").value = refprod;
// Capturamos el pvp si es un producto único o el rango de precios si es variación
	var pvpprod = document.getElementsByClassName("price")[0].innerText;
	pvpprod = "PVP o rango PVP producto: " + pvpprod;
	// Vamos a tratar el texto para quedarnos tan solo el rango de precios
	if (pvpprod.indexOf("–")>-1){
		// Esto es para lo de los rangos de precios
		var separacion = pvpprod.indexOf("–");
		var pvp2 = pvpprod.indexOf("€",separacion);
		var primerpvp = pvpprod.slice(0,separacion);
		var segundopvp = pvpprod.slice(separacion,pvp2);
		pvpprod = primerpvp+segundopvp;
		var rangopvp = document.getElementsByClassName("prodpvp")[0].innerText=pvpprod;
		document.getElementById("prodpvpf").value = pvpprod;

		// Como con la comprobación anterior hemos visto que es un producto variable aprovechamos
		// Vamos a proceder a coger la variación que es y su precio
		var artvariaciones = document.getElementsByTagName("select")[0];
		// Aquí es donde capturo el activo
		var seleccionado = artvariaciones.options[artvariaciones.selectedIndex].value;
		seleccionado = "Variación seleccionada: " + seleccionado;
		document.getElementsByClassName("varnom")[0].innerText=seleccionado;
		document.getElementById("varnomf").value = seleccionado;

		// Aquí es donde capturo su precio
		var precioactivo="";
		try {
			precioactivo = document.getElementsByClassName("woocommerce-variation-price")[0].innerText;
			precioactivo = "PVP variación: " + precioactivo;
			var precioactivonodo = document.getElementsByClassName("varpvp")[0].innerText = precioactivo;
			document.getElementById("varpvpf").value = precioactivo;
		} 
		catch(err){pvpvariacion="0";}
		finally {
			nombrevariacion="no se escogió una variación";
			
		}
	}
	else{
		var pvpprod = document.getElementsByClassName("price")[0].innerText;
		var pvpseparacion = pvpprod.indexOf("€");
		pvpprod2 = pvpprod.slice(0,pvpseparacion);
		var textopvp="PVP Producto: ";
		pvpprod = textopvp + pvpprod2;
		var nodopvp = document.getElementsByClassName("prodpvp")[0].innerText=pvpprod;

	}
	
}
