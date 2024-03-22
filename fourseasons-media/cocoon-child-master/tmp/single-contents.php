<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

if ( !defined( 'ABSPATH' ) ) exit;

///////////////////////////////////////
// 投稿ページのコンテンツ
///////////////////////////////////////?>


<?php //本文テンプレート
get_template_part('tmp/content') ?>


<div class="under-entry-content">

  <?php //関連記事上ページ送りナビ
  if (is_post_navi_position_over_related()) {
    get_template_part('tmp/pager-post-navi');
  } ?>

  <?php //投稿関連記事上ウイジェット
  if ( is_active_sidebar( 'above-single-related-entries' ) ): ?>
    <?php dynamic_sidebar( 'above-single-related-entries' ); ?>
  <?php endif; ?>

  <?php get_template_part('tmp/related-entries'); //関連記事 ?>

  <?php //関連記事下の広告表示
  if (is_ad_pos_below_related_posts_visible() && is_all_adsenses_visible()){
    get_template_part_with_ad_format(get_ad_pos_below_related_posts_format(), 'ad-below-related-posts', is_ad_pos_below_related_posts_label_visible());
  }; ?>

  <?php //投稿関連記事下ウイジェット
  if ( is_active_sidebar( 'below-single-related-entries' ) ): ?>
    <?php dynamic_sidebar( 'below-single-related-entries' ); ?>
  <?php endif; ?>

  <?php //ページ送りナビ
  if (is_post_navi_position_under_related()) {
    get_template_part('tmp/pager-post-navi');
  } ?>

  <?php //コメント上ウイジェット
  if ( is_active_sidebar( 'above-single-comment-aria' ) ): ?>
    <?php dynamic_sidebar( 'above-single-comment-aria' ); ?>
  <?php endif; ?>

  <?php //コメントを表示する場合
  if (is_single_comment_visible() && !post_password_required( $post )) {
    comments_template(); //コメントテンプレート
  } ?>

  <?php //コメントフォーム下ウイジェット
  if ( is_active_sidebar( 'below-single-comment-form' ) ): ?>
    <?php dynamic_sidebar( 'below-single-comment-form' ); ?>
  <?php endif; ?>

  <?php //コメント下ページ送りナビ
  if (is_post_navi_position_under_comment()) {
    get_template_part('tmp/pager-post-navi');
  } ?>

</div>

<?php //パンくずリストがメインボトムの場合
if (is_single_breadcrumbs_position_main_bottom()){
  get_template_part('tmp/breadcrumbs');
} ?>

<?php //メインカラム追従領域
get_template_part('tmp/main-scroll'); ?>
<?php 
$post_qa = [1854, 889, 2909, 6620, 1698];
$c_post_id = get_the_ID();
if(in_array($c_post_id, $post_qa)) {
  $faqs = array();
  $content = get_the_content();
	$img_1x1 = wp_get_attachment_image_src(get_post_thumbnail_id($c_post_id), 'mercury-135-135');

  $faq_headline = preg_match_all('{<h2 class="faq-headline">(.*?)</h2>}si', $content, $dls_headline);
  $headline = get_the_title();
  if($faq_headline && isset($dls_headline[1][0])) {
    $headline = str_replace("&amp;", '&', strip_tags($dls_headline[1][0]));
  }

     {
    $faq_ques = preg_match_all('{<h3 class="faq-question">(.*?)</h3>}si', $content, $dls_ques);
    $faq_ans = preg_match_all('{<div class="speech-balloon faq-answer">(.*?)</div>}s', $content, $dls_ans);

    if ($faq_ques && $faq_ans && isset($dls_ques[1]) && isset($dls_ans[1]) ) {
      foreach ($dls_ques[1] as $key => $dl) {
        $q = ($dl);
        $a = isset($dls_ans[1][$key]) ? str_replace("\n", '', $dls_ans[1][$key]) : "";
        $a = str_replace("\r", '', ($a));
  
        //FAQ JSONを作成する
        if ($q && $a) {
          $faqs[] ='
            {
              "@type": "Question",
              "name": '.json_encode($q, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES).',
              "acceptedAnswer": {
                "@type": "Answer",
                "text": '.json_encode($a, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES).'
              }
            }';
        }
      }
    }

  }
  
	$args = [
		'image' => esc_url($img_1x1 ? $img_1x1[0] : ''),
    'faqs'  => $faqs,
    'headline' => $headline
	];

  get_template_part('tmp/type-faq', '', $args );
}


if(get_the_ID() == 3530) { 
  $img_rating = wp_get_attachment_image_src(get_post_thumbnail_id(3530), 'mercury-135-135');
?>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "3",
    "reviewCount": "1"
  },
  "description": "<?php echo get_the_title(); ?>",
  "name": "<?php echo get_the_title(); ?>",
  "image": "<?php echo esc_url($img_rating ? $img_rating[0] : '') ?>",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1,298",
    "priceCurrency": "JPY"
  },
  "review": []
}
</script>

<?php }