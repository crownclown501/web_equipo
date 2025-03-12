document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registroForm');
    const exportarBtn = document.getElementById('exportarBtn');

    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        if (validarFormulario()) {
            guardarDatos();
            mostrarMensajeExito();
            form.reset();
        }
    });
    
    exportarBtn.addEventListener('click', function() {
        exportarDatos();
    });
    
    function validarFormulario() {
        let valido = true;
        
        const nombre = document.getElementById('nombre');
        if (nombre.value.trim() === '') {
            mostrarError(nombre, 'Por favor ingresa tu nombre completo.');
            valido = false;
        } else {
            limpiarError(nombre);
        }
        
        const email = document.getElementById('email');
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regexEmail.test(email.value.trim())) {
            mostrarError(email, 'Por favor ingresa un correo electrónico válido.');
            valido = false;
        } else {
            limpiarError(email);
        }
        
        const destino = document.getElementById('destino');
        if (destino.value === '' || destino.value === null) {
            mostrarError(destino, 'Por favor selecciona un destino.');
            valido = false;
        } else {
            limpiarError(destino);
        }
        
        const personas = document.getElementById('personas');
        if (personas.value <= 0 || personas.value === '') {
            mostrarError(personas, 'Por favor ingresa un número válido de personas.');
            valido = false;
        } else {
            limpiarError(personas);
        }
        
        const fecha = document.getElementById('fecha');
        const fechaSeleccionada = new Date(fecha.value);
        const hoy = new Date();
        hoy.setHours(0, 0, 0, 0);
        
        if (fecha.value === '' || fechaSeleccionada < hoy) {
            mostrarError(fecha, 'Por favor selecciona una fecha futura.');
            valido = false;
        } else {
            limpiarError(fecha);
        }
        
        return valido;
    }
    
    function mostrarError(elemento, mensaje) {
        elemento.classList.add('is-invalid');
        const feedback = elemento.nextElementSibling;
        if (feedback && feedback.classList.contains('invalid-feedback')) {
            feedback.textContent = mensaje;
        }
    }
    
    function limpiarError(elemento) {
        elemento.classList.remove('is-invalid');
        elemento.classList.add('is-valid');
    }
    
    function guardarDatos() {
        const cliente = {
            nombre: document.getElementById('nombre').value.trim(),
            email: document.getElementById('email').value.trim(),
            destino: document.getElementById('destino').value,
            personas: document.getElementById('personas').value,
            fecha: document.getElementById('fecha').value,
            comentarios: document.getElementById('comentarios').value.trim()
        };
        
        let clientes = JSON.parse(localStorage.getItem('clientes')) || [];
        
        clientes.push(cliente);
        
        localStorage.setItem('clientes', JSON.stringify(clientes));
    }
    
    function exportarDatos() {
        const clientes = JSON.parse(localStorage.getItem('clientes')) || [];
        
        if (clientes.length === 0) {
            alert('No hay registros para exportar.');
            return;
        }
        
        let contenido = 'REGISTRO DE CLIENTES VIAJES EXPRESS\n';
        contenido += '===================================\n\n';
        
        clientes.forEach((cliente, index) => {
            contenido += `CLIENTE #${index + 1}\n`;
            contenido += `Nombre: ${cliente.nombre}\n`;
            contenido += `Email: ${cliente.email}\n`;
            contenido += `Destino: ${cliente.destino}\n`;
            contenido += `Personas: ${cliente.personas}\n`;
            contenido += `Fecha de viaje: ${formatearFecha(cliente.fecha)}\n`;
            contenido += `Comentarios: ${cliente.comentarios || 'No hay comentarios'}\n`;
            contenido += '===================================\n\n';
        });
        
        const blob = new Blob([contenido], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'clientes.txt';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }
    
    function formatearFecha(fechaStr) {
        const fecha = new Date(fechaStr);
        const opciones = { year: 'numeric', month: 'long', day: 'numeric' };
        return fecha.toLocaleDateString('es-ES', opciones);
    }
    
    function mostrarMensajeExito() {
        const alerta = document.createElement('div');
        alerta.className = 'alert alert-success mt-3';
        alerta.role = 'alert';
        alerta.textContent = '¡Registro completado con éxito! Nos pondremos en contacto contigo pronto.';
        
        form.parentNode.insertBefore(alerta, form);
        
        setTimeout(() => {
            alerta.remove();
        }, 5000);
    }
});

