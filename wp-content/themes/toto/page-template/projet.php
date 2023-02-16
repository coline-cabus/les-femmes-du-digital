<?php /* Template Name: Projet */ ?>
<?php get_header() ?>

    <main id="main" class="projet">

        <section class="projet">
            <div class="container hero ">
                <div class="row title-projet text-center">
                    <div class="col-12">
                        <h1><?php the_field('h1'); ?></h1>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 picture-projet text-center">
                        <?php if ($img = get_field('image')): ?>
                            <?php echo wp_get_attachment_image($img['ID'], 'full', false, [
                                'class' => 'img-fluid'
                            ]) ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 description-projet">
                        <p><?php the_field('description_h1'); ?></p>
                    </div>
                </div>
            </div>

            <div class="container citation">
                <div class="row title-citation">
                    <div class="col-12">
                        <h2><?php the_field('titre_2'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 description-citation">
                        <p><?php the_field('description_2'); ?></p>
                    </div>
                    <div class="col-12 citation-text">
                        <h2><?php the_field('titre_3'); ?></h2>
                        <p><?php the_field('description_3'); ?></p>
                    </div>
                </div>
            </div>
    </main>

<?php get_footer() ?>