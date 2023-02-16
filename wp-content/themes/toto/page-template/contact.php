<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

    <main id="main" class="contact">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card rounded-3 p-5">
                        <h1 class="text-center mb-4">Contactez-nous</h1>
                        <p class="text-center mb-5">Un message accompagné d’un café à boire sera la bienvenue. Ou un CD
                            de Céline Dion.</p>
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="rounded p-4 bg-light">
                                    <?php echo do_shortcode('[contact-form-7 id="263" title="Formulaire de contact 1"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>