<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header');

?>
<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta Frente Al Bosque</h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpg">
        <img src="build/img/destacada.jpg" alt="Imagen de la Propiedad" loading="lazy">
    </picture>
    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono etsacionamiento" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum molestiae voluptates dolore est ad,
            repudiandae dicta quidem unde quo rerum laborum ratione temporibus voluptatem asperiores labore. Deleniti
            dolorum corrupti perferendis cumque hic amet aliquam maiores, iusto assumenda recusandae incidunt dolor,
            magnam, enim ex quos. Corrupti maxime ut illum voluptates, odio recusandae praesentium reprehenderit beatae
            saepe assumenda nobis sit rem. Sunt repellat commodi nobis placeat aut. Dolore et ipsa illum alias quos,
            atque ratione facilis, est explicabo magni voluptatibus ipsum tempore vitae vero nesciunt quod tempora minus
            soluta? Repudiandae quam accusamus perspiciatis sapiente ea dolores eos quo, ducimus quaerat porro ipsum.
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque mollitia alias deserunt, beatae sunt nemo
            pariatur aliquid magnam voluptates dolorum ipsum distinctio dignissimos quos! Dicta cumque sunt repellendus
            aut atque.</p>
    </div>
</main>
<?php incluirTemplate('footer'); ?>