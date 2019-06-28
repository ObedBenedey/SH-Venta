



var productoDiv = document.createElement('div');	
productoDiv.innerHTML =

"<div class='carousel carousel-slider'>"
+"<a class='carousel-item carruselMain' href='#four!'><img src='img/imgMain.jpg'></a>"
+"<a class='carousel-item carruselMain' target='_blank' href='https://goo.gl/maps/ucCzfozw3ZzN7oXX9'><img src='img/carrusel3.jpg'></a>"
+"<a class='carousel-item carruselMain' href='#one!'><img src='img/carrusel2.jpg'></a>"
+"<a class='carousel-item carruselMain' href='#two!'><img src='img/carrusel4.jpg'></a>"

+"</div>"
+"<h2  class='txt-main'>Proximos productos:</h2>"



productosDiv.appendChild(productoDiv);


function render(tipo) {


	let selectedProducts = productos.filter(x => x.tipo == 10);

	var productosDiv1 = document.getElementById("productosDiv1");
	productosDiv1.innerHTML="";


  for ( var product of selectedProducts){

if (product.stock >0) {
  	var productoDiv1 = document.createElement('div');

  	productoDiv1.className = 'col s6 m3 ';

  	productoDiv1.innerHTML =

  	"<div class='card'>"
  	+"<div class='card-image'>"
	+"<a  href='descripciones.php?id="+product.id+"'><img class='product-image' src="+product.Imagen+">"+ "</img></a>"
  	+"</div>"
  	+"<div class='card-content'>" 
  	+"<p  class=' product-name truncate' >  " + "<b>"+ product.nombre + "</b>" + "<p>"
  	+"<p>  stock: " + product.stock  + "<p>"
  	+"</div>"
  	+"</div>";


  	productosDiv1.appendChild(productoDiv1);
  
    }
  }
}
 //cuando no estas leogeado
function renderProducts(tipo) {

		var pro = document.getElementById("buscador");
	pro.innerHTML="";


	let selectedProducts = productos.filter(x => x.tipo == tipo);
		buscador.innerHTML+= `
      <br>
      <nav>
    <div class="nav-wrapper #37474f blue-grey darken-3">
      <form>
        <div class="input-field">
          <input  type="search" id="formulario" placeholder='Busca tu artículo:' required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>

    </div>
  </nav>`

  	const formulario = document.querySelector('#formulario');
	const resultado = document.querySelector('#registros');
	const filtrar = () => {

		const texto = formulario.value.toLowerCase();

	var productosDiv = document.getElementById("productosDiv");
	productosDiv.innerHTML="";

	for (var product of selectedProducts){
		let nombress = product.nombre.toLowerCase();

		if (nombress.indexOf(texto) !== -1 ) {

if (product.stock >0) {
		var productoDiv = document.createElement('div');

		productoDiv.className = 'col s6 m3 ';


		productoDiv.innerHTML =

		"<div class='card'>"
		+"<div class='card-image'>"
		+"<a  href='descripciones.php?id="+product.id+"'><img class='product-image' src="+product.Imagen+">"+ "</img></a>"
		+"</div>"
		+"<div class='card-content'>" 
		+"<p  class=' product-name truncate' >  " + "<b>"+ product.nombre + "</b>" + "<p>"
		+"<p>  stock: " + product.stock  + "<p>"
		+"<p>Precio:  " + product.precio+"</p>" 

		+"</div>"
		+"</div>";
          

		productosDiv.appendChild(productoDiv);

	}
}
 }

}

	formulario.addEventListener('keyup',filtrar)
	filtrar();
}
//Administrador
function renderProducts2(tipo) {

	var pro = document.getElementById("buscador");
	pro.innerHTML="";

	let selectedProducts = productos.filter(x => x.tipo == tipo);

	var productosDiv = document.getElementById("productosDiv");
	productosDiv.innerHTML="";

	buscador.innerHTML+= `
      <br>
      <nav>
    <div class="nav-wrapper #37474f blue-grey darken-3">
      <form>
        <div class="input-field">
          <input  type="search" id="formulario" placeholder='Busca tu artículo:' required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>

    </div>
  </nav>`


	for (var product of selectedProducts){

if (product.stock >0) {
		var productoDiv = document.createElement('div');

		productoDiv.className = 'col s6 m3 ';

		productoDiv.innerHTML =

		"<div class='card'>"
		+"<div class='card-image'>"
		+"<a  href='descripciones.php?id="+product.id+"'><img class='product-image' src="+product.Imagen+">"+ "</img></a>"
		+"</div>"
		+"<div class='card-content'>" 
		+"<p  class=' product-name truncate' >  " + "<b>"+ product.nombre + "</b>" + "<p>"
		+"<p>  stock: " + product.stock  + "<p>"
		+"<p>Precio:  " + product.precioAdmin+"</p>" 
		+"<div>"
		+"</div>";
          

		productosDiv.appendChild(productoDiv);
	}
 }
}

function eliminar() {
	var productosDiv1 = document.getElementById("productosDiv1");
	productosDiv1.innerHTML="";
}



