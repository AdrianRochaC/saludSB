//Objeto para almacenar los productos en el carrito
let carrito = {};

// Funcion para agregar productos al carrito
function agregarAlCarrito(nombre, precio) {
    // Verificar si el producto ya esta en el carrito
    if (carrito[nombre]) {
        carrito[nombre].cantidad += 1; // Aumentar la cantidad
    } else {
        carrito[nombre] = { precio: precio, cantidad: 1 }; // Agregar nuevo producto
    }
    actualizarCarrito();
}

// Funcion para actualizar el carrito en el DOM
function actualizarCarrito() {
    const carritoLista = document.getElementById('carrito-lista');
    carritoLista.innerHTML = ''; // Limpiar el contenedor

    let total = 0; // Inicializar el total

    // Recorrer los productos en el carrito
    for (const [nombre, info] of Object.entries(carrito)) {
        const productoDiv = document.createElement('div');
        productoDiv.innerHTML = `
            <p>${nombre} - $${info.precio} x 
                <input type="number" value="${info.cantidad}" min="1" onchange="cambiarCantidad('${nombre}', this.value)">
            </p>
        `;
        carritoLista.appendChild(productoDiv);
        total += info.precio * info.cantidad; // Calcular el total
    }

    // Actualizar el total en el DOM
    document.getElementById('total').innerText = total;
}

// Función para cambiar la cantidad de un producto
function cambiarCantidad(nombre, cantidad) {
    if (carrito[nombre]) {
        carrito[nombre].cantidad = parseInt(cantidad); // Actualizar cantidad
        if (carrito[nombre].cantidad <= 0) {
            delete carrito[nombre]; // Eliminar producto si cantidad es 0
        }
        actualizarCarrito(); // Actualizar el carrito
    }
}

// Función para proceder al pago (puedes personalizarla)
function procederAlPago() {
    alert('Procediendo al pago...');
    // Aquí puedes redirigir a otra página o realizar otra acción
}