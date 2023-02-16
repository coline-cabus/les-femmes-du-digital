<?php /* Template Name: Marketing */ ?>

<?php get_header() ?>

<main id="main" class="blog" style="margin-top: 200px">

    <section id="article-grid" class="">
        <div class="container mb-5 contenu">
            <div class="row">
                <div class="col-md-6 img">
                    <?php if ($img = get_field('image_blog')): ?>
                        <?php echo wp_get_attachment_image($img['ID'], 'full', false, [
                            'class' => 'img-fluid'
                        ]) ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 text-blog">
                    <h1>Catégorie Marketing</h1>
                    <p><?php the_field('description_blog'); ?></p>
                </div>
            </div>
        </div>

        <?php $query = new WP_Query(array(
            'posts_per_page' => 6,
            'category_name' => 'marketing'
)); ?>
        <?php if ($query->have_posts()): ?>
        <div class="container">
            <div class="row">
                <div class="article-blog">
                    <div class="article-wrapper">
                        <div class="row g-4">
                            <?php while ($query->have_posts()): $query->the_post(); ?>
                                <div class="col-lg-4">
                                    <div class="article-item">
                                        <?php if ($img = get_field('picture_post')): ?>
                                            <?php echo wp_get_attachment_image($img['ID'], 'full', false, [
                                                'class' => 'img-fluid'
                                            ]) ?>
                                        <?php endif; ?>
                                        <div class="article-body">
                                            <a class="stretched-link"
                                               href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="article-date">
                                            <p><?php echo get_the_date(); ?></p>
                                        </div>
                                        <div class="article-body">
                                            <p><?php echo get_the_excerpt() ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer() ?>
