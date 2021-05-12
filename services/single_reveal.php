<?php /* Template Name: Reveal Personalizado */ ?>
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
                        <a href="/reveal"
                            class="c-nav-2nd-lvl__item-link c-nav-2nd-lvl__item-link--active">Reveal</a>
                    </li>
                    <li class="c-nav-2nd-lvl__item">
                        <a href="/reach" class="c-nav-2nd-lvl__item-link ">Reach</a>
                    </li>
                    <li class="c-nav-2nd-lvl__item">
                        <a href="/renew" class="c-nav-2nd-lvl__item-link ">Renew</a>
                    </li>
                    <li class="c-nav-2nd-lvl__item">
                        <a href="/refresh" class="c-nav-2nd-lvl__item-link ">Refresh</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="c-hero-video-3 c-hero-video-3--alt">
            <div class="c-hero-video-3__body">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-10 offset-md-1 col-lg-7">
                            <header class="c-hero-video-3__heading">
                                <h1 class="c-hero-video-3__heading-text">
                                    LHH - Momentos de carrera clave
                                </h1>
                                <img class="c-hero-video-3__heading-image"
                                    src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-reveal-insight-white.svg">
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-md-10 offset-md-1 col-lg-6">
                            <p class="c-hero-video-3__text">
                                Cada persona tiene su propia historia única y LHH está ahí para cada momento de carrera clave.
                            </p>
                        </div>
                        <div class="col col-12 col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                            <div class="c-hero-video-3__cta">
                                <p class="c-hero-video-3__cta-paragraph">
                                <?php
                                    $mipost = $post;
                                    $args = array( 'numberposts' => 1, 'category' => 2, 'orderby' => 'rand', 'post_status' => 'publish', 'offset' => 1);
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
                            <iframe class="o-embed-video__player" width="560px" height="315px" src="https://www.youtube.com/embed/qxKLepu95pc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                            Nuestras evaluaciones brindan información procesable para el aquí y ahora que revelan la oportunidad.
                            En cada persona, en todos los niveles de la organización. </h2>
                        <div class="c-tabs__tabbar js-tabs__tabbar">
                            <div class="c-tabs__sticky"></div>
                            <ul class="c-tabs__tablist js-tabs__tablist">
                                <li class="c-tabs__tablist-item">
                                    <a class="c-tabs__tab" id="Soluciones-de-assessments"
                                        >Soluciones de assessments</a>
                                </li>
                            </ul>
                            <button class="c-tabs__prev js-tabs__prev o-icon o-icon--arrow"
                                aria-label="Scroll Left"></button>
                            <button class="c-tabs__next js-tabs__next o-icon o-icon--arrow"
                                aria-label="Scroll Right"></button>
                        </div>
                        <div class="c-tabs__panel js-tabs__panel" id="Soluciones-de-assessments">
                            <div class="container c-text-block">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-1">
                                        <div class="rich-text">
                                            <p><strong>Perspectivas accionables<br></strong>Tu talento representa el single.
                                                Elemento más grande del presupuesto operativo de su empresa, y su negocio '
                                                El crecimiento depende en gran medida de la calidad y la preparación de ese talento.Aún,
                                                ¿Cuánto lo sabes realmente?¿Tienes los datos y las ideas?
                                                ¿Necesita tomar decisiones e invertir en su gente con confianza?
                                            </p>
                                            <p>Las evaluaciones de talento y las soluciones de análisis de LHH lo traen en profundidad,
                                                Objetivo, ideas accionables en su gente, por lo que se informa.
                                                decisiones sobre quiénes son los mejores candidatos para contratar, quiénes son los
                                                empleados con el mayor potencial de éxito, y que los líderes tienen
                                                Lo que se necesita para conducir el éxito de su empresa.</p>
                                            <p><strong>Flexibilidad importa<br></strong>Con un rango completo, la mejor clase
                                                portafolio de evaluaciones psicométricas, multi-clasificatorias y de equipo, así como
                                                Simulaciones de trabajo y encuestas organizativas, entregamos ideas de talento.
                                                Contextualizado a su empresa y su cultura única.Nuestra
                                                Los modelos de liderazgo basados en la investigación se pueden adaptar a su empresa, y usted
                                                Puede elegir la mejor manera para que su gente acceda a las evaluaciones, en línea,
                                                a través de centros de evaluación, u otros canales preferidos.</p>
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