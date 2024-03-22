<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7Q7YWM4XX6"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-7Q7YWM4XX6');
	</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- OG (Open Graph) tags for basic social media sharing information -->
    <meta property="og:site_name" content="<?php echo bloginfo('name'); ?>">

    <!-- Basic Stylesheet Links -->
    <link href="<?php echo get_template_directory_uri(); ?>/css2/reset.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_template_directory_uri(); ?>/css2/common.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_template_directory_uri(); ?>/css2/style.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/css2/bundle.css" rel="stylesheet" media="all">
    <script src="<?php echo get_template_directory_uri(); ?>/function.js" type="text/javaScript" charset="utf-8"></script>
    <!-- WordPress Head Functions -->
    <?php wp_head(); ?>
</head>



<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<meta name="referrer" content="<?php echo apply_filters('cocoon_meta_referrer_content', get_meta_referrer_content()); ?>">
<meta name="format-detection" content="telephone=no">

<?php //ヘッドタグ内挿入用のアクセス解析用テンプレート
cocoon_template_part('tmp/head-analytics'); ?>
<?php //AMPの案内タグを出力
if ( has_amp_page() ): ?>
<link rel="amphtml" href="<?php echo get_amp_permalink(); ?>">
<?php endif ?>
<?php //Google Search Consoleのサイト認証IDの表示
if ( get_google_search_console_id() ): ?>
<!-- Google Search Console -->
<meta name="google-site-verification" content="<?php echo get_google_search_console_id() ?>" />
<!-- /Google Search Console -->
<?php endif;//Google Search Console終了 ?>
<?php //preconnect dns-prefetch
$domains = list_text_to_array(get_pre_acquisition_list());
if ($domains) {
  echo '<!-- preconnect dns-prefetch -->'.PHP_EOL;
}
foreach ($domains as $domain): ?>
<link rel="preconnect dns-prefetch" href="//<?php echo $domain; ?>">
<?php endforeach; ?>

<!-- Preload -->
<link rel="preload" as="font" type="font/woff" href="<?php echo FONT_ICOMOON_WOFF_URL; ?>" crossorigin>
<?php if (is_site_icon_font_font_awesome_4()): ?>
<link rel="preload" as="font" type="font/woff2" href="<?php echo FONT_AWESOME_4_WOFF2_URL; ?>" crossorigin>
<?php else: ?>
<link rel="preload" as="font" type="font/woff2" href="<?php echo FONT_AWESOME_5_BRANDS_WOFF2_URL; ?>" crossorigin>
<link rel="preload" as="font" type="font/woff2" href="<?php echo FONT_AWESOME_5_REGULAR_WOFF2_URL; ?>" crossorigin>
<link rel="preload" as="font" type="font/woff2" href="<?php echo FONT_AWESOME_5_SOLID_WOFF2_URL; ?>" crossorigin>
<?php endif; ?>
<?php //WordPressが出力するヘッダー情報
wp_head();
?>

<?php //カスタムフィールドの挿入（カスタムフィールド名：head_custom
cocoon_template_part('tmp/head-custom-field'); ?>

<?php //headで読み込む必要があるJavaScript
cocoon_template_part('tmp/head-javascript'); ?>

<?php //PWAスクリプト
cocoon_template_part('tmp/head-pwa'); ?>

<?php //ヘッドタグ内挿入用のユーザー用テンプレート
cocoon_template_part('tmp-user/head-insert'); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

