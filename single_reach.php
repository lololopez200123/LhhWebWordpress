<?php /* Template Name: Reach Personalizado */ ?>
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
                <a href="/reach" class="c-nav-2nd-lvl__item-link c-nav-2nd-lvl__item-link--active">Reach</a>
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
                                src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-reach-potential-white.svg">
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-10 offset-md-1 col-lg-6">
                        <p class="c-hero-video-3__text">
                            Cada persona tiene su propia historia única y LHH está ahí para cada momento de carrera clave. </p>
                    </div>
                    <div class="col col-12 col-md-10 offset-md-1 col-lg-4 offset-lg-0">
                        <div class="c-hero-video-3__cta">
                            <p class="c-hero-video-3__cta-paragraph">
                            <?php
                                $mipost = $post;
                                $args = array( 'numberposts' => 1, 'category' => 453, 'orderby' => 'rand', 'post_status' => 'publish', 'offset' => 1);
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
                                <a class="c-tabs__tab" id="Leadership-Development" >Leadership Development</a>
                            </li>
                            <li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Cambio-y-Cultura"
                                    >Cambio y Cultura</a>
                            </li>
                            <li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Coaching">Coaching</a>
                            </li>
                            <li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Diversidad-e-Inclusion" >Diversidad e Inclusión</a>
                            </li>
                        </ul>
                        <button class="c-tabs__prev js-tabs__prev o-icon o-icon--arrow"
                            aria-label="Scroll Left"></button>
                        <button class="c-tabs__next js-tabs__next o-icon o-icon--arrow"
                            aria-label="Scroll Right"></button>
                    </div>
                    <div class="c-tabs__panel js-tabs__panel" id="Leadership-Development">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>En LHH, nuestro & nbsp;Amplia investigación y experiencia muestran que exitoso
                                            El desarrollo de liderazgo no se logra a través de la aplicación de la competencia.
                                            modelos, officios múltiples, o teorías complejas de enseñanza, pero más bien a través de
                                            Proporcionando a los líderes las habilidades que necesitan para activar sus proactivos.
                                            Personalidad en cada momento de carrera clave.</p>
                                        <p>Tomamos un enfoque centrado en el humano, mejorado por AI para garantizar que cada líder tenga
                                            acceso al último contenido más reciente, más relevante y curado disponible, a través de un
                                            rango de modalidades tales como evaluaciones, sesiones lideradas por instructores y
                                            E-learning, mejorado y sostenido a través de entrenamiento individual y / o grupal.
                                        </p>
                                        <p>Nuestro enfoque para ayudar a los líderes a alcanzar su máximo potencial se basa en algunos
                                            principios básicos:</p>
                                        <p><strong>Cada líder es extraordinario <br></strong>Su viaje de desarrollo
                                            Debería ser igual de único como lo son.Piensa en Netflix para el mundo del talento.
                                            desarrollo.</p>
                                        <p><strong>Nunca aprendes solo<br></strong>Los humanos son seres intensamente sociales.y
                                            Aprenda mejor en el contexto de su entorno y dentro de una red.La
                                            Soluciones más adhesivas Use esto a pleno efecto.</p>
                                        <p><strong>Experiencia a tu alcance <br></strong>Dominar la llave
                                            Las transiciones en cualquier carrera no se trata de aprender de un gurú.Se trata de
                                            acceder al aprendizaje que necesita, cuando lo necesite, donde sea que le pase
                                            ser.</p>
                                        <p><strong>Entrenamiento en el corazón<br></strong>El entrenamiento entrega el más alto
                                            beneficios individuales y comerciales durante un período de tiempo sostenido y nosotros
                                            Cree que todos pueden beneficiarse del entrenamiento.</p>
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-tabs__panel js-tabs__panel" id="Cambio-y-Cultura">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>El mundo ha cambiado, y sus líderes y gerentes necesitan adoptar y
                                            Desarrollar nuevas competencias y comportamientos como una mayor empatía y EQ,
                                            Resiliencia, agilidad y liderazgo virtual..</p>
                                        <p>El estado actual del desarrollo de liderazgo se basa en la teoría defectuosa.
                                            Que todos siguen el mismo camino lineal para alcanzar su máximo potencial.
                                            Pero en el mundo de los negocios de hoy y Rsquo, no hay líneas rectas en el camino.
                                            hacia un gran liderazgo.</p>
                                        <p>Es hora de que sea un enfoque radicalmente diferente que funciona para los líderes y
                                            sus empresas. </p>
                                        <p>Diseñamos intervenciones de desarrollo alrededor de las transiciones clave y
                                            Las reinvenciones se enfrentan a cada líder, para que puedan alcanzar su máximo potencial.
                                            a través de cada etapa de sus carreras no lineales, fluidas e impredecibles.</p>
                                        <ul>
                                            <li>Contenido flexible y modular distribuido a lo largo del tiempo.</li>
                                            <li>Experiencias de aprendizaje verdaderamente personalizadas, combinadas enfocadas en la reflexión.
                                                y cambio de hábito</li>
                                            <li>Equilibrio apropiado entre desarrollar fortalezas y gestión de desvíos.
                                            </li>
                                            <li>La activación y la transferencia son los héroes y ndash;no el evento de aprendizaje
                                            </li>
                                        </ul>
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-tabs__panel js-tabs__panel" id="Coaching">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>Nuestros módulos de desarrollo de liderazgo cobran vida a través del aprendizaje adaptativo.
                                            Viajes que permiten el desarrollo personalizado en los momentos clave de la carrera.
                                            Cada líder experimenta. </p>
                                        <p><strong>Integrando<br></strong>Cuando los líderes son nuevos en un equipo, función o
                                            Organización, les ayudamos a intervenir con una mayor autoconciencia para construir.
                                            Relaciones y golpeó el suelo corriendo.</p>
                                        <p><strong>Elevar<br></strong>Cuando los líderes están atascados y no pueden moverse más allá
                                            Donde están actualmente, les ayudamos a explorar las barreras y el paso.
                                            reiniciar sus carreras.</p>
                                        <p><strong>Navegar<br></strong>Cuando llega el momento de llevar a otros, nos ayudamos.
                                            Los líderes se mueven a través de las aguas entrecortadas de la vida organizacional, donde el éxito
                                            Se mide en términos de la salida de los demás.</p>
                                        <p><strong>Acelerar <br></strong>Cuando reconoces el potencial de liderazgo.
                                            De los que están en la cúspide de la grandeza, los ayudamos a lograr Superstar.
                                            estado.</p>
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-tabs__panel js-tabs__panel" id="Diversidad-e-Inclusion">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>El entrenamiento ofrece el mayor impacto individual y empresarial sobre un sostenido
                                            período.Por eso creemos que todos, y todos los negocios, pueden
                                            Beneficio del entrenamiento.</p>
                                        <p>Con una historia de 50 años en el entrenamiento centrado en humanos y un banco global de más
                                            de 2.000 entrenadores, ofrecemos un espectro completo de soluciones de entrenamiento para ayudar
                                            Los líderes y organizaciones alcanzan su potencial. </p>
                                        <p><strong>Premier Executive Coaching <br></strong>Para C-Suite, Miembros de la Junta,
                                            y ejecutivos que buscan tomar su negocio o carrera en una nueva dirección,
                                            Nuestro principal entrenador ejecutivo entrega el apoyo a medida, el guante blanco. </p>
                                        <p><strong>Firma 1: 1 Coaching <br></strong>Para personas que buscan
                                            Personalizado, nuestra firma 1: 1 Coaching permite los objetivos adaptados y
                                            Aprovecha las evaluaciones que apoyan el crecimiento.. </p>
                                        <p><strong>Entrenamiento grupal <br></strong>Para equipos in-tact, equipos de proyectos y
                                            Grupos que buscan avanzar su desempeño, nuestras soluciones de entrenamiento de grupo.
                                            proporcionar una base para que el equipo y los grupos colaboren de manera más efectiva
                                            A través de ideas, conciencia y reflexión compartida..</p>
                                        <p><strong>Construir una cultura de entrenamiento<br></strong>Para las organizaciones que buscan
                                            Avanzar su desempeño a través de entrenadores, comentarios y confianza, podemos ayudar
                                            Construye capacidades de coaching en líderes en todo su negocio.Nuestra
                                            Los programas se pueden integrar con los programas de desarrollo existentes o usados para
                                            Desarrollar un grupo internacional certificado por la Federación de Federación.
                                            entrenadores.</p>
                                        <div><br></div>
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