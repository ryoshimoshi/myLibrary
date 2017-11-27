<!-- 全てのカテゴリーリスト -->
<?php
    $cats = get_the_category();
    $cat_count = count($cats);
    for($i = 0; $i < $cat_count; $i++):
?>
<?php if($i==0): ?><ul><?php endif; ?>
<li><?php echo $cats[$i]->name; ?></li>
<?php if($i == $cat_count -1): ?></ul><?php endif; ?>
<?php endfor; ?>

<!-- 全てのタグリスト -->
<?php
$posttags = get_tags();
if ($posttags) {
    foreach($posttags as $tag) {
        echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a> '. "</li>";
    }
}
?>

<!-- 投稿が多いタグベスト10 -->
