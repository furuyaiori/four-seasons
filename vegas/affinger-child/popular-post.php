<?php $popular_posts = get_field('popular_post');?>
<?php if($popular_posts):?>
    <?php foreach($popular_posts as $popular_post):?>
    <ul class="wpp-list">
    <?php $post_obj = $popular_post['post_obj'];?>
    <?php if($post_obj):?>
    <li style="display: flex; align-items: center; gap: 10px;">
        <a href="<?php get_category_link($post_obj);?>" target="_self" style="flex-grow: 0; flex-shrink: 0; width: 110px;">
        <?php
            echo get_the_post_thumbnail($post_obj->ID, 'full', array(
                'class' => 'lazyload wpp-thumbnail wpp_featured wpp_cached_thumb',
                'decoding' => 'async',
                'loading' => 'lazy',
                'style' => 'width: 110px; height: 70px;',
                'alt' => get_the_title($post_obj->ID)
            ));
        ;?>
        </a>
        <a href="<?php get_permalink($post_obj->ID) ;?>" class="wpp-post-title" target="_self"><?php echo get_the_title($post_obj->ID) ;?></a>
        <span class="wpp-meta post-stats"></span>
    </li>
    <?php endif;?>
    <?php $category_id = $popular_post['category_id'];?>
    <?php if($category_id):?>
        <?php
$cat_data = get_option('cat_'.$category_id);
if (!empty($cat_data['st_cattitle'])) {
    $category_title = esc_html($cat_data['st_cattitle']);
} else {
    $category_name = get_cat_name($category_id);
    if (!empty($category_name)) {
        $category_title = esc_html($category_name);
    } else {
        $category_title = get_cat_name($category_id);
    }
}
// サムネイル
$thumbnail_id = (int) st_get_term_meta( $category_id, 'thumbnail_id' );
;?>
    <li style="display: flex; align-items: center; gap: 10px;">
        <a href="<?php get_category_link($category_id);?>" target="_self"  style="flex-grow: 0; flex-shrink: 0; width: 110px;">
        <?php echo wp_get_attachment_image($thumbnail_id, 'full', false, array(
    'style' => 'width: 110px; height: 70px;'
));?>
        </a>
        <a href="<?php get_category_link($category_id) ;?>" class="wpp-post-title" target="_self"><?php echo $category_title ;?></a>
        <span class="wpp-meta post-stats"></span>
    </li>
    <?php endif;?>
</ul>
<?php endforeach;?>
<?php endif;?>
