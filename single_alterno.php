<?php
/*
 *Template Name: Alterno Article
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

<link rel="stylesheet" href="stylesBLogAlternativo.css">

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/sharebtn.js"> </script>

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
        <div class="col-lg-4 order-3 order-lg-1 offset-lg-1">
          <div class="c-sms">
            <button class="o-btn o-btn--light c-sms__share-btn ">
              <span class="c-sms__share-btn-txt" style="text-transform:none">Compartir</span>
              <span class="c-sms__share-btn-icon o-icon o-icon--share"></span>
            </button>
            <div class="c-sms__container" aria-hidden="true">
              <span class="c-sms__txt">Comparte esto en</span>
              <div class="c-sms__items-container">
                <div class="addthis_inline_share_toolbox_orzp"></div>
              </div>
              <span class="c-sms__copy-link-heading js-sms-copy__heading" data-msg="Copiado correctamente">Copiar
                link</span>
              <button class="c-sms__copy-link js-sms-copy" aria-label="Copy link">
                <span class="c-sms__copy-link-txt js-sms-copy__txt" style="text-transform:none" ></span>
                <span class="c-sms__copy-link-icon o-icon o-icon--copy"></span>
              </button>
              <style>
                .c-sms__copy-link.js-sms-copy:hover{
                  background-color: initial!important;
                }
                .c-sms__share-btn:hover{
                  min-height: 48px;
                  max-height: 48px!important;
                }
                .c-sms__copy-link-heading{
                  margin-bottom:16px!important
                }

              </style>
            </div>
          </div>
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
            <a href="http://outplacement.com.ar/renew" rel="category tag" class="o-cta o-cta--light o-cta--without-arrow c-hero-feature-2__tag">
              Renew
            </a>
          </div>
        </div>
        <div class="col-lg-5 c-hero-feature-2__box order-4">
          <div class="c-hero-feature-2__box-container">
            <span class="o-eyebrown">Piense en el talento de una forma completamente nueva</span>
            <h2>Permítanos ayudarlo a convertir su fuerza laboral en una verdadera fuerza</h2>
            <a class="o-cta o-cta--purple" title="contacto" href="/contacto" target="_blank">Contactenos</a>
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
                  
                    <div class="row">

                      <div class="col">
                        <span class="c-sms__txt c-sms__txt--bottom-bar">Comparte este artículo</span>
                        <div class="c-sms__items-container c-sms__items-container--bottom-bar">
                        <div class="shareBtn c-sms__item c-sms__item--bottom-bar" style="border: 1px solid rgb(79 24 90)">
                          <button class="c-sms__item-btn" aria-label="Linkedin" id="btn-share-linkedin" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=' + encodeURIComponent(document.URL) + '&amp;title=' + encodeURIComponent(document.title)); return false;">
                          <span class="c-sms__item-icon o-icon at-icon-wrapper"
                              style="line-height: 16px; height: 16px; width: 16px;">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-linkedin-4"
                                class="at-icon at-icon-linkedin"
                                style="fill: rgb(79, 24, 90); width: 16px; height: 16px;">
                                <title id="at-svg-linkedin-4">LinkedIn</title>
                                <g>
                                  <path
                                    d="M26 25.963h-4.185v-6.55c0-1.56-.027-3.57-2.175-3.57-2.18 0-2.51 1.7-2.51 3.46v6.66h-4.182V12.495h4.012v1.84h.058c.558-1.058 1.924-2.174 3.96-2.174 4.24 0 5.022 2.79 5.022 6.417v7.386zM8.23 10.655a2.426 2.426 0 0 1 0-4.855 2.427 2.427 0 0 1 0 4.855zm-2.098 1.84h4.19v13.468h-4.19V12.495z"
                                    fill-rule="evenodd">
                                  </path>
                                </g>
                              </svg>
                            </span>
                          </button>
                        </div>
                        <div class="shareBtn c-sms__item c-sms__item--bottom-bar" style="border: 1px solid rgb(79 24 90)">
                          <button class="c-sms__item-btn" aria-label="Twitter" id="btn-share-twitter" onclick="window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;">
                            <span class="c-sms__item-icon o-icon at-icon-wrapper"
                              style="line-height: 16px; height: 16px; width: 16px;">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-5"
                                class="at-icon at-icon-twitter"
                                style="fill: rgb(79, 24, 90); width: 16px; height: 16px;">
                                <title id="at-svg-twitter-5">Twitter</title>
                                <g>
                                  <path
                                    d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336"
                                    fill-rule="evenodd">
                                  </path>
                                </g>
                              </svg>
                            </span>
                          </button>
                        </div>
                        <div class="shareBtn c-sms__item c-sms__item--bottom-bar" style="border: 1px solid rgb(79 24 90)">
                          <button class="c-sms__item-btn" aria-label="Facebook" id="btn-share-facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&amp;t=' + encodeURIComponent(document.URL)); return false;">
                            <span class="c-sms__item-icon o-icon at-icon-wrapper"
                              style="line-height: 16px; height: 16px; width: 16px;">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-6"
                                class="at-icon at-icon-facebook"
                                style="fill: rgb(79, 24, 90); width: 16px; height: 16px;">
                                <title id="at-svg-facebook-6">Facebook</title>
                                <g>
                                  <path
                                    d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z"
                                    fill-rule="evenodd">
                                  </path>
                                </g>
                              </svg>
                            </span>
                          </button>
                        </div>
                          <div class="c-sms__item c-sms__item--bottom-bar">
                            <button class="c-sms__item-btn js-sms-copy" aria-label="Copy link" id="btn-copy--article">
                              <span class="c-sms__item-icon o-icon o-icon--copy"></span>
                            </button>
                            <div class="c-sms__copy-tooltip js-sms-copy__tooltip2" aria-hidden="true" style="">
                              <span class="c-sms__copy-link-heading c-sms__copy-link-heading--btnArticle">Copiado
                                correctamente</span>
                              <span
                                class="c-sms__copy-link-txt c-sms__copy-link-txt--fullwidth js-sms-copy__txt2"></span>
                              <span class="c-sms__copy-tooltip-arrow"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                  <style>
                     .c-sms__item-btn:hover, .c-sms__item-btn:hover , .c-sms__item-btn:focus { background-color:initial!important;}
                    .shareBtn:active, .shareBtn:focus, .shareBtn:hover {border: 2px solid #dc2c65!important;background-color:initial!important}
                    .at-icon:active, .at-icon:focus, .at-icon:hover {fill: #dc2c65!important}
                    .c-sms__item-btn.js-sms-copy:focus{background-color:initial!important}.c-sms__item-btn.js-sms-copy:active{background-color:initial!important}.c-sms__item-btn.js-sms-copy:hover{background-color:initial!important}.c-sms__container{position:absolute;left:0;display:none;z-index:2;margin:20px 0;padding:20px;background-color:#fff;box-shadow:0 4px 20px 0 rgba(46,46,46,.3);border-radius:8px;width:270px}.c-sms__container:before{content:"";position:absolute;left:20px;-webkit-transform:rotate(45deg);transform:rotate(45deg);width:28px;height:28px;background-color:#fff}.c-sms__container--active{display:block;bottom:100%}.c-sms__container--active:before{bottom:-14px}.c-sms__container--bottom{bottom:auto;top:100%}.c-sms__container--bottom:before{bottom:auto;top:-14px}.c-sms__copy-link-heading,.c-sms__copy-link-heading--copied{color:#dc2c65}.c-sms__items-container{display:-webkit-box;display:flex;flex-wrap:wrap;margin-bottom:15px}.c-sms__txt{position:relative;z-index:1;display:block;font-size:1rem;text-align:left;margin-bottom:5px;font-weight:600}.c-sms__txt--bottom-bar{margin-bottom:8px;color:#4f185a}.c-sms__item,.c-sms__item-btn{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center;background:0 0;cursor:pointer}.c-sms__item-btn{margin:0;padding:0;border:none;width:100%;height:100%}.c-sms__item-icon{font-size:.9375rem;color:#2e2e2e}.c-sms__item:active,.c-sms__item:focus,.c-sms__item:hover{border:2px solid #dc2c65}.c-sms__item:active .c-sms__item-icon,.c-sms__item:focus .c-sms__item-icon,.c-sms__item:hover .c-sms__item-icon{color:#dc2c65}.c-sms__item:active .c-sms__item-btn,.c-sms__item:focus .c-sms__item-btn,.c-sms__item:hover .c-sms__item-btn{border-color:#dc2c65}.c-sms__item--bottom-bar,.c-sms__item--bottom-bar:hover{border:none}.c-sms__item--bottom-bar .c-sms__item-btn:active,.c-sms__item--bottom-bar .c-sms__item-btn:focus,.c-sms__item--bottom-bar .c-sms__item-btn:hover{border-color:#dc2c65}.c-sms__item--bottom-bar .c-sms__item-icon{color:#4f185a}.c-sms__copy-link{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;width:100%;border:none;background:0 0;padding:0;cursor:pointer}.c-sms__copy-link-txt{display:block;position:relative;z-index:1;width:calc(100% - 1.5rem);margin-right:.5rem;white-space:nowrap;overflow:hidden;color:#4f185a;font-size:1rem;text-decoration:underline;cursor:pointer}.c-sms__copy-link-txt--fullwidth{width:100%}.c-sms__copy-link-txt:after{content:"";position:absolute;display:block;top:0;right:0;height:100%;width:50px;background-image:-webkit-gradient(linear,left top,right top,from(hsla(0,0%,100%,0)),to(#fff));background-image:linear-gradient(90deg,hsla(0,0%,100%,0),#fff)}.c-sms__copy-link-icon{color:#4f185a;font-size:1rem;-webkit-transform:scale(.99);transform:scale(.99)}.c-sms__copy-tooltip{display:none;top:100%;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%);margin-top:20px;padding:20px;width:245px;box-shadow:0 4px 20px 0 rgba(46,46,46,.3);-webkit-transition:.3s;transition:.3s;cursor:auto}.c-sms__copy-tooltip,.c-sms__copy-tooltip:before{position:absolute;border-radius:8px;background:#fff;z-index:1}.c-sms__copy-tooltip:before{content:"";top:0;left:0;width:100%;height:100%}.c-sms__copy-tooltip-arrow{position:absolute;top:-12px;left:50%;-webkit-transform:translateX(-50%) rotate(45deg);transform:translateX(-50%) rotate(45deg);width:28px;height:28px;background-color:#fff;box-shadow:0 4px 20px 0 rgba(46,46,46,.3)}.c-sms__copy-tooltip--active{display:block}.c-sms__copy-tooltip--top{top:auto;bottom:100%;margin-top:0;margin-bottom:20px}.c-sms__copy-tooltip--top .c-sms__copy-tooltip-arrow{top:auto;bottom:-12px}
                  </style>


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

        <?php comments_template('', false); ?>
        
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
                <a class="o-cta o-cta--light" title="" href="/contacto" target="">Contactanos</a>
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
                <a class="o-cta o-cta--light" title="" href="/contacto" target="">Contactanos</a>
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
        <div class="o-tile o-tile--black-wrapper o-tile--purple o-tile--clickable">
          <div class="o-tile__head">
            <div class="o-tile__pictogram o-icon o-icon--srv-change-management"></div>
          </div>
          <div class="o-tile__body">
            <header class="o-tile__header">
              <span class="o-eyebrown">Servicios</span>
              <h3 class="u-h2 o-tile__heading">Refresh</h3>
            </header>
            <p>Apoyando a las personas en el camino a su próxima oportunidad. </p>
            <a href="/refresh" target="" class="o-cta o-tile__cta" style="opacity: 1;margin-bottom: 20px;">Aprende más</a>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="o-tile o-tile--black-wrapper o-tile--orange o-tile--clickable">
          <div class="o-tile__head">
            <div class="o-tile__pictogram o-icon o-icon--srv-coaching"></div>
          </div>
          <div class="o-tile__body">
            <header class="o-tile__header">
              <span class="o-eyebrown">Servicios</span>
              <h3 class="u-h2 o-tile__heading">Reach</h3>
            </header>
            <p>Habilitando a los gerentes y líderes para alcanzar su máximo potencial.</p>
            <a href="/reach" target="" class="o-cta o-tile__cta" style="opacity: 1;margin-bottom: 20px;">Aprende más</a>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="o-tile o-tile--black-wrapper o-tile--clickable">
          <div class="o-tile__head">
            <div class="o-tile__pictogram o-icon o-icon--gen-organisations"></div>
          </div>
          <div class="o-tile__body">
            <header class="o-tile__header">
              <span class="o-eyebrown">Servicios</span>
              <h3 class="u-h2 o-tile__heading">Renew</h3>
            </header>
            <p>Construyendo su fuerza laboral renovable, adecuada para futuros. </p>
            <a href="/renew" target="" class="o-cta o-tile__cta" style="opacity: 1;margin-bottom: 20px;">Aprende más </a>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-6">
        <div class="o-tile o-tile--black-wrapper o-tile--purple o-tile--clickable">
          <div class="o-tile__head">
            <div class="o-tile__pictogram o-icon o-icon--gen-org-services-general"></div>
          </div>
          <div class="o-tile__body">
            <header class="o-tile__header">
              <span class="o-eyebrown">Servicios</span>
              <h3 class="u-h2 o-tile__heading">Reveal</h3>
            </header>
            <p>Entrega de ideas que revelan la oportunidad en todas las personas. </p>
            <a href="/reveal" target="" class="o-cta o-tile__cta" style="opacity: 1;margin-bottom: 20px;">Aprende más </a>
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