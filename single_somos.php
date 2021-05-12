<?php
/*
 *Template Name: Alterno Somos
 *Template Post Type: post
*/
get_header();
?>

<?php
wp_enqueue_style('Alterno Article', get_stylesheet_directory_uri() . '/stylesBlogAlternativo.css');
?>

<?php
$l = et_page_config();

$blog_slider = etheme_get_option('blog_slider');
$disable_featured = etheme_get_custom_field('disable_featured');
$postspage_id = get_option('page_for_posts');
$post_format = get_post_format();

$post_content = $post->post_content;
preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
if (!empty($ids)) {
  $attach_ids = explode(",", $ids[1]);
  $content =  str_replace($ids[0], "", $post_content);
}

$slider_id = rand(100, 10000);
?>

<div class="c-hero-feature-2 u-background u-background--white">
  <div class="c-hero-feature-2__container">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 offset-lg-1 order-1">
          <h1 class="c-hero-feature-2__heading">
            <?php the_title(); ?>
          </h1>
        </div>
        <div class="col-lg-7 offset-lg-1 order-2">
          <p class="c-hero-feature-2__paragraph"><?php echo excerpt('30'); ?></p>
          <span class="c-hero-feature-2__author"><?php the_author(); ?></span>
        </div>
        <div class="col-lg-6 offset-lg-1 order-2 order-lg-3">
          <span class="o-eyebrown c-hero-feature-2__eyebrown">servicios</span>
          <div class="c-hero-feature-2__tags-container">
            
            <a href="http://outplacement.com.ar/reveal" rel="category tag" class="o-cta o-cta--light o-cta--without-arrow c-hero-feature-2__tag">
              Reveal
            </a>
            <a href="http://outplacement.com.ar/reach" rel="category tag" class="o-cta o-cta--light o-cta--without-arrow c-hero-feature-2__tag">
              Reach
            </a>
            <a href="http://outplacement.com.ar/refresh" rel="category tag" class="o-cta o-cta--light o-cta--without-arrow c-hero-feature-2__tag">
              Refresh
            </a>
            <a href="http://outplacement.com.ar/renew>" rel="category tag" class="o-cta o-cta--light o-cta--without-arrow c-hero-feature-2__tag">
              Renew
            </a>
          </div>
        </div>
        <div class="col-lg-5 c-hero-feature-2__box order-4">
          <div class="c-hero-feature-2__box-container">
            <span class="o-eyebrown">Piense en el talento de una forma completamente nueva</span>
            <h2>Permítanos ayudarlo a convertir su fuerza laboral en una verdadera fuerza</h2>
            <a class="o-cta o-cta--purple" title="contacto" href="../contacto.html" target="_blank">Contactenos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="page-content sidebar-position-<?php echo esc_attr($l['sidebar']); ?>">
    <div class="row">

      <div class="content <?php echo esc_attr($l['content-class']); ?>">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article <?php post_class('blog-post post-single'); ?> id="post-<?php the_ID(); ?>">

              <?php
              $width = etheme_get_option('blog_page_image_width');
              $height = etheme_get_option('blog_page_image_height');
              $crop = etheme_get_option('blog_page_image_cropping');
              ?>


              <?php if ($post_format == 'quote' || $post_format == 'video') : ?>

                <?php the_content(); ?>
              <?php elseif ($post_format == 'gallery') : ?>
                <?php if (count($attach_ids) > 0) : ?>
                  <div class="owl-carousel post-gallery-slider slider_id-<?php echo esc_attr($slider_id); ?>">
                    <?php foreach ($attach_ids as $attach_id) : ?>
                      <div>
                        <?php
                        $image = wp_get_attachment_image_src($attach_id, 'large');

                        echo sprintf(
                          '<img data-src="%s" alt="%s" class="owl-lazy attachment-large size-large" data-srcset="%s" sizes="%s" height="%s" width="%s" />',
                          esc_url($image[0]),
                          get_post_meta($attach_id, '_wp_attachment_image_alt', true),
                          wp_get_attachment_image_srcset($attach_id, 'large'),
                          wp_get_attachment_image_sizes($attach_id, 'large'),
                          esc_attr($image[1]),
                          esc_attr($image[2])
                        );


                        ?>

                      </div>
                    <?php endforeach; ?>
                  </div>

                  <script type="text/javascript">
                    jQuery(document).ready(function() {
                      jQuery('.slider_id-<?php echo esc_js($slider_id); ?>').owlCarousel({
                        items: 1,
                        nav: true,
                        lazyLoad: true,
                        rewind: false,
                        addClassActive: true,
                        autoHeight: true,
                        responsive: {
                          1600: {
                            items: 1
                          }
                        }
                      });
                    });
                  </script>
                <?php endif; ?>

              <?php elseif (has_post_thumbnail() && !$disable_featured) : ?>
                <div class="wp-picture">
                  <?php the_post_thumbnail('large'); ?>
                </div>
              <?php endif; ?>

              <?php if ($post_format != 'quote') : ?>

                <?php if (etheme_get_option('blog_byline')) : ?>
                  <div class="meta-post">
                    <?php esc_html_e('Posted on', 'royal') ?>
                    <?php the_time(get_option('date_format')); ?>
                    <?php esc_html_e('at', 'royal') ?>
                    <?php the_time(get_option('time_format')); ?>
                    <?php esc_html_e('by', 'royal'); ?> <span class="vcard author"> <span class="fn"><?php the_author_posts_link(); ?></span></span>
                    <?php // Display Comments

                    if (comments_open() && !post_password_required()) {
                      echo ' / ';
                      comments_popup_link('0', '1 Comment', '% Comments', 'post-comments-count');
                    }

                    ?>
                  </div>
                <?php endif; ?>
              <?php endif; ?>

              <?php if ($post_format != 'quote' && $post_format != 'video' && $post_format != 'gallery') : ?>
                <div class="content-article entry-content">
                  <?php the_content(); ?>
                </div>
              <?php elseif ($post_format == 'gallery') : ?>
                <div class="content-article entry-content">
                  <?php echo apply_filters('the_content', $content) ?>
                </div>
              <?php endif; ?>

              <?php if (etheme_get_option('post_tags')) : ?>
                <?php

                if (get_the_tag_list()) : ?>
                  <div class="tagcloud">
                    <?php echo the_tags(); ?>
                  </div><!-- /.tagcloud -->
                <?php endif;
                ?>
              <?php endif; ?>

              <?php if (etheme_get_option('post_share')) : ?>
                <div class="share-post">
                  <?php echo do_shortcode('[share title="' . __('Share Post', 'royal') . '"]'); ?>
                </div>
              <?php endif; ?>

              <?php if (etheme_get_option('posts_links') && function_exists('etheme_project_links')) : ?>
                <?php etheme_project_links(array()); ?>
              <?php endif; ?>


              <?php if (etheme_get_option('about_author')) : ?>
                <h4 class="title-alt"><span><?php esc_html_e('About Author', 'royal'); ?></span></h4>

                <div class="author-info vcard">
                  <a class="pull-left" href="#">
                    <?php echo get_avatar(get_the_author_meta('email'), 90); ?>
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading url"><?php the_author_link(); ?></h4>
                    <p class="note"><?php echo get_the_author_meta('description'); ?></p>
                  </div>
                </div>
              <?php endif; ?>

            </article>


          <?php endwhile;
        else : ?>

          <h1><?php esc_html_e('No posts were found!', 'royal') ?></h1>

        <?php endif; ?>

        <?php comments_template('', true); ?>

      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</div>
