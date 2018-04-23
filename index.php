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
    <div class="modal" id="modal--login">
        <div class="con-form">
            <button class="icon-cancel btn-close" id="btn-close-login"></button>
            <form action="" class="form-acceso login">
                <img class="form__logo" src="img/logo_pitahaya.png" alt="">
                <h1>Bienvenido</h1>
                <button class="form__btn-facebook"><span class="icon-facebook-squared"></span> Entra con Facebook</button>
                <p class="form__title-alt">o entra con tu email</p>
                <input type="text" placeholder="Nombre">
                <input type="text" placeholder="Contraseña">
                <a class="form__renovar-acceso" href="">¿Olvidaste tu contraseña?</a>
<<<<<<< HEAD
                <button class="form__btn-acceso form__entrar btn-primary">Entrar</button>
=======
                <button class="form__btn-acceso">Entrar</button>
>>>>>>> 2ddd6865e283793dc51dc7433e027e0ed92bcd2f
            </form>
            <p class="form__nota"><span>¿No tienes cuenta?</span><a href=""> Crear cuenta</a></p>
        </div>
    </div>
    <div class="modal" id="modal--register">
        <div class="con-form">
            <button class="icon-cancel btn-close" id="btn-close-register"></button>
            <form action="" class="form-acceso register">
                <img class="form__logo" src="img/logo_pitahaya.png" alt="">
                <h1>Creamos tendencia juntos</h1>
                <p class="form__title-alt">Registrarse es gratis</p>
                <button class="form__btn-facebook"><span class="icon-facebook-squared"></span> Registrate por Facebook</button>
                <p class="form__title-alt">o registrate con tu email</p>
                <input type="text" placeholder="Nombre">
                <input type="text" placeholder="Teléfono">
                <input type="email" placeholder="Correo electrónico">
                <input type="password" placeholder="Contraseña">
                <button class="form__btn-acceso">Crear cuenta</button>
            </form>
            <p class="form__nota"><span>¿Ya tienes cuenta?</span><a href=""> Entrar/a></p>
        </div>
    </div>    
    <main class="contenido">
        <header class="cabecera">
            <div class="cabecera-top">
                <div class="item-cabecera-top">
                    <p><span class="icon-mobile"></span>+51947546772</p>
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
                        <li class="ingreso-item"><a href="#" id="btn-entrar">Entrar</a></li>
<<<<<<< HEAD
                        <li class="ingreso-item"><a href="#" id="btn-register" class="btn-primary">Crear Cuenta</a></li>
=======
                        <li class="ingreso-item"><a href="#" id="btn-register">Crear Cuenta</a></li>
>>>>>>> 2ddd6865e283793dc51dc7433e027e0ed92bcd2f
                </ul>
            </div>
            <nav>
                <div class="menu contenedor">
                    <div>MENÚ</div>
                    <div id="toggle-menu"><span class="icon-menu"></span></div>
                </div>
                <ul id="lista" class="lista">
                    <li class="lista-item selected"><a href="#" class="item-header"><img class="imagen-inicio" src="img/nube.png">Inicio</a></li>
                    <li class="lista-item"><a href="#servicios" class="item-header">Servicios</a></li>
                    <li class="lista-item"><a href="#trabajos" class="item-header">Trabajos</a></li>
                    <li class="lista-item"><a href="#" class="item-header">Nosotros</a></li>
                    <li class="lista-item"><a href="#contacto" class="item-header">Contacto</a></li>
                    <li class="lista-item"><a href="#blog" class="item-header">Blog</a></li>
                    <li class="lista-item vista-movil"><a href="#" class="item-header" id="btn-entrar-movil">Entrar</a></li>
<<<<<<< HEAD
                    <li class="lista-item vista-movil"><a href="#" class="item-header btn-primary" id="btn-register-movil">Crear Cuenta</a></li>
=======
                    <li class="lista-item vista-movil"><a href="#" class="item-header" id="btn-register-movil">Crear Cuenta</a></li>