<header>
	<div class="p-header__wrapper">
		<h1 class="p-header__logo">
			<a href="/" class="p-header__logo-anchor">
				<img width="240px" height="100px" src="https://four-seasons.jp/wp/wp-content/themes/fourseasons/img/logo.svg" alt="">
			</a>
		</h1>
		<div class="p-header__icon-sp">
			<ul class="p-header__icon-sp-list">
				<li class="p-header__icon-sp-item">
					<a href="/access" aria-label="アクセスを確認する" class="p-header__icon-sp-item-anchor">
						<svg style="width:20px;height:18px;" id="_レイヤー_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 306.84 430.06"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:20px;}</style></defs><g id="_レイヤー_1-2"><circle class="cls-1" cx="153.42" cy="151.52" r="61.71"/><path class="cls-1" d="m296.84,153.42c0,79.21-143.42,260.52-143.42,260.52,0,0-143.42-181.31-143.42-260.52S74.21,10,153.42,10s143.42,64.21,143.42,143.42Z"/></g></svg>
					</a>
				</li>
				<li class="p-header__icon-sp-item">
					<button class="p-header__icon-sp-item-button js-navButton" aria-label="メインメニュー">
						<span class="p-header__icon-sp-item-button-bar"></span>
						<span class="p-header__icon-sp-item-button-bar"></span>
						<span class="p-header__icon-sp-item-button-bar"></span>
					</button>
				</li>
			</ul>
		</div>
		<div class="l-header__menu">
			<nav class="p-header__menu-pc">
				<ul class="p-header__menu-pc-list main" style="padding:0px;">
					<li class="p-header__menu-pc-item">
						<a href="/" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">ホーム</span>
						</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/sejyutsu" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">施術一覧</span>
						</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/price" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">料金一覧</span>
						</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/case" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">症例写真</span>
						</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/doctor_list" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">ドクター紹介</span>
						</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/staff" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">スタッフ紹介</span>
						</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/news" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">新着情報</span>
						</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/access" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">アクセス</span>
						</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/concept" class="p-header__menu-pc-item-anchor">
							<span class="p-header__menu-pc-item-anchor-text">当院について</span>
						</a>
					</li>
				</ul>
				<ul class="p-header__menu-pc-list sub">
					<li class="p-header__menu-pc-item">
						<a href="/first" class="p-header__menu-pc-item-anchor">初めての方へ</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/interview_sheet" class="p-header__menu-pc-item-anchor">WEB問診票</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="/contact" class="p-header__menu-pc-item-anchor">お問い合わせ</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="https://recruit.four-seasons.jp/" class="p-header__menu-pc-item-anchor" target="_blank">採用情報</a>
					</li>
					<li class="p-header__menu-pc-item">
						<a href="https://tokyo.four-seasons.jp/" class="p-header__menu-pc-item-anchor" target="_blank">東京院HP</a>
					</li>
				</ul>
			</nav>
			<nav class="p-header__menu-sp js-drawerMenu">
				<div class="p-header__menu-sp-wrapper">
					<ul class="p-header__menu-sp-list main">
						<li class="p-header__menu-sp-item main">
							<a href="/" class="p-header__menu-sp-item-anchor main">ホーム</a>
						</li>
						<li class="p-header__menu-sp-item main">
							<a href="/sejyutsu" class="p-header__menu-sp-item-anchor main">施術一覧</a>
						</li>
						<li class="p-header__menu-sp-item main">
							<a href="/price" class="p-header__menu-sp-item-anchor main">料金一覧</a>
						</li>
						<li class="p-header__menu-sp-item main">
							<a href="/case" class="p-header__menu-sp-item-anchor main">症例写真</a>
						</li>
						<li class="p-header__menu-sp-item main">
							<a href="/doctor_list" class="p-header__menu-sp-item-anchor main">ドクター紹介</a>
						</li>
						<li class="p-header__menu-sp-item main">
							<a href="/staff" class="p-header__menu-sp-item-anchor main">スタッフ紹介</a>
						</li>
						<li class="p-header__menu-sp-item main">
							<a href="/news" class="p-header__menu-sp-item-anchor main">新着情報</a>
						</li>
						<li class="p-header__menu-sp-item main">
							<a href="/access" class="p-header__menu-sp-item-anchor main">アクセス</a>
						</li>
						<li class="p-header__menu-sp-item main">
							<a href="/concept" class="p-header__menu-sp-item-anchor main">当院について</a>
						</li>
					</ul>
					<ul class="p-header__menu-sp-list sub">
						<li class="p-header__menu-sp-item sub">
							<a href="/antivirus" class="p-header__menu-sp-item-anchor sub">コロナウイルス対策について</a>
						</li>
						<li class="p-header__menu-sp-item sub">
							<a href="/first" class="p-header__menu-sp-item-anchor sub">初めての方へ</a>
						</li>
						<li class="p-header__menu-sp-item sub">
							<a href="/interview_sheet" class="p-header__menu-sp-item-anchor sub">WEB問診票</a>
						</li>
						<li class="p-header__menu-sp-item sub">
							<a href="/contact" class="p-header__menu-sp-item-anchor sub">お問い合わせ</a>
						</li>
						<li class="p-header__menu-sp-item sub">
							<a href="https://recruit.four-seasons.jp/" class="p-header__menu-sp-item-anchor sub" target="_blank">採用情報</a>
						</li>
						<li class="p-header__menu-sp-item sub">
							<a href="https://tokyo.four-seasons.jp/" class="p-header__menu-sp-item-anchor sub" target="_blank">東京院HP</a>
						</li>
					</ul>
					<div class="p-header__menu-sp-cv">
						<a href="/counseling" class="p-header__menu-sp-cv-button">ご予約はこちら</a>
					</div>
					<ul class="p-header__menu-sp-other-list">
						<li class="p-header__menu-sp-other-item">
							<a href="https://lin.ee/vVVAwAH" class="p-header__menu-sp-other-item-anchor" target="_blank">
								<img width="40px" height="40px" src="https://four-seasons.jp/wp/wp-content/themes/fourseasons/img/header/icon_line.png" alt="LINEアイコン">
							</a>
						</li>
						<li class="p-header__menu-sp-other-item">
							<a href="https://www.instagram.com/fourseasons_clinic/" class="p-header__menu-sp-other-item-anchor" target="_blank">
								<img width="40px" height="40px" src="https://four-seasons.jp/wp/wp-content/themes/fourseasons/img/header/icon_instagram.png" alt="instagramアイコン">
							</a>
						</li>
						<li class="p-header__menu-sp-other-item">
							<a href="https://twitter.com/FOURSEASONS_C" class="p-header__menu-sp-other-item-anchor" target="_blank">
								<img width="40px" height="40px" src="https://four-seasons.jp/wp/wp-content/themes/fourseasons/img/header/icon_twitter.png" alt="twitterアイコン">
							</a>
						</li>
						<li class="p-header__menu-sp-other-item">
							<a href="https://www.facebook.com/4seasonsclinic" class="p-header__menu-sp-other-item-anchor" target="_blank">
								<img width="40px" height="40px" src="https://four-seasons.jp/wp/wp-content/themes/fourseasons/img/header/icon_facebook.png" alt="facebookアイコン" style="width: 11px;">
							</a>
						</li>
						<li class="p-header__menu-sp-other-item">
							<a href="https://www.youtube.com/channel/UCrdIXggir3dDx7V0oQkYUSg?sub_confirmation=1" class="p-header__menu-sp-other-item-anchor" target="_blank">
								<img width="40px" height="40px" src="https://four-seasons.jp/wp/wp-content/themes/fourseasons/img/header/icon_youtube.png" alt="youtubeアイコン">
							</a>
						</li>
					</ul>
					<div class="p-header__menu-sp-footer">
						<p class="p-header__menu-sp-footer-txt">フォーシーズンズ美容皮膚科クリニック</p>
						<p class="p-header__menu-sp-footer-txt-small">&copy; <?php echo date('Y'); ?> FOURSEASONS .inc</p>
					</div>
				</div>
			</nav>
		</div>
	</div>	
</header>

<?php //body最初に挿入するアクセス解析ヘッダータグの取得
  cocoon_template_part('tmp/body-top-analytics'); ?>

<?php //サイトヘッダーからコンテンツまでbodyタグ最初のHTML
cocoon_template_part('tmp/body-top'); ?>