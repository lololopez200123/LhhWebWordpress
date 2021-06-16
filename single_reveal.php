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
                                En el competitivo mercado laboral de hoy en día, es más importante que nunca comprender las habilidades y capacidades de tu plantilla y realizar inversiones en talento inteligentes e informadas. LHH facilita el conocimiento que necesitas para tomar mejores decisiones en materia de contratación, desarrollo, coaching, reubicación y ascensos..
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
                           Tu estrategia empresarial y las personas que la ejecutan son únicas. ¿Lo es tu programa de assessment?
. </h2>
                        <div class="c-tabs__tabbar js-tabs__tabbar">
                            <div class="c-tabs__sticky"></div>
                            <ul class="c-tabs__tablist js-tabs__tablist">
                                <li class="c-tabs__tablist-item">
                                    <a class="c-tabs__tab" id="Resumen"
                                        >Resumen</a>
                                </li>
                            </ul>
                            <button class="c-tabs__prev js-tabs__prev o-icon o-icon--arrow"
                                aria-label="Scroll Left"></button>
                            <button class="c-tabs__next js-tabs__next o-icon o-icon--arrow"
                                aria-label="Scroll Right"></button>
                        </div>
                        <div class="c-tabs__panel js-tabs__panel" id="Resumen">
                            <div class="container c-text-block">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-1">
                                        <div class="rich-text">
											
											<p><img src="/wp-content/uploads/2021/06/resumen.jpg" width="990" height="557"/> </p>
												
                                            <p><strong>Assessment y análisis<br></strong>
                                                El talento de tu organización, representa el mayor presupuesto operativo de tu empresa.
												El crecimiento de tu negocio depende en gran medida de la calidad y la formación de dicho
												talento. Y, sin embargo, ¿cuánto sabes realmente sobre él?  ¿Dispones de los datos y los
												conocimientos necesarios para tomar decisiones e invertir en personal con confianza?
                                            </p>
                                            <p>Las soluciones de evaluación y análisis del talento de LHH te proporcionan información
												pormenorizada, objetiva y factible sobre las personas, para que puedas tomar decisiones
												informadas sobre los mejores candidatos que puedes contratar, los empleados con más
												probabilidades de triunfar y los líderes que tienen lo que hace falta para impulsar el
												éxito de la empresa.</p>
                                            <p><strong>Flexibilidad importa<br></strong>Gracias a una extensa gama de herramientas de
												evaluación—compuesta por evaluaciones psicométricas, múltiples y de equipo, así como 
												por simulaciones de trabajo y encuestas sobre la organización—, somos capaces de ofrecer
												información sobre el talento adaptada al contexto de tu empresa y tu cultura única. 
												Nuestros modelos de liderazgo basados en la investigación pueden adaptarse a tu empresa 
												y puedes elegir la mejor manera para que tus empleados accedan a las evaluaciones: online,
												desde centros de evaluación o a través de otros canales preferidos.</p>
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