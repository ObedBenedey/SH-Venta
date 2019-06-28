

function renderProduct(tipo) {

	let selectedProducts = productos.filter(x => x.tipo == tipo);

	var productosDiv = document.getElementById("productosDiv");
	productosDiv.innerHTML="";


	for (var product of selectedProducts){


		var productoDiv = document.createElement('div');

		productoDiv.className = 'col s6 m3 l3';

		productoDiv.innerHTML =


        "<div class='card'>"
		+"<div class='card-image'>"
		+"<img class='product-image' src="+product.Imagen+">"+ "</img>"
		+"</div>"
		+"<div class='card-content'>" 
		+"<p  class=' product-name truncate' >  " + "<b>"+ product.nombre + "</b>" + "<p>"
		+"<p>  stock: " + product.stock  + "<p>"
		+"<p>Precio: $ " + product.precio+"</p>"
		+"<p>Precio Admin: $ " + product.precioAdmin+"</p>"
		+"<p><a href= 'modificar.php?id="+product.id+"'>Modificar</a></p>"
		+"<p> <a href= 'eliminar.php?id="+product.id+" '>Eliminar</a></p>"
		+"</div>"
		+"</div>";

		productosDiv.appendChild(productoDiv);
	}

}



function eliminar() {
	var productosDiv1 = document.getElementById("productosDiv1");
	productosDiv1.innerHTML="";
}




