<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header');

?>
<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoracion de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpg">
        <img src="build/img/destacada2.jpg" alt="Imagen de la Propiedad" loading="lazy">
    </picture>
    <p class="informacion-meta">Escrito el: <span>12/05/2025</span> por: <span>Admin</span></p>
    <div class="resumen-propiedad">
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