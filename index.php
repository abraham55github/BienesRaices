<?php
    require './includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor">
        <h1>Mas sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Totam reprehenderit, dolorem sint quisquam officia ex voluptas
                    , veritatis qui illo praesentium modi dolores laudantium rerum
                     quam, quas obcaecati dicta rem magnam.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Totam reprehenderit, dolorem sint quisquam officia ex voluptas
                    , veritatis qui illo praesentium modi dolores laudantium rerum
                     quam, quas obcaecati dicta rem magnam.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Totam reprehenderit, dolorem sint quisquam officia ex voluptas
                    , veritatis qui illo praesentium modi dolores laudantium rerum
                     quam, quas obcaecati dicta rem magnam.
                </p>
            </div>
        </div>
    </main>
    <section class="seccion contenedor">
        <h2>Casas y Depas en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de lujo en Lago</h3>
                    <p>Casa en el lago con excelente vista, acabods de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                    </ul>
                    <a class="boton boton-amarillo-block" href="anuncio.html">
                        Ver propiedad
                    </a>
                </div> <!-- Contenido-anuncio -->
            </div> <!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabods de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                    </ul>
                    <a class="boton boton-amarillo-block" href="anuncio.html">
                        Ver propiedad
                    </a>
                </div> <!-- Contenido-anuncio -->
            </div> <!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa en el lago con excelente vista, acabods de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                    </ul>
                    <a class="boton boton-amarillo-block" href="anuncio.html">
                        Ver propiedad
                    </a>
                </div> <!-- Contenido-anuncio -->
            </div> <!-- anuncio -->



        </div> <!-- contenedor-anuncios -->
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>
    
    <section class="imagen-contacto">
        <h2>Encuentra la casas de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="webp">
                        <source srcset="build/img/blog1.jpg" type="jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blgo">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el :<span>20/10/2023</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para contruir una terraza en el techo de tu casa
                            con los mejores materias y ahorrando dinero.
                        </p>
                    </a>

                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="webp">
                        <source srcset="build/img/blog2.jpg" type="jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blgo">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para decorasion de hogar</h4>
                        <p class="informacion-meta">Escrito el :<span>20/10/2023</span> por: <span>Admin</span></p>
                        <p>
                            Maximizar el espacio en tu hogar con esta guia,
                            aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>

                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena atencion
                    y la casa que me ofrecieron cumple con todas mis expectativas
                </blockquote>
                <p>Abraham Otero</p>
            </div>
        </section>
    </div>

<?php
     incluirTemplate('footer');
?>