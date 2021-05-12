<?php /* Template Name: Contacto Personalizado */ ?>
<?php
get_header();
?>

<main>
    <div class="c-hero-feature-3 c-hero-feature-3--white-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <h1 class="c-hero-feature-3__heading">Contacto</h1>
                    <p class="c-hero-feature-3__paragraph">Hablemos de su organización. Juntos, podemos liberar el potencial de su fuerza laboral.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container c-contact-block">
        <div class="row">
            <div class="col-lg-4 c-contact-block__item">
                <span class="c-contact-block__icon o-icon o-icon--gen-ind-srv-career-transition"></span>
                <h3 class="c-contact-block__heading">Hable con un experto en LHH</h3>
                <span class="c-contact-block__txt"></span>
                <span class="c-contact-block__txt">
                Llamenos al <a class="c-contact-block__phone" href="tel:+54 11 4382 4044"> +54 11 4382 4044 </a>
                </span>
            </div>
            <div class="col-lg-4 c-contact-block__item">
                <span class="c-contact-block__icon o-icon o-icon--gen-office-locator"></span>
                <h3 class="c-contact-block__heading">Localizador de oficinas</h3>
                <span class="c-contact-block__txt">Con más de 380 oficinas en todo el mundo, estamos perfectamente posicionados para ayudar a su empresa.</span>
                <a class="c-contact-block__link o-cta" title="" href="/formulario-de-contacto/" target="|Custom">Consulta la oficina más cercana</a>
            </div>
            <div class="col-lg-4 c-contact-block__item">
                <span class="c-contact-block__icon o-icon o-icon--gen-request-info"></span>
                <h3 class="c-contact-block__heading">Información requerida</h3>
                <span class="c-contact-block__txt">Háganos saber cómo podemos ayudar y nos comunicaremos con usted lo antes posible.</span>
                <a class="c-contact-block__link o-cta" title="" href="/formulario-de-contacto/" target="">Ponerse en contacto</a>
            </div>
        </div>
    </div>
    <?php the_content()?>
</main>

<?php
get_footer();
?>