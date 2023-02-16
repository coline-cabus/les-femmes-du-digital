<?php /* Template Name: Profil */ ?>

<?php get_header() ?>
    <main id="main" class="profil" style="background-color: <?= get_field('background') ?>">

        <section class="jumbotron d-flex align-items-center">
            <div class="container-fluid">
                <?php
                $link = get_field('lien_portrait');
                if ($link): ?>
                <div class="row w-100">
                    <div class="col-md-6 order-md-2 d-flex align-items-center justify-content-center">
                        <?php if ($img = get_field('image_profil')): ?>
                            <?php echo wp_get_attachment_image($img['ID'], 'medium', false, [
                                'class' => 'img-fluid align-self-center'
                            ]) ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <span class="titre-intro"><?php the_field('titre_intro'); ?></span>
                        <h1 class="h1-profil"><?php the_field('h1'); ?></h1>
                        <p class="contenu-profil"><?php the_field('description'); ?></p>
                        <a class="btn btn-link text-dark align-self-end"
                           style="border: white; text-decoration: none; background-color: transparent;"
                           href="<?php echo esc_url($link); ?>">Me découvrir</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="container container-projet">
            <h2 class="titre-projet"><?php the_field('titre_2'); ?></h2>
            <div class="row row-cols-1 row-cols-md-2 justify-content-center g-4">
                <?php if (have_rows('projets')) : while (have_rows('projets')) : the_row(); ?>
                    <?php $lien = get_sub_field('lien_projet'); ?>
                    <div class="col col-projet d-flex justify-content-center">
                        <div class="card card-projet d-flex justify-content-center"
                             style="background-color: <?= get_field('background_cards') ?>">
                            <?php $img = get_sub_field('image_projet'); ?>
                            <?php if ($img): ?>
                                <div class="d-flex justify-content-center">
                                    <?php echo wp_get_attachment_image($img['ID'], 'medium', false, ['class' => 'img-fluid align-self-center']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-img-overlay">
                                <?php if ($lien): ?>
                                    <a href="<?php echo esc_url($lien); ?>" class="stretched-link"></a>
                                <?php endif; ?>
                                <h3 class="card-title"><?php the_sub_field('titre_projet'); ?></h3>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </section>


    </main>

<?php get_footer() ?>