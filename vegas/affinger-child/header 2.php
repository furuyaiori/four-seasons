<?php

//「game_ranking_baccarat/ ＊参考サイトはバカラですがイメージは同じです。」のリダイレクト処理
//URLを取得して
$url = $_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI'];

if($url === "vegas-online.jp/game_ranking_baccarat/%20%EF%BC%8A%E5%8F%82%E8%80%83%E3%82%B5%E3%82%A4%E3%83%88%E3%81%AF%E3%83%90%E3%82%AB%E3%83%A9%E3%81%A7%E3%81%99%E3%81%8C%E3%82%A4%E3%83%A1%E3%83%BC%E3%82%B8%E3%81%AF%E5%90%8C%E3%81%98%E3%81%A7%E3%81%99%E3%80%82" ) {
	header('Location: https://vegas-online.jp/game_ranking_baccarat/');
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
	<html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
	<html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
	<html class="ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 8]><!-->
	<html <?php language_attributes(); ?> <?php st_html_class(); ?>>
	<!--<![endif]-->

<script>
	window.dataLayer = window.dataLayer || [];
	　dataLayer.push[{'IP': '<?php echo $_SERVER["REMOTE_ADDR"]; ?>'}];
</script>

	<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
		<?php get_template_part( 'analyticstracking' ); ?>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MFRKS3P');</script>
	<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="pdADiu7fk13Sj4K5GaWWH8ho9CC43kU-FdYgU1FrdtQ" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" >
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover">
	<meta name="format-detection" content="telephone=no" >

	<?php if ( is_front_page() && !is_paged() ): ?>
	<meta name="robots" content="index,follow">
	<?php elseif ( is_search() or is_404() ): ?>
	<meta name="robots" content="noindex,follow">
	<?php elseif ( !is_category() && !is_tag() && is_archive() ): ?>
	<meta name="robots" content="noindex,follow">
	<?php elseif ( is_paged() ): ?>
		<meta name="robots" content="noindex,follow">
		<?php elseif ( is_attachment() ): ?>
			<meta name="robots" content="noindex,follow">
			<?php elseif ( ! is_front_page() && trim($GLOBALS["stdata9"]) !== '' &&  ($GLOBALS["stdata9"]) == $post->ID ): ?>
			<meta name="robots" content="noindex,follow">
			<?php elseif ( is_category() && trim($GLOBALS["stdata15"]) !== ''): ?>
			<meta name="robots" content="noindex,follow">
			<?php elseif ( is_tag() && trim($GLOBALS["stdata420"]) !== ''): ?>
			<meta name="robots" content="noindex,follow">
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >
		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	<?php wp_head(); ?>
	<?php get_template_part( 'st-ogp' ); ?>
	<?php get_template_part( 'st-richjs' ); ?>
	<?php get_template_part( 'a-header-code' ); ?>
	<?php if (is_singular("post")):
		$file = get_the_post_thumbnail_url( get_the_ID());
		$size = getimagesize($file);
		?>
		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@type": "Article ",
				"mainEntityOfPage":
				{
					"@type": "WebPage",
					"@id": "<?php echo get_the_permalink()?>",
					"name":"<?php echo get_the_title();?>"
				},
				"headline": "<?php echo get_the_title();?>",
				"description": "<?php echo get_field("st_description") ?>",
				"image": 
				{
					"@type": "ImageObject",
					"url": "<?php echo get_the_post_thumbnail_url( get_the_ID())?>" ,
					"width": "<?php echo $size[0]?>px",
					"height": "<?php echo $size[1]?>px"
				},
				"datePublished": "<?php echo date('Y-m-d H:i:s', strtotime("-10 minute", get_post_modified_time()));?>",
				"dateModified" :"<?php the_modified_date('Y-m-d H:i:s');?>",
				"author": 
				{
					"@type": "Organization",
					"name": "ベガスオンライン",
					"url": "<?php echo get_the_permalink()?>"
				},
				"publisher": 
				{
					"@type": "Organization",
					"name": "ベガスオンライン",
					"url": "<?php echo get_the_permalink()?>"
				}
			}
		</script>
	<?php endif; ?>
	<meta http-equiv='x-dns-prefetch-control' content='on'>
	<link rel="preconnect dns-prefetch" href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=1.11.3" defer>
	<link rel="preconnect dns-prefetch" href="https://www.googletagmanager.com/gtag/js?id=G-5S71VFD9CS&l=dataLayer&cx=c" defer>
	<link rel="preconnect dns-prefetch" href="https://www.googletagmanager.com/gtm.js?id=GTM-MFRKS3P" defer>
	<link rel="preconnect dns-prefetch" href="https://www.google-analytics.com/analytics.js" defer>
			<!-- ヒートマップ -->
			<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "krptxj7sjy");
</script>


</head>
<body <?php body_class(); ?> id="test">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFRKS3P" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php if ( isset( $GLOBALS["stdata111"] ) && $GLOBALS["stdata111"] === 'yes' && st_is_background_video_available( 'raw' ) ): ?>
	<div class="video-player">
		<video class="video-player-video" src="<?php echo esc_url( st_get_background_video_url() ); ?>" muted autoplay playsinline
			<?php if ( isset( $GLOBALS['stdata114'] ) && $GLOBALS['stdata114'] === 'yes' ): ?> loop<?php endif; ?>></video>
		</div>
		<?php elseif ( isset( $GLOBALS["stdata111"] ) && $GLOBALS["stdata111"] === 'yes' && st_is_background_video_available( 'youtube' ) ): ?>
		<div class="video-player" data-st-youtube
		data-st-youtube-options="<?php echo esc_attr( wp_json_encode( st_background_youtube_options() ) ); ?>">
		<div id="video-player-video" class="video-player-video" data-st-youtube-video></div>
	</div>
<?php endif; ?>
<div id="st-ami">
	<div id="wrapper" class="<?php st_wrap_class(); ?>">
		<div id="wrapper-in">
			<?php get_template_part( 'header-content' ); ?>

			<div id="content-w">

				<?php get_template_part( 'st-ad-smart-head' ); ?>

				<?php get_template_part( 'st-header-post-data' ); ?>
