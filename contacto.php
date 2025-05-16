<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header');

?>
<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpg">
        <img src="build/img/destacada3.jpg" alt="Imagen Contacto" loading="lazy">
    </picture>
    <h2>Llene el formulario de Contacto</h2>
    <form class="formulario">
        <fieldset>
            <legend>
                Iformacion Personal
            </legend>
            <!--Nombre-->
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu Nombre" id="nombre">
            <!--Correo-->
            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Correo" id="email">
            <!--Telefono-->
            <label for="telefono">Telefono</label>
            <input type="tel" placeholder="Tu Telefono" id="telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje"></textarea>
        </fieldset>
        <fieldset>
            <legend>
                Informacion sobre la propiedad
            </legend>
            <label for="opciones">Vende o Compra:</label>
            <select id="opciones">
                <option value="disabled selected">-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
        </fieldset>
        <fieldset>
            <legend>
                Contacto
            </legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input type="radio" name="contacto" id="contactar-telefono" value="telefono">

                <label for="contactar-email">E-mail</label>
                <input type="radio" name="contacto" id="contactar-email" value="email">
            </div>
            <p>Si eligio telefono, elija la fecha y la hora para ser contactado</p>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">
            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00" placeholder="09:00">
        </fieldset>
        <input type="submit" value="Enviar" class="btn-verde">
    </form>
</main>
<?php incluirTemplate('footer'); ?>