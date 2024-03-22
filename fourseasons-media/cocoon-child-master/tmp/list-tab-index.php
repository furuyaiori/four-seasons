<?php //タブインデックス
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

//インデックスカテゴリーを読み込む
$cat_ids = get_index_list_category_ids();
//インデックスリスト用のクラス取得
$list_classes = get_index_list_classes();

//選択可能なカテゴリ数
$cat_count = apply_filters('cocoon_index_max_category_tab_count', 3);
?>

<div id="index-tab-wrap" class="index-tab-wrap">
	<div class="home-recommended-entries-ttl h-color-a">
		<p class="home-recommended-entries-ttl-txt h-color-a-txt">施術カテゴリー</p>
	</div>
	<div class="home-category-links">
		<ul class="home-category-links-box">
			<li class="home-category-links-box-item">
				<a class="home-category-links-box-item-link" href="<?php echo esc_url( get_category_link(get_cat_ID('シワ')) ); ?>">
					<div class="home-category-links-box-item-link-thumb">
						<img class="home-category-links-box-item-link-thumb-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/frontpage/shiwa.webp " alt="whinkle">
					</div>
					<h2 class="home-category-links-box-item-link-cap">シワ</h2>
				</a>
			</li>
			<li class="home-category-links-box-item">
				<a class="home-category-links-box-item-link" href="<?php echo esc_url( get_category_link(get_cat_ID('ニキビ跡')) ); ?>">
					<div class="home-category-links-box-item-link-thumb">
						<img class="home-category-links-box-item-link-thumb-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/frontpage/acnecare.webp" alt="acne">
					</div>
					<h2 class="home-category-links-box-item-link-cap">ニキビ跡</h2>
				</a>
			</li>
		</ul>
	</div>
	<div class="home-new-entries">
	<div class="home-new-entry-ttl h-color-a">
		<p class="home-new-entry-ttl-txt h-color-a-txt">新着記事一覧</p>
	</div>
	<div class="common-entry-cards">
	<?php
	$args = array(
		'posts_per_page' =>11,  // 最大表示件数 (サイドバー「最近の投稿」との序列を一致させるため1件多く表示)
		'orderby' => 'date', // 日付順
		'order'=> 'DESC' // 新しい順
		);
	$query = new WP_Query( $args ); ?>
	<?php
	if ($query->have_posts()) : ?>
	<?php while ($query->have_posts()) : $query->the_post(); ?>
		<a class="common-entry-link" href="<?php the_permalink(); ?>">
			<figure class="common-entry-thumb">
				<?php
					$days = 10;
					$now = date_i18n('U');
					$entry = get_the_time('U');
					$term = date('U',($now - $entry)) / 86400;
					if( $days > $term ){
						echo '<span class="card-thumb-new">NEW</span>';
					}
				?>
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('common-entry-thumb'); ?> <!-- functions.phpで設定したサムネイル -->
				<?php else: ?>
					<img src="<?php echo get_theme_file_uri('/images/no-image-414.png'); ?>" alt="404 Not Found"> <!-- サムネイル未設定時に表示するサムネイル -->
				<?php endif; ?>
			</figure>
			<div class="common-entry-txt">
				<time class="common-entry-date"><?php echo get_the_date('Y.n.j'); ?></time>
				<h2 class="common-entry-txt-ttl">
					<?php the_title(); ?>
				</h2>
			</div>
		</a>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
	</div>
<!-- 	<div class="home-common-more">
		<a class="home-common-more-link" href="<?php echo home_url(); ?>/page/2/ "><i class="fas fa-star"></i>新着記事をもっと見る</a>
	</div> -->
</div>
</div>


