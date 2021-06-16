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
                                Testimonios de candidatos de Outplacement de LHH
                            </h1>
                            <img class="c-hero-video-3__heading-image"
                                src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-refresh-careers-white.svg">
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-md-10 offset-md-1 col-lg-6">
                        <p class="c-hero-video-3__text">
                            Candidatos reales de todo el mundo hablan sobre sus experiencias con LHH y cuentan cómo los ayudamos a lograr cumplir sus objetivos profesionales.
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
                        <p>Los procesos de transición de carrera son diferentes para cada persona. Independientemente del rol que tengan en su empresa, nuestras soluciones ofrecen una experiencia que se adapta a cada persona de forma individualizada.</p>
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
                                <a class="c-tabs__tab" id="Nuestro-enfoque">Nuestro enfoque</a>
                            </li>
                            <li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Entry-Level">Entry Level</a>
                            </li>
                             <li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Profesionales-y-gerentes">Profesionales y gerentes</a>
						     </li>
							 <li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Ejecutivos-Senior-(ICEO)">Ejecutivos Senior (ICEO)</a>
                            </li>
							<li class="c-tabs__tablist-item">
                                <a class="c-tabs__tab" id="Nuestro-equipo-de-especialistas-y-tecnología">Nuestras Tecnologías</a>
                            </li>
							
							
                        </ul>
                        <button class="c-tabs__prev js-tabs__prev o-icon o-icon--arrow"
                            aria-label="Scroll Left"></button>
                        <button class="c-tabs__next js-tabs__next o-icon o-icon--arrow"
                            aria-label="Scroll Right"></button>
                    </div>
                   
					<div class="c-tabs__panel js-tabs__panel" id="Nuestro-enfoque">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>
											En LHH, creemos en el poder infinito de cada
											persona para crecer y adaptarse. Reinventarse y afrontar el futuro,
											no con temor o inquietud, sino con fuerza y optimismo. </p>
                                         <p>Nuestra filosofía está basada en más de cincuenta años de
	                                        experiencia y conocimiento directo del mercado.</p>
                                        <p>Brindamos apoyo, conocimiento, motivación, recursos individualizados e
										   integrales para todas las personas para obtener más oportunidades que nunca,
										   a través de una experiencia personalizada, impulsada por la tecnología y por un grupo
										   humano que estará en cada paso del proceso
                                        </p>
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    <div class="c-tabs__panel js-tabs__panel" id="Entry-Level">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p> 
											Los trabajadores principiantes frecuentemente
											son los más afectados por una recesión económica y
											requieren apoyo tras la desvinculación para garantizar su bienestar.</p>
                                        <p>En algunos casos, pueden tener menos habilidades digitales, lo que dificulta
											encontrar trabajo rápidamente por su cuenta.</p>
                                        <p>Nuestro programa LHH Compass está diseñado para satisfacer las necesidades de
											sus empleados entry level porque ofrece orientación y apoyo personalizado, y
											les brinda contactos directos para poder acceder a los trabajos disponibles 
											en el mercado laboral actual.</p>
                                        <p>LHH Compass refleja más de 50 años de experiencia que LHH tiene como líder en
											transición de carrera y gestión de carrera. Estamos aquí para ayudar a sus 
											empleados en cada paso de su búsqueda laboral.</p>
										<p>Entendemos que la transición laboral puede parecer un sube y baja emocional.
										   Es por eso que nuestro enfoque ayudará a sus trabajadores a poner en marcha
											sus esfuerzos y los guiará hacia su próxima oportunidad laboral.</p>
                                    
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="c-tabs__panel js-tabs__panel" id="Profesionales-y-gerentes">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>
                                           Los profesionales y gerentes están orientados a la carrera y la profesión
										   y persiguen metas personales y caminos de aprendizaje para avanzar hacia 
										   nuevas oportunidades.</p>
                                         <p>Cuando estos trabajadores necesitan servicios de transición de carrera,
											requieren una red de contactos con oportunidades que tal vez no puedan
											alcanzar por sí mismos y apoyo para mantenerse motivados y comprometidos.</p>
                                        <p><strong>Evolución: Del Outplacement hacia el Active Placement®</strong><br>
											Si bien el coaching de carrera personal sigue siendo el centro de todo
											lo que hacemos, el servicio de Outplacement se ha convertido en un proceso
											de transición personalizado para quien esté optimizando los métodos de 
											contratación y reclutamiento digitales actuales. Con la mejora de las habilidades
											(upskilling) de LinkedIn® Learning and General Assembly, estamos ayudando a los
											candidatos a conseguir los trabajos más demandados de la actualidad.
                                        </p>
										<p> Nuestra estrategia única de Personal Branding y Networking ayuda radicalmente
											a las personas a conseguir trabajo mediante el apoyo que brindamos, reduciendo
											el tiempo de inserción laboral en un 65%. Con LHH, su personal tendrá acceso a
											oportunidades laborales inéditas en empresas de todo el mundo, incluidas también
											nuestras 7.000 empresas clientes y más. </p>
										<p><strong>Cada persona puede buscar:</strong> trabajos full time, emprendimientos, jubilación activa
											o un portfolio de carreras. Más del 90% de los candidatos que logran conseguir una
											contratación dicen que obtuvieron un trabajo similar o mejor, con un salario similar
											o mejor. </p>
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
						<div class="c-tabs__panel js-tabs__panel" id="Ejecutivos-Senior-(ICEO)">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p>
                                           Los Ejecutivos Senior toman decisiones difíciles, asumen riesgos, desafían a otros a
										   dar lo mejor de sí mismos y sacrifican innumerables horas para impulsar el éxito de
										   la empresa. Llegado el momento de su partida, es un buen negocio asegurarse que deje
										   la compañía con el respeto y el apoyo que se ha ganado.
                                           El Centro Internacional de Opciones Ejecutivas (ICEO) es una práctica global y especializada
										  , dedicada exclusivamente a carreras ejecutivas. Tenemos una gran experiencia con las 
											decisiones organizativas y los complejos desafíos asociados a las transiciones de liderazgo
											senior y las carreras ejecutivas.</p>
                                         <p>Los clientes de ICEO reciben apoyo de asesoría integral, contactos y recursos para todas
											las opciones profesionales, incluidos roles corporativos, roles de capital privado y de
											riesgo, emprendimientos de negocios, trabajo de asesoría, carreras alternativas, juntas
											directivas, portfolio de carreras y jubilación activa.</p>
                                        <p><strong>ICEO ofrece una experiencia superior para líderes senior</strong><br></p>
											<p>En el centro de cada equipo personalizado se encuentra el Asesor de ICEO, un partner
											de confianza que aporta una amplia experiencia con líderes senior, mientras exploran y
											persiguen las mejores opciones profesionales. Nuestros asesores de ICEO son líderes
											empresariales de alto nivel, board members, socios de firmas de servicios profesionales
											y empresarios exitosos. Acompañamos a los líderes en transición con un equipo dedicado
											y personalizado de asesores, expertos en la materia, mentores, ex alumnis, especialistas
											de la industria y colegas de la firma.
                                        </p>
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="c-tabs__panel js-tabs__panel" id="Nuestro-equipo-de-especialistas-y-tecnología">
                        <div class="container c-text-block">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-1">
                                    <div class="rich-text">
                                        <p><strong>La relación del Coach</strong></p>
                                           <p>El coaching es el núcleo de nuestros servicios. Nuestros coaches certificados trabajan
											  con los candidatos para aclarar los objetivos y crear un plan de acción y ayudarlos así
											  a encontrar las oportunidades que mejor se adapten a sus habilidades e intereses..</p>
										<p><strong>Hoja de ruta personalizada</strong></p>
                                          <p>Una de las primeras cosas que hacen los candidatos es registrarse en nuestra Career Resource
											Network (CRN), donde pueden seleccionar un tipo de transición de carrera. El CRN está
											organizado para ayudar a los candidatos a comprender qué hacer en cada paso de su transición,
											con videos, seminarios web, eventos profesionales virtuales, herramientas de investigación y más,
											todo disponible y accesible desde un dispositivo móvil o computadora.</p>
										<p><strong>Posicionamiento en buscadores o SEO (del inglés Search Engine Optimization),
											Currículum optimizado y perfil</strong></p>
                                        <p>Nuestro equipo de profesionales especialistas en Branding ayuda a los candidatos a crear un
										   currículum vitae optimizado para motores de búsqueda y un perfil de LinkedIn, otorgándoles
										   una mayor visibilidad ante los reclutadores.</p>
										<p><strong>Un mercado de Networking exclusivo (red de contactos)</strong></p>
										<p>Con un nuevo currículum en mano, los candidatos pueden cargarlos en nuestro exclusivo
										   Digital Talent Exchange (o DTE), donde los empleadores publican oportunidades laborales
										   y buscan activamente contratar personal.
                                        </p>
										<p><strong>Promocionamos candidatos a empleadores</strong></p>
										<p>Una vez que se cargan los currículums, nuestros Talent Promoters se contactan con los
										   empleadores en nombre de los candidatos y luego los  promociona para las posiciones
										   laborales que cumplen con sus criterios.
                                        </p>
										<p><strong>Cursos gratuitos</strong></p>
										<p>LinkedIn® Learning and General Assembly ofrece miles de cursos para ayudar a los candidatos
										a adquirir nuevas habilidades.
                                        </p>
										
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