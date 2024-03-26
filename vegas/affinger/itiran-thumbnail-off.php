<?php
	$in_feed_ad_per = max( 0, (int) trim( get_option( 'st-data214', '0' ) ) );
	$show_in_feed_ad = ( ! is_404() && is_active_sidebar( 26 ) );
	$show_in_feed_ad = ( $show_in_feed_ad && $in_feed_ad_per > 0 );
?>
<div class="kanren">
	<?php if ( have_posts() ) : $offset = 0; while ( have_posts() ) : the_post(); ?>
		<?php if ( $show_in_feed_ad && ( ( $offset + $wp_query->current_post + 1 ) % $in_feed_ad_per === 0 ) ): ?>
			<div class="st-infeed-adunit">
				<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 26 ) ) : else : ?>
				<?php endif; ?>
			</div>
		<?php
		$offset ++;
		endif; ?>
		<div class="no-thumbitiran">
			<?php if ( trim( $GLOBALS['stdata465']) === '' ) : get_template_part( 'st-single-category' ); endif; //カテゴリー ?>
			<h3><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
			</a></h3>

			<?php get_template_part( 'itiran-date-tag' ); //投稿日 ?>

			<?php get_template_part( 'st-excerpt' ); //抜粋 ?>
			<?php if ( isset( $GLOBALS['stdata465']) && $GLOBALS['stdata465'] === 'yes' ) :
				echo '<div class="st-catgroup-under">';
				get_template_part( 'st-single-category' ); //カテゴリー
				echo '</div>';
			endif; //カテゴリー ?>
		</div>

	<?php endwhile;
	else: ?>

	<?php endif; ?>
</div>
