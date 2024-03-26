<?php
/**
 * 個別投稿ページ（デフォルト）
 */
$st_is_ex    = st_is_ver_ex();
$st_is_ex_af = st_is_ver_ex_af();

/* Template Name: page-welcome */
get_header();
?>

<?php echo do_shortcode('[metaslider id="28490"]'); ?>

<div id="content" class="clearfix original_page">
	<div id="contentInner">
		<main>
			<article>
        <div id="st-page" <?php post_class( 'post' ); ?>>

					<?php if ( ! is_front_page() ): ?>

            <?php
						$post_id            = get_queried_object_id();
						$show_ikkatu_widget = false;
						$show_post_info     = ( get_post_meta( $post_id, 'post_data_updatewidget_set', true ) === 'yes' );    //ヘッダーに記事データ挿入

						if ( is_single() || is_page() ) {
							$show_ikkatu_widget = ( get_post_meta( $post_id, 'ikkatuwidget_set', true ) !== 'yes' );    //一括挿入ウィジェットの表示確認

							if ( trim( $GLOBALS['stdata423'] ) !== '' ) {    //「記事ごとのヘッダーデザイン」一括設定が有効
								$show_post_info = true;
							}
						}
						?>

						<?php if ( ! $show_post_info && ( trim( $GLOBALS['stdata423'] ) === '' && trim( $GLOBALS['stdata217'] ) === '' ) ): ?>
							<?php get_template_part( 'st-eyecatch' );    //アイキャッチ画像を挿入 ?>
						<?php endif; ?>

						<?php if ( $show_ikkatu_widget && is_active_sidebar( 17 ) ): ?>
							<?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
								<?php dynamic_sidebar( 17 );    //固定ページ上一括ウィジェット ?>
							<?php endif; ?>
						<?php endif; ?>


          <?php else:    // フロントページの場合 ?>
            <div class="nowhits <?php st_noheader_class(); ?>">
              <?php get_template_part( 'popular-thumbnail' );    //任意のエントリ ?>
            </div>

            <?php if ( is_active_sidebar( 12 ) ): ?>
              <?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
                <?php dynamic_sidebar( 12 );    //トップ上部のウィジェット ?>
              <?php endif; ?>
            <?php endif; ?>

            <?php get_template_part( 'news-st' );    //お知らせ ?>
          <?php endif; ?>


          <!--ループ開始 -->
					<?php if ( have_posts() ): ?>
						<?php while ( have_posts() ): the_post(); ?>

							<?php if ( ! $show_post_info ):    //記事情報を表示が無効 ?>
								<?php if ( ! is_front_page() && ( trim( $GLOBALS['stdata234'] ) === '' ) ): ?>
									<h1 class="entry-title"><?php if ( $st_is_ex ): st_the_title(); else: the_title(); endif;    // タイトル ?></h1>
								<?php endif; ?>
							<?php endif; ?>

							<?php if ( isset( $GLOBALS['stdata231'] ) && $GLOBALS['stdata231'] === 'yes' ): ?>
								<?php if ( is_front_page() ): ?>
									<?php get_template_part( 'sns-top' );    //トップ用ソーシャルボタン読み込み ?>
								<?php else: ?>
									<?php get_template_part( 'sns' );    //ページ用ソーシャルボタン読み込み ?>
								<?php endif; ?>
							<?php endif; ?>

              <div class="mainbox">
                <div id="nocopy" <?php st_text_copyck(); ?>><!-- コピー禁止エリアここから -->
                  <?php if ( ! $show_post_info && ( trim( $GLOBALS['stdata423'] ) === '' && trim( $GLOBALS['stdata217'] ) !== '' ) ): ?>
                    <?php get_template_part( 'st-eyecatch-under' ); ?>
                  <?php endif;    //アイキャッチ画像を挿入 ?>

                  <div class="entry-content">
                    <?php st_the_content( array( 'single', 'main' ) );    //本文 ?>
                  </div>

                  <?php //最近のエントリ
                  if(trim($GLOBALS['stdata99']) !== ''){ //カテゴリ指定のある場合
    								if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) { //サムネイルの有無
    									if(trim($new_entryname) !== ''):
    										echo '<h4 class="menu_underh2">'.$new_entryname.'</h4>';
    									endif;
    									get_template_part( 'newpost-original-thumbnail-off' );
    								}else{
    									if(trim($new_entryname) !== ''):
    										echo '<h4 class="menu_underh2">'.$new_entryname.'</h4>';
    									endif;
    									get_template_part( 'newpost-original-thumbnail-on' );
    								}
    							}else{
    								if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) {
    									if(trim($new_entryname) !== ''):
    										echo '<h4 class="menu_underh2">'.$new_entryname.'</h4>';
    									endif;
    									get_template_part( 'newpost-thumbnail-off' );
    								}else{
    									if(trim($new_entryname) !== ''):
    										echo '<h4 class="menu_underh2">'.$new_entryname.'</h4>';
    									endif;
    									get_template_part( 'newpost-thumbnail-on' );
    								}
    							}
    							?>

                  <div class="newsList">
    			          <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">最新記事の一覧を見る</a>
    			        </div>

    						</div><!-- コピー禁止エリアここまで -->

                <?php get_template_part( 'st-kai-page' );    //改ページ ?>
                <?php get_template_part( 'st-ad-on' );    //広告 ?>

                <?php if ( $show_ikkatu_widget && is_active_sidebar( 5 ) ): ?>
                  <?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
                    <?php dynamic_sidebar( 5 );    //固定ページ一括ウィジェット ?>
                  <?php endif; ?>
                <?php endif; ?>

    					</div><!-- .mainboxここまで -->


              <?php if ( isset( $GLOBALS['stplus'] ) && $GLOBALS['stplus'] === 'yes' ): ?>
                <?php get_template_part( 'st-rank' );    //ランキング ?>
              <?php endif; ?>

              <?php if ( is_front_page() ): ?>
                <?php get_template_part( 'sns-top' );    //トップ用ソーシャルボタン読み込み ?>
              <?php else: ?>
                <?php get_template_part( 'sns' );    //ページ用ソーシャルボタン読み込み ?>
              <?php endif; ?>

              <?php if ( $st_is_ex_af ): get_template_part( 'st-author' ); endif;    //記事を書いた人 ?>

              <?php //任意のエントリ ?>
              <?php if ( ( ! is_front_page() && is_page() ) && ( isset( $GLOBALS['stdata41'] ) && $GLOBALS['stdata41'] === 'yes' ) ):    // 固定記事の場合 ?>
                <?php if ( isset( $GLOBALS['stdata5'] ) && $GLOBALS['stdata5'] === 'yes' ): ?>
                  <?php get_template_part( 'popular-thumbnail-off' ); ?>
                <?php else: ?>
                  <?php get_template_part( 'popular-thumbnail-on' ); ?>
                <?php endif; ?>
              <?php elseif ( ( is_home() || is_front_page() ) && ( isset( $GLOBALS['stdata59'] ) && $GLOBALS['stdata59'] === 'yes' ) ):    // トップ記事の場合 ?>
                <?php if ( isset( $GLOBALS['stdata5'] ) && $GLOBALS['stdata5'] === 'yes' ): ?>
                  <?php get_template_part( 'popular-thumbnail-off' ); ?>
                <?php else: ?>
                  <?php get_template_part( 'popular-thumbnail-on' ); ?>
                <?php endif; ?>
              <?php endif; ?>

              <?php get_template_part( 'st-childlink' );    //子ページへのリンク ?>

              <!--<?php get_template_part( 'itiran-date-singular' );    //投稿日 ?>-->

              <?php st_author();    //著者リンク ?>

            <?php endwhile; ?>
          <?php else: ?>
            <p>記事がありません</p>
          <?php endif; ?>
          <!--ループ終了 -->

          <?php if ( $GLOBALS['stdata6'] === '' ):    //コメント ?>
						<?php if ( comments_open() || get_comments_number() ): ?>
							<?php comments_template(); ?>
						<?php endif; ?>
					<?php endif; ?>

					<?php if ( is_front_page() && ! is_home() && ! is_paged() && $GLOBALS['stdata92'] !== '' ): ?>
						<?php get_template_part( 'newpost-page' );    //最近のエントリ ?>
					<?php endif; ?>

					<!--関連記事-->
					<?php get_template_part( 'kanren' ); ?>

				</div><!--/post-->

        <?php if ( is_front_page() && is_active_sidebar( 13 ) ): ?>
					<?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
						<?php dynamic_sidebar( 13 );    //トップ下部のウィジェット ?>
					<?php endif; ?>
				<?php endif; ?>

			</article>
		</main>
	</div><!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div><!--/#content -->

<script>
//Meta Sliderカルーセル用設定
var metaslider_28490 = function($) {
			$('#metaslider_28490').addClass('flexslider'); // theme/plugin conflict avoidance
			$('#metaslider_28490').flexslider({
					slideshowSpeed:6000,
					animation:"slide",
					controlNav:false,
					directionNav:true,
					pauseOnHover:false,
					direction:"horizontal",
					reverse:false,
					animationSpeed:800,
					prevText:"&lt;",
					nextText:"&gt;",
					easing:"linear",
					slideshow:true
			});
	};
	var timer_metaslider_28490 = function() {
			var slider = !window.jQuery ? window.setTimeout(timer_metaslider_28490, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_28490, 1) : metaslider_28490(window.jQuery);
	};
	timer_metaslider_28490();
</script>
<?php get_footer(); ?>
