<?php
if ( st_is_mobile() && isset($GLOBALS['stdata627']) && $GLOBALS['stdata627'] === 'yes' ):
	return;
endif;

		global $wp_query;
		if( isset ( $wp_query ) ){
			if( is_single() or is_page() ){
				$postID = get_the_ID();
				$column1 = get_post_meta( $postID, 'columnck', true );
			}else{
				$column1 = '';
			}


		$stdata11 = get_option( 'st-data11' );
		if ( ( isset($GLOBALS['stdata77']) && $GLOBALS['stdata77'] === 'yes' ) || ( is_front_page() && $stdata11 === 'yes' ) || ( $column1 === 'yes' && !is_front_page() && !is_archive() ) ) {
		} elseif ( ( isset($GLOBALS['stdata77']) && $GLOBALS['stdata77'] === 'lp' ) || ( is_front_page() && $stdata11 === 'lp' ) || ( $column1 === 'lp' && !is_front_page() && !is_archive() ) ) {
		} else {

	?>
<div id="side">
	<aside>

		<?php if ( is_active_sidebar( 10 ) ) { ?>
			<div class="side-topad">
				<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 10 ) ) : else : //サイドバートップのみのウィジェット ?>
				<?php endif; ?>
			</div>
		<?php } ?>

		<?php if ((is_front_page() && ($GLOBALS["stdata57"] === '')) ||(!is_home() && !is_front_page())){ ?>
			<?php get_template_part( 'newpost' ); //最近のエントリ ?>
		<?php } ?>

	
		<div id="mybox">
<div class="ad popular-posts FixedWidget__fixed_widget FixedWidget__fixed_widget__pinned">
	<?php
if ( function_exists( 'wpp_get_mostpopular' ) ) {
	// カテゴリー、又はタグ名を格納する変数を定義
	$term_name = NULL;
	// 投稿ページの場合
	if( is_single() ){
    	$cat       = get_the_category();
  		$term_id   = $cat[0]->term_id;
  		$term_name = $cat[0]->name;
    	// カテゴリー別の記事ランキングを表示するためのパラメータを指定
		$term_arg  = array(
    		// カテゴリーidを指定
			'cat' => $term_id,
		);
	// アーカイブページの場合	
	}elseif( is_category() || is_tag() ){
        $obj       = get_queried_object();
        $taxonomy  = $obj->taxonomy;
        $term_id   = $obj->term_id;
        $term_name = $obj->name;
		// カテゴリーまたは、タグ別の記事ランキングを表示するためのパラメータを指定
		$term_arg  = array(
        	// タクソノミーを指定
    		'taxonomy' => $taxonomy,
            // タームidを指定
    		'term_id'  => $term_id,
		);
	}
	
	// 共通するパラメータを指定
	$arg = array (
		'limit'     => 10, 
		'range'     => 'all', 
		'order_by'  => 'views',
		'post_type' => 'post',
		  'cat' => $term_id,
		'thumbnail_width' => 110,
		'thumbnail_height' => 70,
		'stats_views' => 0,
	);
	
	// カテゴリー、又はタグ名を取得した場合
	if( $term_name ){
		// カテゴリー、又はタグ別の記事ランキング表示するためのパラメータを結合
		$arg = array_merge( $term_arg, $arg); 
		echo "<p class='st-widgets-title'>" . esc_html( $term_name ) . "のアクセスランキング</p>";
		wpp_get_mostpopular( $arg );
	}else{
		echo "<p class='st-widgets-title'>アクセスランキング</p>";
		get_template_part("popular-post");
	}	

}
?>
</div>
</div>

		<div id="scrollad">
			<?php get_template_part( 'popular-thumbnail-sc' ); //任意のエントリ ?>
			<?php get_template_part( 'scroll-ad' ); //追尾式広告 ?>
			<?php if ( isset($GLOBALS['stplus']) && $GLOBALS['stplus'] === 'yes' ) {
				get_template_part( 'st-rank-side' ); //ランキング
			} ?>

		</div>
	</aside>
</div>
<!-- /#side -->
<?php }
} ?>
