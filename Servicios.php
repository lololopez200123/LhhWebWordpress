<?php /* Template Name: Servicios Personalizado */ ?>
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
                <a href="<?php get_stylesheet_directory_uri(); ?>/reveal" class="c-nav-2nd-lvl__item-link">Reveal</a>
            </li>
            <li class="c-nav-2nd-lvl__item">
                <a href="<?php get_stylesheet_directory_uri(); ?>/reach" class="c-nav-2nd-lvl__item-link">Reach</a>
            </li>
            <li class="c-nav-2nd-lvl__item">
                <a href="<?php get_stylesheet_directory_uri(); ?>/renew" class="c-nav-2nd-lvl__item-link">Renew</a>
            </li>
            <li class="c-nav-2nd-lvl__item">
                <a href="<?php get_stylesheet_directory_uri(); ?>/refresh" class="c-nav-2nd-lvl__item-link">Refresh</a>
            </li>
        </ul>
    </div>
</nav>
<main>
    <section class="c-boxes">
        <div class="container">
          <div class="row">
            <div class="col col-12 col-md-9">
              <h2 class="c-boxes__heading">Cómo apoyamos a sus empleados</h2>
            </div>
          </div>
          <div class="c-boxes__container">
            <div class="c-boxes__item">
              <div class="c-boxes__picture-container">
                <picture class="c-boxes__picture">
                  <img
                    class="c-boxes__picture-image u-obj-fit--cover"
                    src="<?php bloginfo('stylesheet_directory'); ?>/-/media/lhh/usa/4R-reveal-header-1428x802.jpg"
                    alt="reveal"
                  />
                </picture>
              </div>
              <div class="c-boxes__content">
                <div class="c-boxes__logo-container">
                  <img
                    class="c-boxes__logo"
                    src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-reveal-insight.svg"
                    alt="logo"
                  />
                </div>
                <div class="c-boxes__txt" style="font-size:0.93em">
                  Assessments que brindan información & insights fáciles de contextualizar en el aquí y ahora; revelando las oportunidades que tienen las personas, en todos los niveles de la organización.
                </div>
                <a
                  class="c-boxes__cta o-cta o-cta--purple"
                  href="<?php get_stylesheet_directory_uri(); ?>/reveal"
                  target=""
                  title=""
                  >Leer Mas
                </a>
              </div>
            </div>
            <div class="c-boxes__item">
              <div class="c-boxes__picture-container">
                <picture class="c-boxes__picture">
                  <img
                    class="c-boxes__picture-image u-obj-fit--cover"
                    src="<?php bloginfo('stylesheet_directory'); ?>/-/media/lhh/usa/4R-reach-header-1428x802.jpg"
                    alt="reach"
                  />
                </picture>
              </div>
              <div class="c-boxes__content">
                <div class="c-boxes__logo-container">
                  <img
                    class="c-boxes__logo"
                    src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-reach-potential.svg"
                    alt="logo"
                  />
                </div>
                <div class="c-boxes__txt" style="font-size:0.93em">
                  Intervenciones de desarrollo modular y digitales que no se enfocan en un set de habilidades estáticas, sino en ayudar a las personas a transitar los momentos clave de la carrera profesional que todo líder enfrenta.
                </div>
                <a
                  class="c-boxes__cta o-cta o-cta--purple"
                  href="<?php get_stylesheet_directory_uri(); ?>/reach"
                  target=""
                  title=""
                  >Leer Mas</a
                >
              </div>
            </div>
            <div class="c-boxes__item">
              <div class="c-boxes__picture-container">
                <picture class="c-boxes__picture">
                  <img
                    class="c-boxes__picture-image u-obj-fit--cover"
                    src="<?php bloginfo('stylesheet_directory'); ?>/-/media/lhh/usa/4R-renew-header-1428x802.jpg"
                    alt="renew"
                  />
                </picture>
              </div>
              <div class="c-boxes__content">
                <div class="c-boxes__logo-container">
                  <img
                    class="c-boxes__logo"
                    src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-renew-skills.svg"
                    alt="logo"
                  />
                </div>
                <div class="c-boxes__txt" style="font-size:0.93em">
                  Soluciones para ayudar a las personas a desarrollar nuevas habilidades y vincularlas con oportunidades dentro de su organización, para que puedan reinventarse para un nuevo mundo laboral:
                </div>
                <a
                  class="c-boxes__cta o-cta o-cta--purple"
                  href="<?php get_stylesheet_directory_uri(); ?>/renew"
                  target=""
                  title=""
                  >Leer Mas
                </a>
              </div>
            </div>
            <div class="c-boxes__item">
              <div class="c-boxes__picture-container">
                <picture class="c-boxes__picture">
                  <img
                    class="c-boxes__picture-image u-obj-fit--cover"
                    src="<?php bloginfo('stylesheet_directory'); ?>/-/media/lhh/usa/4R-refresh-header-1428x802.jpg"
                    alt="refresh"
                  />
                </picture>
              </div>
              <div class="c-boxes__content">
                <div class="c-boxes__logo-container">
                  <img
                    class="c-boxes__logo"
                    src="<?php bloginfo('stylesheet_directory'); ?>/logos/logo-refresh-careers.svg"
                    alt="logo"
                  />
                </div>
                <div class="c-boxes__txt" style="font-size:0.93em">
                  Apoyo individualizado inspirado en que la Transición de Carrera es una oportunidad para que las personas se apropien de sus carreras, con un abordaje a medida,  basado en la tecnología y generando una valiosa experiencia humana.
                </div>
                <a
                  class="c-boxes__cta o-cta o-cta--purple"
                  href="<?php get_stylesheet_directory_uri(); ?>/refresh"
                  target=""
                  title=""
                  >
                  Leer Mas
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>

<?php
get_footer();
?>