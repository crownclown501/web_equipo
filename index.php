<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header', $inicio = true);

?>
<main class="contenedor seccion">
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
</main>
<section class="seccion contenedor">
    <h2>Casas y Deppas en Venta</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el Lago con excelente vista, acabados de lujo en excelente precio</p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono etsacionamiento"
                            loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton-amarillo-block">Ver Propieda</a>
            </div>
            <!--.contenido-anuncio casa lujo lago-->
        </div>
        <!--.anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa Terminados de Lujo</h3>
                <p>Casa con diseño moderno, asi como tecnologia inteligente y amueblada</p>
                <p class="precio">$2,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono etsacionamiento"
                            loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton-amarillo-block">Ver Propieda</a>
            </div>
            <!--.contenido-anuncio casa terminados lujo-->
        </div>
        <!--.anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa con Alberca</h3>
                <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono etsacionamiento"
                            loading="lazy">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                        <p>4</p>
                    </li>
                </ul>
                <a href="anuncios.php" class="boton-amarillo-block">Ver Propieda</a>
            </div>
            <!--.contenido-anuncio casa con alberca-->
        </div>
        <!--.anuncio-->
    </div>
    <!--.contenedor-anuncios-->

    <div class="alinear-derecha">
        <a href="anuncios.php" class="btn-verde">Ver todas</a>
    </div>
</section>
<!--casa y depas en venta anuncios-->

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo">Contactanos</a>
</section>


<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpp">
                    <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>12/05/2025</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpp">
                    <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>12/05/2025</span> por: <span>Admin</span></p>
                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a
                        combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atencion y la casa que me
                ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>Juan de la Torre</p>
        </div>
    </section>
</div>

<?php incluirTemplate('footer'); ?>