<!-- フッターのメインコンテンツ -->
	<h3 class="footerlogo st-text-logo-top">
	<!-- ロゴ又はブログ名 -->
	<?php if ( !is_home() || !is_front_page() ): ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<?php endif; ?>

    		<?php if  ( get_option( 'st_footer_logo' )) : //フッター用ロゴ画像がある時 ?>
			<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_footer_logo' ) ); ?>" >
		<?php else: //フッター用ロゴ画像が無い時 ?>
			<?php if  ( get_option( 'st_logo_image' ) && (st_headerfooter_logo()) ): //ヘッダーロゴ画像があり併用する時 ?>
				<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_logo_image' ) ); ?>" >
			<?php else: //ロゴ画像が無い時 ?>
				<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( !is_home() || !is_front_page() ): ?>
			</a>
		<?php endif; ?>
    <!-- GPWA認証シール -->
	</h3>
	<?php if(trim($GLOBALS['stdata102']) === ''): ?>
		<p class="footer-description st-text-logo-bottom">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a>
		</p>
	<?php endif; ?>

	<?php if(trim($GLOBALS['stdata206']) === ''): ?>
		<div class="st-footer-tel">
			<?php get_template_part( 'st-header-widget' ); ?>
				
		</div>
	<?php endif; ?>
