<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header');

?>
<main class="contenedor">
    <h1>Conoce Sobre Nosotros</h1>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpg">
                <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading="lazy">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum molestiae voluptates dolore est
                ad, repudiandae dicta quidem unde quo rerum laborum ratione temporibus voluptatem asperiores labore.
                Deleniti dolorum corrupti perferendis cumque hic amet aliquam maiores, iusto assumenda recusandae
                incidunt dolor, magnam, enim ex quos. Corrupti maxime ut illum voluptates, odio recusandae
                praesentium reprehenderit beatae saepe assumenda nobis sit rem. Sunt repellat commodi nobis placeat
                aut. Dolore et ipsa illum alias quos, atque ratione facilis, est explicabo magni voluptatibus ipsum
                tempore vitae vero nesciunt quod tempora minus soluta? Repudiandae quam accusamus perspiciatis
                sapiente ea dolores eos quo, ducimus quaerat porro ipsum.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque mollitia alias deserunt, beatae sunt
                nemo pariatur aliquid magnam voluptates dolorum ipsum distinctio dignissimos quos! Dicta cumque sunt
                repellendus aut atque.</p>
        </div>
    </div>
</main>
<section class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Omnis sit repellat sint? Explicabo ab ex quibusdam error,
                itaque eveniet autem esse. Ut odio enim aut.
                Rem distinctio accusamus nam exercitationem.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Omnis sit repellat sint? Explicabo ab ex quibusdam error,
                itaque eveniet autem esse. Ut odio enim aut.
                Rem distinctio accusamus nam exercitationem.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Omnis sit repellat sint? Explicabo ab ex quibusdam error,
                itaque eveniet autem esse. Ut odio enim aut.
                Rem distinctio accusamus nam exercitationem.</p>
        </div>
    </div>
</section>

<?php incluirTemplate('footer'); ?>