<?php get_header(); ?>
<main id="main" class="accueil">

    <section class="jumbotron d-flex align-items-center" style="margin-top: 80px;">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col-md-6 order-md-1">
                    <h1 class="titre-jumbotron mb-4"><?php the_field('hero_title'); ?></h1>
                </div>
                <div class="col-md-6 order-md-2">
                    <?php if ($img = get_field('hero_image')): ?>
                        <?php echo wp_get_attachment_image($img['ID'], 'full', false, [
                            'class' => 'img-fluid'
                        ]); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



    <section class="mb-5 custom-container container">
        <h2 class="titre-hero"><?php the_field('title_cards'); ?></h2>
        <p class="content-hero"><?php the_field('description_cards'); ?></p>
        <div class="card-container row mx-0">
            <div class="col-md-6 mb-4 px-2">
                <div class="card card1 h-100">
                    <div class="d-flex justify-content-center align-items-center h-100" style="background-color: #e1ebce;">
                        <?php if ($img = get_field('cards_1')): ?>
                            <?php echo wp_get_attachment_image($img['ID'], 'medium', false, ['class' => 'colored-bg img-fluid']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="card-body text-left">
                        <h3 class="card-title mb-3"><?php the_field('title_cards_1'); ?></h3>
                        <p class="card-text mb-4 small"><?php the_field('description_cards_1'); ?></p>
                        <div class="mt-auto">
                            <a href="<?php the_field('button_link_1'); ?>" class="btn btn-link text-dark align-self-end" style="border: none; text-decoration: none; background-color: transparent;">Voir le profil <span style="border-bottom: 1px solid black;"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 px-2">
                <div class="card card2 h-100">
                    <div class="d-flex justify-content-center align-items-center h-100" style="background-color: #e6f2ff;">
                        <?php if ($img = get_field('cards_2')): ?>
                            <?php echo wp_get_attachment_image($img['ID'], 'medium', false, ['class' => 'colored-bg img-fluid']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="card-body text-left">
                        <h3 class="card-title mb-3"><?php the_field('title_cards_2'); ?></h3>
                        <p class="card-text mb-4 small"><?php the_field('description_cards_2'); ?></p>
                        <div class="mt-auto">
                            <a href="<?php the_field('button_link_2'); ?>" class="btn btn-link text-dark align-self-end" style="border: none; text-decoration: none; background-color: transparent;">Voir le profil <span style="border-bottom: 1px solid black;"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5 container">
        <div class="d-flex flex-column mb-5 ">
            <div>
                <h2 class="titre-projet"><?php the_field('titre_projets'); ?></h2>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <p class="content-projet"><?php the_field('description_projets'); ?></p>
                <a href="<?php the_field('button_link_projets'); ?>" class="btn btn-link text-dark align-self-end"
                   style="border: none; text-decoration: none; background-color: transparent;">Voir nos projets</a>
            </div>
        </div>

        <div class="row">
            <div class="col-3 my-3">
                <?php if ($img = get_field('projet_1')): ?>
                    <?php echo wp_get_attachment_image($img['ID'], 'thumbnail', false, [
                        'class' => 'img-fluid projet-img'
                    ]) ?>
                <?php endif; ?>
            </div>
            <div class="col-3 my-3">
                <?php if ($img = get_field('projet_2')): ?>
                    <?php echo wp_get_attachment_image($img['ID'], 'thumbnail', false, [
                        'class' => 'img-fluid projet-img'
                    ]) ?>
                <?php endif; ?>
            </div>
            <div class="col-3 my-3">
                <?php if ($img = get_field('projet_3')): ?>
                    <?php echo wp_get_attachment_image($img['ID'], 'thumbnail', false, [
                        'class' => 'img-fluid projet-img'
                    ]) ?>
                <?php endif; ?>
            </div>
            <div class="col-3 my-3">
                <?php if ($img = get_field('projet_4')): ?>
                    <?php echo wp_get_attachment_image($img['ID'], 'thumbnail', false, [
                        'class' => 'img-fluid projet-img'
                    ]) ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section class="container container-article mt-5 pt-5">
        <h2 class="titre-article"><?php the_field('article_title'); ?></h2>
        <p class="text-muted content-article"><?php the_field('article_description'); ?></p>
        <?php $query = new WP_Query(array(
            'posts_per_page' => 6
        )); ?>
        <?php if ($query->have_posts()): ?>
            <div class="row">
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <div class="col">
                        <div class="article-item">
                            <div class="article-body">
                                <?php if ($img = get_field('picture_post')): ?>
                                    <div class="article-image">
                                        <?php echo wp_get_attachment_image($img['ID'], 'thumbnail', false, [
                                            'class' => 'img-fluid'
                                        ]) ?>
                                    </div>
                                <?php endif; ?>
                                <h3><a style="text-decoration: none; color: black; font-size: 20px; margin-top: 15px"
                                       class="stretched-link" href="<?php the_permalink
                                    (); ?>"><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
