<!-- default main-loop -->
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
    <span>メインループが入ります。</span>
<?php endwhile; else: ?>
    <span>記事がありません。</span>
<?php endif; ?>


<!-- usually main-lop -->
<?php if ( have_posts() ):  while ( have_posts() ) : the_post(); ?>
    <a href="<?php echo get_the_permalink(); ?>">
        <!-- thumbnail -->
        <?php if (has_post_thumbnail()): $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
            <div style="background-image: url('<?php echo $image_url[0]; ?>')"></div>
        <?php else: ?>
            <div style="background-image: url('./test.jpg')"></div>
        <?php endif; ?>
    </a>
<?php endwhile; else: ?>
    <span>記事がありません。</span>
<?php endif; ?>
