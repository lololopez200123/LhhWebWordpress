<?php /* Template Name: Renew Personalizado */ ?>
<?php
get_header();
?>
<?php
wp_enqueue_style('Servicios Personalizado', get_stylesheet_directory_uri().'/servicios.css');
?>
        <nav class="c-nav-2nd-lvl">
            <div class="c-nav-2nd-lvl__gradient">
                <ul class="c-nav-2nd-lvl__container container">
                    <li class="c-nav-2nd-lvl__item">
                        <a href="/reveal" class="c-nav-2nd-lvl__item-link ">Reveal</a>
                    </li>
                    <li class="c-nav-2nd-lvl__item">
                        <a href="/reach" class="c-nav-2nd-lvl__item-link ">Reach</a>
                    </li>
                    <li class="c-nav-2nd-lvl__item">
                        <a href="/renew" class="c-nav-2nd-lvl__item-link c-nav-2nd-lvl__item-link--active">Renew</a>
                    </li>
                    <li class="c-nav-2nd-lvl__item">
                        <a href="/refresh" class="c-nav-2nd-lvl__item-link ">Refresh</a>
                    </li>
                </ul>
            </div>
        </nav>
    <main>
        <section class="c-hero-video-3 c-hero-video-3--alt">
            <div class="c-hero-video-3__body">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-10 offset-md-1 col-lg-7">
                            <header class="c-hero-video-3__heading">
                                <h1 class="c-hero-video-3__heading-text">
                                    El nuevo ROI: un retorno de los individuos.
                                </h1>
                                <img class="c-hero-video-3__heading-image"
                                    src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-renew-skills-white.svg">
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-md-10 offset-md-1 col-lg-6">
                            <p class="c-hero-video-3__text">
                                Las decisiones de personal son más personales que nunca.Bienvenido al nuevo ROI, un retorno de
                                individuos.
                            </p>
                        </div>
                        <div class="col col-12 col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                            <div class="c-hero-video-3__cta">
                                <p class="c-hero-video-3__cta-paragraph">
                                <?php
                                    $mipost = $post;
                                    $args = array( 'numberposts' => 1, 'category' => 425, 'orderby' => 'rand', 'post_status' => 'publish', 'offset' => 1);
                                    $rand_posts = get_posts( $args );
                                foreach( $rand_posts as $post ) : ?>
                                        <?php echo the_title(); ?>
                                <?php endforeach; ?>
                                </p>
                                <?php $post = $mipost; ?>
                                <?php foreach( $rand_posts as $post ) : ?>
                                <a href="<?php echo the_permalink(); ?>"
                                    target="" class="o-cta o-cta--light">
                                    Leer el artículo
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-md-10 offset-md-1">
                            <div class="o-embed-video c-hero-video-3__video">
                                <iframe class="o-embed-video__player" width="560px" height="315px" src="https://www.youtube.com/embed/eNIVZ_q_TS4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container c-tabs">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="js-tabs">
                        <h2 class="c-tabs__heading">
                            Construyendo la fuerza laboral verdaderamente renovable.
                        </h2>
                        <div class="c-tabs__tabbar js-tabs__tabbar">
                            <div class="c-tabs__sticky"></div>
                            <ul class="c-tabs__tablist js-tabs__tablist">
                                <li class="c-tabs__tablist-item">
                                    <a class="c-tabs__tab" id="tab-Reskilling-&amp;-upskilling"
                                        >Reskilling & Upskilling</a>
                                </li>
                                <li class="c-tabs__tablist-item">
                                    <a class="c-tabs__tab" id="Movilidad-de-carrera-interna" >Movilidad de carrera interna</a>
                                </li>
                            </ul>
                            <button class="c-tabs__prev js-tabs__prev o-icon o-icon--arrow"
                                aria-label="Scroll Left"></button>
                            <button class="c-tabs__next js-tabs__next o-icon o-icon--arrow"
                                aria-label="Scroll Right"></button>
                        </div>
                        <div class="c-tabs__panel js-tabs__panel" id="Reskilling-and-upskilling">
                            <div class="container c-text-block">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-1">
                                        <div class="rich-text">
                                            <p>Cambiando de un reemplazable a una fuerza laboral renovable significa creer en
                                                el poder infinito y el potencial de cada ser humano para crecer y
                                                Re-inventarse a sí mismos a través de sus carreras.Pero para hacer eso,
                                                Los individuos necesitan ayuda de sus empleadores.Desarrollo de talentos internos
                                                y la movilidad puede estar entre las formas más efectivas que los empleadores puedan
                                                ayudar a su genteY los más rentables.</p>
                                            <p>La movilidad profesional es más que abordar las poblaciones en riesgo o la conducción.
                                                Promociones, IT & RSquo; s sobre la empleabilidad de toda la vida a través de continuo
                                                desarrollo de empleado.En LHH, sabemos que las habilidades futuras son constantemente.
                                                cambiando & ndash; y creemos que la mejor manera de abordar las necesidades de habilidad es
                                                Requisitos de apoyo ahora, mientras que también planea para el futuro.</p>
                                            <p>Nuestro enfoque aborda las necesidades de redistribución inmediata y contiene
                                                Papel de ruta centrada en el futuro para el desarrollo de la carrera en curso en una sola
                                                plataforma que ofrece una experiencia inconsútil y consistente en tres
                                                viajes. </p>
                                            <p>Puede priorizar uno, todos o una combinación de estos viajes, y su
                                                Los empleados pueden cambiar de una experiencia a otra y ndash; como ellos
                                                Navegar momentos clave de carrera.</p>
                                            <p>Y para aquellos empleados que no aterrizan internamente y cuyo viaje.
                                                Los transita fuera de su organización, tenemos un usuario perfecto.
                                                Experiencia de la movilidad profesional hasta la previsión con nuestro activo.
                                                Soporte de colocación.</p>
                                            <div>&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="c-tabs__panel js-tabs__panel" id="Movilidad-de-carrera-interna">
                            <div class="container c-text-block">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-1">
                                        <div class="rich-text">
                                            <p>Nuestros viajes de movilidad profesional son apoyados a través de nuestras inversiones en
                                                Reskilling y UPSkilling de la Asamblea General y el aprendizaje de LinkedIn®
                                                y nuestra asociación con FAETHM, una plataforma AI Analytics que puede ayudar
                                                Piniendo las necesidades de reskilling y las poblaciones objetivo.</p>
                                            <p><strong>LinkedIn Learning<br></strong>Más de 18,000 cursos autónomos enseñados por expertos en la industria en las siguientes categorías:</p>
                                            <ul>
                                                <li>Software</li>
                                                <li>Creative</li>
                                                <li>Business skills</li>
                                            </ul>
                                            <div>&nbsp;</div>
                                            <p><strong>Asamblea General<br></strong>Evaluaciones, UPSKILLING, Y
                                                Reskilling inmersivo para transformar conjuntos de habilidades para empleados en lo siguiente
                                                ÁREAS:</p>
                                            <ul>
                                                <li>Marketing</li>
                                                <li>Data</li>
                                                <li>Coding</li>
                                                <li>Product</li>
                                                <li>Design</li>
                                            </ul>
                                            <p><strong><br>Nutrición<br></strong>Una herramienta de análisis predictivo que nos ayuda.
                                                Objetase a nuestras soluciones de LHH para apoyar el impacto de la fuerza laboral de la emergencia
                                                tecnologías.</p>
                                            <p>A través de esta asociación Podemos ayudar a las organizaciones a segmentar su audiencia.
                                                e identificar:</p>
                                            <ul>
                                                <li>¿Qué tecnologías emergentes crean oportunidad en la fuerza laboral?</li>
                                                <li>Funciones más afectados por tecnologías emergentes.</li>
                                                <li>Rutas de habilidad para construir una fuerza laboral del futuro.</li>
                                            </ul>
                                            <div>&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="o-text-section">
        </section>
        <div class="c-cta-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-xl-7">
                        <h2 class="c-cta-block__heading">¿Quiere aprender formas inteligentes de impulsar el desempeño de su empresa?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="c-cta-block__item">
                                    <div class="c-cta-block__icon">
                                        <span class="o-icon o-icon--abt-passion"></span>
                                    </div>
                                    <div class="c-cta-block__text">
                                        <span>Podemos ayudarlo a aprovechar la oportunidad.</span>
                                        <a class="o-cta o-cta--light" title="" href="/contacto"
                                            target="">Ponerse en contacto</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="c-cta-block__item">
                                    <div class="c-cta-block__icon">
                                        <span class="o-icon o-icon--abt-communities"></span>
                                    </div>
                                    <div class="c-cta-block__text">
                                        <span>Con más de 380 oficinas en todo el mundo, tenemos una ubicación cerca de usted</span>
                                        <a class="o-cta o-cta--light" title="" href="/contacto" target="">Encuentra una oficina</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/tabs.js"></script>
<?php
get_footer();
?>