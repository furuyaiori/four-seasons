<?php
if ( st_hide_header() ):
	return;
endif; ?>

<header id="<?php st_head_class(); ?>">
	<div id="header-full">
		<div id="headbox-bg">
			<div id="headbox">

				<?php get_template_part( 'st-accordion-menu' ); //アコーディオンメニュー & スマホ「ヘッダーメニュー（横列）」メニューの固定表示 ?>

			
					<div id="header-l">
						<?php if ( get_option( 'st_icon_logo' ) && ! get_option( 'st_logo_image' ) && ( st_header_sitetitle() || st_header_catchphrase() ) ): //アイコンロゴ画像がある時 ?>
							<div id="st-icon-logo">
								<?php if ( is_front_page() ): ?>
									<img src="<?php echo esc_url( get_option( 'st_icon_logo' ) );?>" alt="">
								<?php else: ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_option( 'st_icon_logo')); ?>" alt=""></a>
								<?php endif; ?>
							</div>
						<?php endif; ?>

						<div id="st-text-logo">
							<?php get_template_part( 'st-header-logo' ); //サイト名とディスクリプション ?>
						</div>
					</div><!-- /#header-l -->

				<div id="header-r" class="smanone">
					<?php if ( has_nav_menu( 'primary-menu-side' ) && isset($GLOBALS['stdata428']) && $GLOBALS['stdata428'] === 'yes' ):
						get_template_part( 'st-footer-link-design' ); //ヘッダーメニュー（横列）
					else:
						if ( isset($GLOBALS['stdata43']) && $GLOBALS['stdata43'] === 'yes' ) : //ヘッダー上部にフッター用リンクと同じリンクを追加する
							get_template_part( 'st-footer-link' ); //フッターリンク
							get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット
						else:
							get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット
						endif;
					endif; ?>
				</div><!-- /#header-r -->

			</div><!-- /#headbox -->
		</div><!-- /#headbox-bg clearfix -->
<?php wp_reset_query();
 if(  is_home() || is_front_page()): ?>
		<div class="video">
  <video type="video/mp4" autoplay loop muted playsinline poster="https://vegas-online.jp/wp-content/uploads/2024/01/poster.webp"><source src="https://vegas-online.jp/wp-content/uploads/2022/02/topmv.mp4"></video>
</div>
<style>
/*動画差し込み*/
@media only screen and (min-width: 959px) {
div#header-full{
	height: 68vh;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}
#headbox-bg {
	background: linear-gradient(to left, rgb(0 0 0 / 40%) 0%,rgb(0 0 0 / 40%) 100%)!important;
}
#headbox {
  width: 100%;
  margin: 0 auto;
  padding: 0;
  text-align: center;
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: space-between;
}
#header-l .sitename img {
    max-height: 100px!important;
}
.video{
  width: 100%;
  height: 70vh;
  background: url(https://vegas-online.jp/wp-content/uploads/2024/01/poster.webp) no-repeat center/cover;
  position: absolute;
  top: 0;
  left: 0;
  overflow: hidden;
  z-index: -1;
}
.video::after{
  content: '';
  width: 100%;
  height: 100%;
  background-color: #10394b;
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  opacity: .3;
}
.video video{
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
}
#gpwa-verity img {
	width: 110px;
}
}
@media only screen and (max-width: 959px) {

}
</style>
 <?php endif; ?>

		<?php if( is_single() or is_page() ){ //一括挿入ウィジェットの表示確認
			$postID = $wp_query->post->ID;
			$ikkatuwidgetset = get_post_meta( $postID, 'ikkatuwidget_set', true );
		}else{
			$ikkatuwidgetset = '';
		}
		?>

		<?php if (( is_active_sidebar( 31 ) ) && ( trim( $ikkatuwidgetset ) === '' )) : //ヘッダー画像エリア上ウィジェットが設定されている場合 ?>
			<div id="st-header-top-widgets-box">
				<div class="st-content-width">
					<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 31 ) ) : else : // ヘッダー画像上 ?>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( _st_is_mobile_link_design_available() ): ?>
			<div id="st-mobile-link-design">
				<?php get_template_part( 'st-footer-link-design' ); //スマホヘッダーメニュー（横列） ?>
			</div>
		<?php endif; ?>

		<?php if ( $GLOBALS['stdata250'] !== 'bottom' && wp_is_mobile() && ( isset($GLOBALS['stdata154']) && $GLOBALS['stdata154'] === 'yes' ) ) {
			get_template_part( 'st-smartmiddle-menu' ); //ミドルリンク上
		} ?>

	<?php if ( $GLOBALS['stdata266'] === 'yes' ): // 記事スライドショーが有効の場合 ?>
		<?php get_template_part( 'st-header-slider' ); ?>
	<?php else: ?>
		<?php get_template_part( 'st-header-image' ); //カスタムヘッダー画像 ?>
	<?php endif; ?>

<?php $header_full_area = get_theme_mod('st_headerbg_image_area');
if ( ! $header_full_area ) { ?>
	</div><!-- #header-full -->
<?php } ?>

	<?php if ( ( isset($GLOBALS['stdata250']) && $GLOBALS['stdata250'] === 'bottom' ) && wp_is_mobile() && ( isset($GLOBALS['stdata154']) && $GLOBALS['stdata154'] === 'yes' ) ) {
		get_template_part( 'st-smartmiddle-menu' ); //ミドルリンク下
	} ?>

<?php if (
			( isset( $GLOBALS['stdata604'] ) && $GLOBALS['stdata604'] === 'all' ) // サムネイルスライドショーを全てに表示
		 || ( is_front_page() && isset( $GLOBALS['stdata604'] ) && $GLOBALS['stdata604'] === 'top' ) // サムネイルスライドショーをトップに表示
		 || is_active_sidebar( 28 ) //ウィジェットが設定されている場合
	) : ?>
	<div id="st-header-under-widgets-box-wrap">
		<div id="st-header-under-widgets-box">
			<?php if ( isset($GLOBALS['stdata604']) && $GLOBALS['stdata604'] === 'all' || ( is_front_page() && $GLOBALS['stdata604'] === 'top' ) ): ?>
				<div id="st-header-bottom-category">
					<?php get_template_part( 'st-header-bottom-category' ); //カテゴリスライドショー ?>
				</div>
			<?php endif; ?>
			<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 28 ) ) : else : // ヘッダー画像下 ?>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>

<?php if ( isset( $header_full_area ) && ( $header_full_area === 'middle' ) ) { ?>
	</div><!-- #header-full -->
<?php } ?>

<?php get_template_part( 'st-header-cardlink' ); //ヘッダーカードリンク ?>

<?php if ( isset( $header_full_area ) && ( $header_full_area === 'bottom' ) ) { ?>
	</div><!-- #header-full -->
<?php } ?>

</header>
