<?php /* Template Name: Refresh Personalizado */ ?>
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
                <a href="/renew" class="c-nav-2nd-lvl__item-link ">Renew</a>
            </li>
            <li class="c-nav-2nd-lvl__item">
                <a href="/refresh" class="c-nav-2nd-lvl__item-link c-nav-2nd-lvl__item-link--active">Refresh</a>
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
                                Testimonios de candidatos de sustitución de LHH
                            </h1>
                            <img class="c-hero-video-3__heading-image"
                                src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-refresh-careers-white.svg">
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-10 offset-md-1 col-lg-6">
                        <p class="c-hero-video-3__text">
                            Candidatos reales de todo el mundo hablan sobre sus experiencias con LHH y cómo
                            les ayudó a alcanzar sus metas profesionales únicas.
                        </p>
                    </div>
                    <div class="col col-12 col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                    <div class="c-hero-video-3__cta">
                            <p class="c-hero-video-3__cta-paragraph">
                            <?php
                                $mipost = $post;
                                $args = array( 'numberposts' => 1, 'category' => 424, 'orderby' => 'rand', 'post_status' => 'publish', 'offset' => 1);
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
                            <iframe class="o-embed-video__player" width="560px" height="315px" src="https://www.youtube.com/embed/reo-B_KdB2A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="o-text-section">
        <div class="container c-text-block">
            <div class="row">
                <div class="col-lg-8 offset-lg-1">
                    <div class="rich-text">
                        <h1>Las transiciones de carrera son diferentes para cada persona</h1>
                        <p>No importa qué rol tengan en su organización, nuestras soluciones ofrecen una experiencia
                            que se adapta a cada persona individualmente.</p>
                        <div>&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container c-tabs">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="js-tabs">
                    <div class="c-tabs__tabbar js-tabs__tabbar">
                        <div class="c-tabs__sticky"></div>
                        <ul class="c-tabs__tablist js-tabs__tablist">
                            <li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Outplacement">Outplacement</a>
                            </li>
                            <li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Senior-Executives-(ICEO)">Senior Executives (ICEO)</a>
                            </li>
                            
                        </ul>
                        <button class="c-tabs__prev js-tabs__prev o-icon o-icon--arrow"
                            aria-label="Scroll Left"></button>
                        <button class="c-tabs__next js-tabs__next o-icon o-icon--arrow"
                            aria-label="Scroll Right"></button>
                    </div>
                    <div class="c-tabs__panel js-tabs__panel" id="Outplacement">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>Para los empleados que no aterrizan internamente, apoyándolos a través de su
                                            La transición profesional es siempre lo correcto..</p>
                                        <p>En LHH, creemos en el poder infinito de cada ser humano para crecer y
                                            adaptar. Para reinventarse y afrontar el futuro, no con miedo o
                                            inquietud, pero en cambio con optimismo boyante. Es un
                                            filosofía basada en más de cincuenta años de experiencia y experiencia de
                                            primera mano
                                            conocimiento del mercado.</p>
                                        <p>Brindamos apoyo individualizado y completo, conocimiento, motivación y
                                            recursos para obtener más oportunidades que nunca, entregados en un
                                            experiencia a la medida, habilitada por la tecnología y dirigida por humanos
                                        </p>
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    <div class="c-tabs__panel js-tabs__panel" id="Senior-executives-(ICEO)">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>Los ejecutivos principales toman decisiones difíciles, toman riesgos, desafían a otros a
                                            Sé lo mejor posible, y sacrifiquen innumerables horas para impulsar la de su empresa.
                                            éxito.Cuando llegue el momento de su partida, es un buen negocio para
                                            Asegúrese de que se vayan con el respeto y el apoyo que han ganado.</p>
                                        <p>El Centro Internacional de Opciones Ejecutivas (ICOO) es global.
                                            Práctica boutique dedicada exclusivamente a las carreras ejecutivas.Fueron
                                            Profundamente experimentado con las decisiones organizativas y el complejo.
                                            DESAFÍOS ASOCIADOS CON TRANSICIONES Y EJECUTIVOS DE LIDERAZGO SUPERIOR
                                            Carreras. </p>
                                        <p>Los clientes de ICOE reciben apoyo de asesoramiento integral, conexiones y
                                            Recursos para todas las opciones de carrera, incluidos los roles corporativos, privado.
                                            Funciones de capital de capital y riesgo, trabajo de asesoramiento, inicio o compra.
                                            Un negocio, carreras alternativas, servicio de mesa, carreras de cartera y
                                            Retiro activo.</p>
                                        <p><strong>ICOO ofrece una experiencia superior para Senior
                                                líderes<br></strong>En el centro de cada equipo personalizado es el
                                            Ice ice advisor, un socio de confianza que brinda una amplia experiencia en
                                            asociándose con líderes senior mientras exploran y persiguen su carrera
                                            Opciones.Nuestros asesores de ICOO se realizan líderes de negocios mayores,
                                            Miembros de la junta, socios de servicios profesionales de servicios profesionales y éxito
                                            Emprendedores.Los rodeamos con un equipo dedicado, a medida de ICOO.
                                            Asesores, Expertos de Materias, Mentores, Alumnos, Especialistas en la Industria,
                                            y amigos de la firma (no sepa si "amigos de la firma" agrega
                                            valor.&nbsp;<br></p>
                                        <div><a href="http://lhh.com/iceo">Aprende más </a></div>
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
    <div class="c-cta-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xl-7">
                    <h2 class="c-cta-block__heading">¿Quiere aprender formas inteligentes de impulsar el desempeño de su
                        empresa?</h2>
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
                                    <a class="o-cta o-cta--light" title="" href="/contacto" target="">Ponerse en
                                        contacto</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="c-cta-block__item">
                                <div class="c-cta-block__icon">
                                    <span class="o-icon o-icon--abt-communities"></span>
                                </div>
                                <div class="c-cta-block__text">
                                    <span>Con más de 380 oficinas en todo el mundo, tenemos una ubicación cerca de
                                        usted</span>
                                    <a class="o-cta o-cta--light" title="" href="/contacto" target="">Encuentra una
                                        oficina</a>
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