>>>>>>> 2ddd6865e283793dc51dc7433e027e0ed92bcd2f
                </ul>
            </nav>
      
        </header>
        <section class="slider-contenedor">
            <div class="slider-item">
                <h2 class="slider-item-title">
                    <span>#CreamosTendencia</span> en la red
                </h2>
                <hr>
                <p class="slider-item-descripcion">
                    Su marca será la primera en aparecer
                </p>
                <button id="boton-descubre" class="btn-primary">
                    Descubre
                </button>
            </div>
        </section>
        <section id="servicios" class="servicios-contenedor">
            <h2>
                SERVICIOS
            </h2>
            <div class="contenido-servicios">
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
                <!-- <?php


                    /* Consulta para obtener las 3 ultimas publicaciones */
                    /* $articulos=$consulta; */
                    /* for para iterar 3 veces */
                    /* for ($i; $i<3; $i++) {*/

                   /*  echo '<article class="blog-articulo-item">
                    <header class="blog-articulo-cabecera">
                        <time class="blog-articulo-fecha">'; */
                        /* Funcion para extraer la fecha de la base de datos */
                    /* echo        '<span>'.$articulos[$i]["fecha" /* dia *//* ].'</span>'.$articulos[$i]["fecha" */ /* mes *//* ].'/'.$articulos[$i]["fecha"  *//* año *//* ]; */
                    /*echo    '</time>
                        <h3>'.$articulos[$i]["header"].'</h3>
                    </header>
                    <img src="'.$articulos[$i]["ruta_img"].'" alt="">
                    <p class="blog-articulo-descripcion">'.$articulos[$i]["descripción"];
                        
                    echo '</p>
                    <a href="'.$articulos[$i]["enlace"].'" class="blog-articulo-enlace">Seguir leyendo</a>
                    </article>' */

                    /* Cierre del for */
                    /* } */
                ?> -->
            </div>
            <button id="blog-mas_noticias">
                Ver más noticias
            </button>
        </section>
        <section id="brief-basico" class="brief-basico-contenedor">
            <div class="brief-texto">
                <h2 class="brief-texto-titulo">
                    #CreaTuBriefBasico_
                </h2>
                <p class="brief-texto-parrafo">
                    Analicemos el estado de tu marca en la red
                </p>
            </div>
            <form action="" class="formulario-brief">
                <div class="brief-tipo">
                    <label>
                        <input id="brief-tipo-producto" type="radio" class="option-input radio" name="example" checked />
                        Producto
                    </label>
                    <label>
                        <input  id="brief-tipo-servicio" type="radio" class="option-input radio" name="example" />
                        Servicio
                    </label>
                    <label>
                        <input  id="brief-tipo-responsabilidad_social" type="radio" class="option-input radio" name="example" />
                        Responsabilidad Social
                    </label>
                    </div>
                <div class="brief-entradas">
                    <input type="text" placeholder="Nombre de tu marca">
                    <select name="" id="rubro" required>
                        <option value="" disabled selected>Rubro</option>
                        <option value="Opcion2">Opcion2</option>
                        <option value="Opcion3">Opcion3</option>
                        <option value="Opcion4">Opcion4</option>
                        <option value="Opcion5">Opcion5</option>
                        <option value="Opcion6">Opcion6</option>
                    </select>
                    <select name="" id="categoria" required>
                        <option value="" disabled selected>Categoría</option>
                        <option value="Opcion2">Opcion2</option>
                        <option value="Opcion3">Opcion3</option>
                        <option value="Opcion4">Opcion4</option>
                        <option value="Opcion5">Opcion5</option>
                        <option value="Opcion6">Opcion6</option>
                    </select>
                    <select name="" id="ripo" required>
                        <option value="" disabled selected>Tipo</option>
                        <option value="Opcion2">Opcion2</option>
                        <option value="Opcion3">Opcion3</option>
                        <option value="Opcion4">Opcion4</option>
                        <option value="Opcion5">Opcion5</option>
                        <option value="Opcion6">Opcion6</option>
                    </select>
                    
                    <select name="" id="pais" required>
                        <option value="" disabled selected>País</option>
                        <option value="Opcion2">Opcion2</option>
                        <option value="Opcion3">Opcion3</option>
                        <option value="Opcion4">Opcion4</option>
                        <option value="Opcion5">Opcion5</option>
                        <option value="Opcion6">Opcion6</option>
                    </select>
                    <select name="" id="provincia"  required>
                        <option value="" disabled selected>Provincia</option>
                        <option value="Opcion2">Opcion2</option>
                        <option value="Opcion3">Opcion3</option>
                        <option value="Opcion4">Opcion4</option>
                        <option value="Opcion5">Opcion5</option>
                        <option value="Opcion6">Opcion6</option>
                    </select>
                    <select name="" id="distrito"  required>
                        <option value="" disabled selected>Distrito</option>
                        <option value="Opcion2">Opcion2</option>
                        <option value="Opcion3">Opcion3</option>
                        <option value="Opcion4">Opcion4</option>
                        <option value="Opcion5">Opcion5</option>
                        <option value="Opcion6">Opcion6</option>
                    </select>
                    <input type="text" placeholder="Competencia posicionada (3 marcas)">
                    <input type="text" placeholder="Link de tu fanpage">
                </div>
                <input id="btn-generar" class="btn-primary" type="submit" value="Generar PDF">
            </form>
            <div class="brief-específico-enlace">
                <p><span>¿Deseas un brief más específico? </span><a href="#brief-basico">Pincha aquí</a></p>
            </div>
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
                <button id="unetenos" class="btn-primary">
                    ¡Vamos!
                </button>
            </div>
        </section>
        <section id="contacto" class="contactanos">
            <div class="contactanos-item">
                <h3>DISPONIBLES LAS 24 HORAS</h3>
                <p><span class="icon-mobile"></span>+51947546772</p>
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
                    <button id="suscribete" class="btn-primary">
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
    <script>
        let btnEntrar = document.getElementById("btn-entrar"),
            btnRegister = document.getElementById("btn-register"),
            btnCloseModalLogin = document.getElementById("btn-close-login"),
            btnCloseModalRegister = document.getElementById("btn-close-register"),
            btnEntrar2 = document.getElementById("btn-entrar-movil"),
            btnEntrar3 = document.getElementById("unetenos");

        btnEntrar.addEventListener('click',function(){
            document.getElementById("modal--login").classList.add("modal-active");
        });

        btnRegister.addEventListener('click',function(){
            document.getElementById("modal--register").classList.add("modal-active");
        });

        btnEntrar2.addEventListener('click',function(){
            document.getElementById("modal--login").classList.add("modal-active");
        });

        btnEntrar3.addEventListener('click',function(){
            document.getElementById("modal--login").classList.add("modal-active");
        });

        btnCloseModalLogin.addEventListener('click',function(){
            document.getElementById("modal--login").classList.remove("modal-active");
        });     

        btnCloseModalRegister.addEventListener('click',function(){
            document.getElementById("modal--register").classList.remove("modal-active");
        });        
    </script>
</body>
</html>