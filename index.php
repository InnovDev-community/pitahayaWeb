<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/toggle.js"></script>
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <title>Pitahaya - Comunicaciones</title>
</head>
<body>
    <main class="contenido">
        <header class="cabecera">
            <div class="cabecera-top">
                <div class="item-cabecera-top">
                    <p><span class="icon-mobile"></span>+51945584029</p>
                </div>
                <div class="item-cabecera-top">
                    <p><span class="icon-mail"></span>pitahayaccorp@gmail.com</p>
                </div>
            </div>
            <div class="cabecera-mid">
                <a href="" class="logo">
                    <img src="img/logo_pitahaya.png" alt="Pitahaya">
                </a>
                <ul class="ingreso">
                        <li class="ingreso-item"><a href="#">Entrar</a></li>
                        <li class="ingreso-item"><a href="#">Crear Cuenta</a></li>
                </ul>
            </div>
            <nav>
                <div class="menu contenedor">
                    <div>MENÚ</div>
                    <div id="toggle-menu"><span class="icon-menu"></span></div>
                </div>
                <ul id="lista" class="lista">
                    <li class="lista-item selected"><a href="#"><img class="imagen-inicio" src="img/nube.png">Inicio</a></li>
                    <li class="lista-item"><a href="#servicios">Servicios</a></li>
                    <li class="lista-item"><a href="#trabajos">Trabajos</a></li>
                    <li class="lista-item"><a href="#">Nosotros</a></li>
                    <li class="lista-item"><a href="#contacto">Contacto</a></li>
                    <li class="lista-item"><a href="#blog">Blog</a></li>
                    <li class="lista-item vista-movil"><a href="#">Entrar</a></li>
                    <li class="lista-item vista-movil"><a href="#">Crear Cuenta</a></li>
                </ul>
            </nav>
            
        </header>
        <section class="slider-contenedor">
            <div class="slider-item">
                <h2 class="slider-item-title">
                    #CreamosTendencia en la red
                </h2>
                <hr>
                <p class="slider-item-descripcion">
                    Su marca será la primera en aparecer
                </p>
                <button id="boton-descubre">
                    Descubre
                </button>
            </div>
        </section>
        <section id="servicios" class="servicios-contenedor">
            <h2>
                SERVICIOS
            </h2>
            <div class="servicio-item diseno">
                <img src="img/servicios/diseno.png">
                <h3 class="servicio-item-title">
                    Diseño gráfico
                </h3>
                <p class="servicio-item-descripcion">
                Diseñamos tu marca, diseño web,  diseño editorial, folletería.
                </p>
            </div>
            <div class="servicio-item audiovisual">
                <img src="img/servicios/prod_audiovisual.png">
                <h3 class="servicio-item-title">
                    Prod. Audiovisual
                </h3>
                <p class="servicio-item-descripcion">
                    Editamos fotografía, video y  realizamos animaciones 2D y 3D.
                </p>
            </div>
            <div class="servicio-item relaciones">
                <img src="img/servicios/relaciones_publicas.png">
                <h3 class="servicio-item-title">
                    Relaciones Públicas
                </h3>
                <p class="servicio-item-descripcion">
                    Conectamos con los medios de  comunicación y organizamos evento
                </p>
            </div>
            <div class="servicio-item marketing">
                <img src="img/servicios/marketing_digital.png">
                <h3 class="servicio-item-title">
                    Marketing Digital
                </h3>
                <p class="servicio-item-descripcion">
                    Manejamos las Redes Sociales,  aplicamos técnicas SEO y Social Media
                </p>
            </div>
        </section>
        <section id="trabajos" class="trabajos-contenedor">
            <div class="trabajos-texto">
                <h2 class="trabajos-texto-titulo">
                    #ÚltimosTrabajos_
                </h2>
                <p class="trabajos-texto-parrafo">
                    Explora la tendencia generada en todos nuestros logros
                </p>
            </div>
            <div class="trabajos-imagenes">
                <figure class="trabajo-item">
                    <img src="" alt="">
                </figure>
                <figure class="trabajo-item">
                <img src="" alt="">
                </figure>
            </div>
            <button id="portafolio-boton">
                Ver Portafolio
            </button>
        </section>
        <section id="blog" class="blog-contenedor">
            <div class="blog-texto">
                <h2 class="blog-texto-titulo">
                    #NuestroBlog_
                </h2>
                <p class="blog-texto-parrafo">
                    Te mostraremos la tendencia en el mundo del marketing
                </p>
            </div>
            <div class="blog-articulos">
                <article class="blog-articulo-item">
                    <header class="blog-articulo-cabecera">
                        <time class="blog-articulo-fecha">
                            <span>26</span>3/18
                        </time>
                        <h3>¿Qué contenidos puedo ofrecer en Facebook para generar audiencia?</h3>
                    </header>
                    <img src="img/blog/imagen_noticia1.png" alt="">
                    <p class="blog-articulo-descripcion">
                        Siempre es aconsejable contar con una página en Facebook para estar en contacto con los usuarios, crear una relación con ellos y lograr que visiten la página web para que...
                    </p>
                    <a href="#" class="blog-articulo-enlace">Seguir leyendo</a>
                </article>
                <article class="blog-articulo-item">
                    <header class="blog-articulo-cabecera">
                        <time class="blog-articulo-fecha">
                            <span>27</span>3/18
                        </time>
                        <h3>La nueva tendencia del diseño web: Responsive Design.</h3>
                    </header>
                    <img src="img/blog/imagen_noticia2.png" alt="">
                    <p class="blog-articulo-descripcion">
                        El diseño web responsive es una técnica del diseño web que busca la correcta visualización de la misma página en distintos dispositivos, desde ordenadores de escritorio...
                    </p>
                    <a href="#" class="blog-articulo-enlace">Seguir leyendo</a>
                </article>
                <article class="blog-articulo-item">
                    <header class="blog-articulo-cabecera">
                        <time class="blog-articulo-fecha">
                            <span>28</span>3/18
                        </time>
                        <h3>05 consejos para saber si tu logotipo necesita ser rediseñado</h3>
                    </header>
                    <img src="img/blog/imagen_noticia3.png" alt="">
                    <p class="blog-articulo-descripcion">
                        A veces, vamos dejando que pase el tiempo, porque no encontramos las señales para cambiar el logotipo y cuando queremos rediseñar ya es demasiado tarde y hay que...
                    </p>
                    <a href="#" class="blog-articulo-enlace">Seguir leyendo</a>
                </article>
            </div>
            <button id="blog-mas_noticias">
                Ver más noticias
            </button>
        </section>
        <section class="brief-basico-contenedor">
        </section>
        <section class="unetenos-contenedor"> 
            <img src="img/unetenos/minilogo.png" alt="">
            <div class="unetenos-texto">
                <h2 class="unetenos-texto-titulo">
                    #Unetenos_
                </h2>
                <p class="unetenos-texto-parrafo">
                    Descubre cuanta tendencia puede llegar a tener tu marca
                </p>
            </div>
            <div class="boton-globos">
                <button id="unetenos">
                    ¡Vamos!
                </button>
            </div>
        </section>
        <section id="contacto" class="contactanos">
            <div class="contactanos-item">
                <h3>DISPONIBLES LAS 24 HORAS</h3>
                <p><span class="icon-mobile"></span>+51945584029</p>
                <p><span class="icon-mail"></span>pitahayaccorp@gmail.com</p>
            </div>
            <div class="contactanos-item">
                <h3>AYUDA</h3>
                <p>Déjanos un mensaje y te ayudaremos</p>
                <button id="ir-menu">
                    Ir a menú contacto
                </button>
            </div>
            <div class="contactanos-item">
                <h3>SUSCRÍBETE</h3>
                <P>Sé el primero en recibir novedades</P>
                <form class="suscripcion" action="" method="post">
                    <input type="text" name="" id="correo" placeholder="Escribe tu email">
                    <button id="suscribete">
                        Me interesa
                    </button>
                </form>
            </div>
        </section>
        <section class="pseudoFooter-contenedor">
            <div class="pseudoFooter-item">
                <h3>INFORMACION</h3>
                <ul class="pseudoFooter-lista">
                    <li class="pseudoFooter-lista-item"><a href="#">Pitahaya</a></li>
                    <li class="pseudoFooter-lista-item"><a href="#servicios">Servicios</a></li>
                    <li class="pseudoFooter-lista-item"><a href="#trabajos">Trabajos</a></li>
                    <li class="pseudoFooter-lista-item"><a href="#">Nosotros</a></li>
                    <li class="pseudoFooter-lista-item"><a href="#contacto">Contacto</a></li>
                    <li class="pseudoFooter-lista-item"><a href="#blog">Blog</a></li>
                </ul>
            </div>
            <div class="pseudoFooter-item">
                <h3>CONECTA</h3>
                <ul class="redesSociales">
                    <a href="#" class="redesSociales-item">
                        <img src="img/redesSociales/facebook_icon.png" alt="" srcset="">
                    </a>
                    <a href="#" class="redesSociales-item">
                        <img src="img/redesSociales/instagram_icon.png" alt="" srcset="">
                    </a>
                    <a href="#" class="redesSociales-item">
                        <img src="img/redesSociales/twitter_icon.png" alt="" srcset="">
                    </a>
                    <a href="#" class="redesSociales-item">
                        <img src="img/redesSociales/googleplus_icon.png" alt="" srcset="">
                    </a>
                    <a href="#" class="redesSociales-item">
                        <img src="img/redesSociales/youtube_icon.png" alt="" srcset="">
                    </a>
                    <a href="#" class="redesSociales-item">
                        <img src="img/redesSociales/linkedin_icon.png" alt="" srcset="">
                    </a>
                </ul>
            </div>
            <div class="pseudoFooter-item">
                <h3>IDIOMA</h3>
                <div class="idiomas">
                    <button class="idioma-item idioma-selected">Español</button>
                    <button class="idioma-item">Inglés</button>
                    <button class="idioma-item">Portugués</button>
                </div>
            </div>
        </section>
        <hr class="division">
        <footer class="piedepagina">
        <p class="copyright">&copy; 2018. Pitahaya - Comunicación Corporativa. <span>Condiciones de uso. Política de privacidad </span></p>
        </footer>
    </main>
</body>
</html>