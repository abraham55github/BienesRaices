<?php
    include './includes/templates/header.php'
?>
    <main class="contenedor">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="webp">
                    <source srcset="build/img/nosotros.jpg" type="jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="texto de entrada de nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur esse asperiores recusandae assumenda dignissimos tempore qui odio, consequatur reiciendis dolor totam alias est iusto ex modi quo error quam temporibus.</p>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad repellat voluptates temporibus sequi aperiam, qui nulla exercitationem quis expedita, tempore veritatis quibusdam nihil eligendi rerum doloremque, cumque vitae dignissimos! Doloribus.</p>
            </div>
        </div>
    </main>
    <section class="contenedor">
        <h1>Titulo Pagina</h1>
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
    </section>
    
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2024</p>
    </footer>
    
    <script src="build/js/bundle.min.js"></script>
</body>
</html>