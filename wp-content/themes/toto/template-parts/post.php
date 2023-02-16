<article <?php post_class('post-item'); ?>>
    <div class="post-thumbnail">
        <?php if ($img = get_field('picture_post')): ?>
        <?php echo wp_get_attachment_image($img['ID'], 'full', false, [
            'class' => 'img-fluid'
        ]) ?>
        <?php endif; ?>
    </div>
    <div class="post-body mt-3 text-center">
        <a href="<?php the_permalink(); ?>" class="h3 stretched-link" style="text-decoration: none; color: inherit"><?php the_title(); ?></a>
        <?php the_excerpt(); ?>
    </div>
</article>