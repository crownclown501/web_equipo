// Función para registrar clientes
document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;

    // Almacenar en localStorage
    const clientes = localStorage.getItem('clientes');
    if (clientes) {
        const listaClientes = clientes.split(',');
        listaClientes.push(`${nombre},${email}`);
        localStorage.setItem('clientes', listaClientes.join(','));
    } else {
        localStorage.setItem('clientes', `${nombre},${email}`);
    }

    console.log(`Cliente registrado: ${nombre}, Email: ${email}`);
    alert('Cliente registrado con éxito');
    this.reset();
});

// Función para enviar mensajes de contacto
document.getElementById('contactoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const nombreContacto = document.getElementById('nombreContacto').value;
    const emailContacto = document.getElementById('emailContacto').value;
    const mensaje = document.getElementById('mensaje').value;
    
    console.log(`Mensaje enviado de: ${nombreContacto}, Email: ${emailContacto}, Mensaje: ${mensaje}`);
    alert('Mensaje enviado con éxito');
    this.reset();
});

// Función para cargar la lista de clientes desde localStorage
function cargarClientes() {
    const listaClientes = document.getElementById('listaClientes');
    const clientes = localStorage.getItem('clientes');
    
    if (clientes) {
        const lista = clientes.split(',');
        for (let i = 0; i < lista.length; i += 2) {
            if (lista[i] && lista[i+1]) {
                const li = document.createElement('li');
                li.className = 'list-group-item';
                li.textContent = `${lista[i]} - ${lista[i+1]}`;
                listaClientes.appendChild(li);
            }
        }
    }
}

// Llamar a la función para cargar clientes en la página de clientes
if (document.getElementById('listaClientes')) {
    cargarClientes();
}
