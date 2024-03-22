<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く//


/************************************************************************************************
// css (フロント)
*************************************************************************************************/
function register_style() { // ファイルの登録
	wp_register_style('style-home', get_theme_file_uri('css/home.css'));
	wp_register_style('commonsearch', get_theme_file_uri('css/commonsearch.css'));
	wp_register_style('style-single', get_theme_file_uri('css/single.css'));
	wp_register_style('style-author', get_theme_file_uri('css/author.css'));
	wp_register_style('style-custom', get_theme_file_uri('css/custom.css'));
}
function add_styles() {
  register_style(); // 全ページに読込
  if (is_front_page()) { // トップページのみ読込
    wp_enqueue_style('style-home');
    wp_enqueue_style('commonsearch');
  }
}
add_action('wp_print_styles', 'add_styles');

// キーワード&カテゴリー検索フォームのショートコード
function commonsearch_shortcode() {
  ob_start(); 
  get_template_part('commonsearch');
  return ob_get_clean();
 }
add_shortcode('commonsearch', 'commonsearch_shortcode');
