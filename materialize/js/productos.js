



var productoDiv = document.createElement('div');	
productoDiv.innerHTML =


		"<div class='carousel carousel-slider'>"
		  +"<a class='carousel-item carruselMain' href='#three!'><img src='img/carrusel3.jpg'></a>"
		   +"<a class='carousel-item carruselMain' href='#one!'><img src='img/carrusel2.jpg'></a>"
		   +"<a class='carousel-item carruselMain' href='#two!'><img src='img/carrusel4.jpg'></a>"
		   +"<a class='carousel-item carruselMain' href='#four!'><img src='img/imgMain.jpg'></a>"
	    +"</div>"
	     +"<h2  class='txt-main'>Los más buscado:</h2>"

      

        productosDiv.appendChild(productoDiv);


     

function renderProducts(tipo) {

	let selectedProducts = productos.filter(x => x.tipo == tipo);

	var productosDiv = document.getElementById("productosDiv");
	productosDiv.innerHTML="";


	for (var product of selectedProducts){


		var productoDiv = document.createElement('div');

		productoDiv.className = 'col s6 m3 ';

		productoDiv.innerHTML =



		"<div class='card'>"
		+"<div class='card-image'>"
		+"<img class='product-image' src="+"dbprotes/"+product.Imagen+">"+ "</img>"
		+"</div>"
		+"<div class='card-content'>" 
		+"<p  class=' product-name truncate' >  " + "<b>"+ product.nombre + "</b>" + "<p>"
		+"<p>  stock: " + product.stock  + "<p>"
		+"<p>Precio: $ " + product.precio+"</p>" 

		+"</div>"
		+"</div>";
          

		productosDiv.appendChild(productoDiv);
	}

}

//Administrador
function renderProducts2(tipo) {

	let selectedProducts = productos.filter(x => x.tipo == tipo);

	var productosDiv = document.getElementById("productosDiv");
	productosDiv.innerHTML="";


	for (var product of selectedProducts){


		var productoDiv = document.createElement('div');

		productoDiv.className = 'col s6 m3 ';

		productoDiv.innerHTML =



		"<div class='card'>"
		+"<div class='card-image'>"
		+"<img class='product-image' src="+"dbprotes/"+product.Imagen+">"+ "</img>"
		+"</div>"
		+"<div class='card-content'>" 
		+"<p  class=' product-name truncate' >  " + "<b>"+ product.nombre + "</b>" + "<p>"
		+"<p>  stock: " + product.stock  + "<p>"
		+"<p>Precio: $ " + product.precioAdmin+"</p>" 

		+"</div>"
		+"</div>";
          

		productosDiv.appendChild(productoDiv);
	}

}






