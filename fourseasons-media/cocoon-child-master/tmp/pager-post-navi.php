<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

if (is_post_navi_visible()): ?>
<div id="pager-post-navi" class="pager-post-navi<?php echo get_additional_post_navi_classes(); ?> common-entry-cards">
<?php
$in_same_term = is_post_navi_same_category_enable();
$excluded_terms = sanitize_array(get_post_navi_exclude_category_ids());
$prevpost = get_adjacent_post($in_same_term, $excluded_terms, true); //前の記事
$nextpost = get_adjacent_post($in_same_term, $excluded_terms, false); //次の記事
$width  = THUMB120WIDTH;
$height = THUMB120HEIGHT;
switch (get_post_navi_type()) {
  case 'square':
    $width  = THUMB150WIDTH;
    $height = THUMB150HEIGHT;
    break;
}
if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
<?php
if ( $prevpost ) { //前の記事が存在しているとき
  echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . esc_attr(get_the_title($prevpost->ID)) . '" class="pager-post-navi-link prev-post a-wrap border-element cf">
					<div class="pager-post-navi-link-top">
						<div class="fa fa-chevron-left iconfont" aria-hidden="true"></div>
						<span class="pager-post-navi-link-top-txt">前の記事へ</span>
					</div>
					<div class="pager-post-navi-link-bottom">
						<figure class="pager-post-navi-link-bottom-thumb prev-post-thumb card-thumb">' .
						get_post_navi_thumbnail_tag( $prevpost->ID, $width, $height ).
						'</figure>
						<div class="pager-post-navi-link-bottom-txt">
							<div class="prev-post-title">' . get_the_title($prevpost->ID) . '</div>
						</div>
					</div>
				</a>';
} else { //前の記事が存在しないとき
  if (is_post_navi_type_spuare()) {
    echo  '<a href="' .home_url('/'). '" id="prev-next-home" class="prev-next-home a-wrap"><span class="fa fa-home" aria-hidden="true"></span></a>';
  }
}
if ( $nextpost ) { //次の記事が存在しているとき
  echo '<a href="' . get_permalink($nextpost->ID) . '" title="'. esc_attr(get_the_title($nextpost->ID)) . '" class="pager-post-navi-link next-post a-wrap cf">
					<div class="pager-post-navi-link-top">
						<span class="pager-post-navi-link-top-txt">次の記事へ</span>
						<div class="fa fa-chevron-right iconfont" aria-hidden="true"></div>
					</div>
					<div class="pager-post-navi-link-bottom">
						<figure class="pager-post-navi-link-bottom-thumb next-post-thumb card-thumb">
						' .
						get_post_navi_thumbnail_tag( $nextpost->ID, $width, $height ).
						'</figure>
						<div class="pager-post-navi-link-bottom-txt">
							<div class="next-post-title">'. get_the_title($nextpost->ID) . '</div>
						</div>
					</div>
				</a>';
} else { //次の記事が存在しないとき
  if (is_post_navi_type_spuare()) {
    echo '<a href="' .home_url('/'). '" id="prev-next-home" class="prev-next-home a-wrap"><span class="fa fa-home" aria-hidden="true"></span></a>';
  }

}
?>
<?php } ?>
</div><!-- /.pager-post-navi -->
<?php endif //is_post_navi_visible ?>
