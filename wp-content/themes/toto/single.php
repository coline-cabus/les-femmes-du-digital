<?php get_header() ?>
    <main id="main" class="article">

    <section class="article">
        <div class="container hero ">
            <div class="row title-post text-center">
                <div class="col-12">
                    <h1><?php the_field('title_post'); ?></h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 picture-post text-center">
                    <?php if ($img = get_field('picture_post')): ?>
                        <?php echo wp_get_attachment_image($img['ID'], 'full', false, [
                            'class' => 'img-fluid'
                        ]) ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 description-post">
                    <p><?php the_field('description_post'); ?></p>
                </div>
            </div>
        </div>

        <div class="container citation">
            <div class="row title-citation">
                <div class="col-12">
                    <h2><?php the_field('h2_post'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 description-citation">
                    <p><?php the_field('description_2_post'); ?></p>
                </div>
                <div class="col-12 citation-text">
                    <p><?php the_field('citation_post'); ?></p>
                </div>
            </div>
        </div>

        <?php $query = new WP_Query(array(
            'posts_per_page' => 3
        )); ?>
        <?php if ($query->have_posts()): ?>
            <div class="posts-wrapper container mb-5">
                <div class="row">
                    <h3 class="mb-4">Nos autres articles</h3>
                    <?php while ($query->have_posts()): $query->the_post(); ?>
                        <div class="col-md-4">
                            <?php get_template_part('template-parts/post'); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>




<?php get_footer() ?>