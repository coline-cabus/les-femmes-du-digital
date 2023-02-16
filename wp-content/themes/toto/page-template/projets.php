<?php /* Template Name: Projets */ ?>
<?php get_header() ?>
    <main id="main" class="projets">

        <section class="container container-projet">
            <h1 class="text-center titre-projets"><?php the_field('titre_h1'); ?></h1>
            <p class="contenu-projets"><?php the_field('description_projets'); ?></p>
            <div class="row row-cols-1 row-cols-md-2 justify-content-center g-4">
                <?php if (have_rows('projets')) : while (have_rows('projets')) : the_row(); ?>
                    <?php $lien = get_sub_field('lien_projet'); ?>
                    <div class="col col-projet d-flex justify-content-center">
                        <div class="card card-projet d-flex justify-content-center"
                             style="background-color: <?= get_field('background_cards') ?>">
                            <?php $img = get_sub_field('image_projet'); ?>
                            <?php if ($img): ?>
                                <div class="d-flex justify-content-center">
                                    <?php echo wp_get_attachment_image($img['ID'], 'thumbnail', false, ['class' => 'img-fluid align-self-center']); ?>
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



        <?php $query = new WP_Query(array(
            'posts_per_page' => 3
        )); ?>
        <div class="container container-article">
            <h2 class="text-center">Nos dernières actualités</h2>
            <ul>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <li>
                        <?php if ($img = get_field('picture_post')): ?>
                            <?php echo wp_get_attachment_image($img['ID'], 'thumbnail', false, [
                                'class' => 'img-fluid',
                                'style' => 'margin-right : 40px'
                            ]) ?>
                        <?php endif; ?>
                        <a class="stretched-link"
                           style="border: white; text-decoration: none; background-color: transparent; color: black;"
                           href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                        <div class="article-body" style="margin-top: 25px">
                            <p><?php echo get_the_excerpt() ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>



    </main>

<?php get_footer() ?>