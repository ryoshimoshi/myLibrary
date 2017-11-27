<!-- default main-loop -->
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
    <span>メインループが入ります。</span>
<?php endwhile; else: ?>
    <span>記事がありません。</span>
<?php endif; ?>
