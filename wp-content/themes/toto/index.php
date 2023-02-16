<?php get_header() ?>

<main id="<?php the_ID(); ?> main" <?php post_class(); ?>>

    <section class="hero">
        <div class="container mt-5 pt-5">
            <div class="col-6">
                <h1><?php the_field('hero_title'); ?></h1>
                <p><?php the_field('hero_description'); ?></p>
                <a href="<?php the_field('hero_button_link'); ?>" class="btn btn-primary">
                    <?php the_field('hero_button_text'); ?></a>
                <div class="col-6">
                    <?php if ($img = get_field('hero_image')): ?>
                        <?php wp_get_attachment_image($img['ID'], 'full', false, [
                            'class' => 'img-fluid'
                        ]) ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-5 pt-5">
        <h2><?php the_field('article_title'); ?></h2>
        <p class="text-muted"><?php the_field('article_description'); ?></p>
        <div class="row">
            <?php if (have_rows('article_articles')): ?>

                <?php while (have_rows('article_articles')) :
                    the_row(); ?>
                    <div class="col-lg-4">
                        <?php $article = get_sub_field('article') ?>
                        <div class="card">
                            <h3><?= $article->post_title ?></h3>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>


</main>

<?php get_footer() ?>