<div class="c-cta-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-xl-7">
        <h2 class="c-cta-block__heading">
          ¿Quiere aprender formas inteligentes de impulsar el desempeño de su empresa?
        </h2>
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
                <a class="o-cta o-cta--light" title="" href="../contacto.html" target="">Contactanos</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="c-cta-block__item">
              <div class="c-cta-block__icon">
                <span class="o-icon o-icon--abt-communities"></span>
              </div>
              <div class="c-cta-block__text">
                <span>Con más de 380 oficinas en todo el mundo, tenemos una
                  ubicación cerca de usted.</span>
                <a class="o-cta o-cta--light" title="" href="../contacto.html" target="">Contactanos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="o-dark-section">
  <div class="c-feature-list">
    <div class="container">
      <div class="row">
        <div class="col c-feature-list__heading-container">
          <span class="c-feature-list__label o-eyebrown">Servicios</span>
          <h2 class="c-feature-list__heading">Que hacemos</h2>
        </div>
      </div>
      <div class="row c-feature-list__tiles-container">
        <div class="col col-12 col-md-6">
          <div class="o-tile o-tile--black-wrapper o-tile--purple">
            <div class="o-tile__head">
              <div class="o-tile__pictogram o-icon o-icon--gen-org-services-general"></div>
            </div>
            <div class="o-tile__body">
              <header class="o-tile__header">
                <span class="o-eyebrown">Servicios</span>
                <h3 class="u-h2 o-tile__heading">Reveal</h3>
              </header>
              <p style="color:white">
                Entregando conocimientos que revelan la oportunidad en todos
              </p>
              <a href="../our-services/reveal.html" target="" class="o-cta o-tile__cta">Leer Mas
              </a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-6">
          <div class="o-tile o-tile--black-wrapper o-tile--orange">
            <div class="o-tile__head">
              <div class="o-tile__pictogram o-icon o-icon--gen-organisations"></div>
            </div>
            <div class="o-tile__body">
              <header class="o-tile__header">
                <span class="o-eyebrown">Servicios</span>
                <h3 class="u-h2 o-tile__heading">Renew</h3>
              </header>
              <p>Construyendo su fuerza laboral renovable, preparada para el futuro</p>
              <a href="../our-services/renew.html" target="" class="o-cta o-tile__cta">Leer Mas
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>