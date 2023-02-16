<?php /* Template Name: Portrait */ ?>

<?php get_header() ?>

<main id="<?php the_ID(); ?> main " class="portrait" style="background-color: <?= get_field('background') ?>">

    <section>

        <div class="container content-portrait">
            <button href="http://localhost:8888/lesfemmesdudigital/lisa-jestin/" class="btn-retour d-inline p-2">
                <?php get_template_part('template-parts/icons/icon', 'arrow'); ?>
                <p class="d-inline p-2">Retour</p>
            </button>
            <div class="row">
                <div class="col text-center ms-4">
                    <?php if ($img = get_field('img_portrait')): ?>
                        <?php echo wp_get_attachment_image($img['ID'], 'medium', false, [
                            'class' => 'img-fluid'
                        ]) ?>
                    <?php endif; ?>
                </div>
                <div class="col justify-content-center me-4">
                    <H1 class="mb-5"><?php the_field('titre_portrait'); ?></H1>
                    <p><?php the_field('description_portrait'); ?></p>
                </div>
            </div>
        </div>
        <div id="social-media" class=" social-media text-center ps-5">
            <div class="row row-cols-auto">
                <div class="col">
                    <?php get_template_part('template-parts/icons/icon', 'twitter'); ?>
                </div>
                <div class="col">
                    <?php get_template_part('template-parts/icons/icon', 'instagram'); ?>
                </div>
                <div class="col">
                    <?php get_template_part('template-parts/icons/icon', 'linkedin'); ?>
                </div>
            </div>

        </div>
    </section>

<?php get_footer() ?>