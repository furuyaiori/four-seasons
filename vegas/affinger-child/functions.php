<?php
if ( !defined( 'ABSPATH' ) ) {
exit;
}

// WordPressの管理画面ログインURLを変更する
define( 'LOGIN_CHANGE_PAGE', 'login_91318.php' );
add_action( 'login_init', 'login_change_init' );
add_filter( 'site_url', 'login_change_site_url', 10, 4 );
add_filter( 'wp_redirect', 'login_change_wp_redirect', 10, 2 );

// 指定以外のログインURLは403エラーにする
if ( ! function_exists( 'login_change_init' ) ) {
  function login_change_init() {
    if ( !defined( 'LOGIN_CHANGE' ) || sha1( 'vegas_online' ) != LOGIN_CHANGE ) {
      status_header( 403 );
      exit;
    }
  }
}

// ログイン済みか新設のログインURLの場合はwp-login.phpを置き換える
if ( ! function_exists( 'login_change_site_url' ) ) {
  function login_change_site_url( $url, $path, $orig_scheme, $blog_id ) {
    if ( ( $path == 'wp-login.php' || preg_match( '/wp-login\.php\?action=\w+/', $path ) ) &&
			( is_user_logged_in() || strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false ) )
			$url = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $url );
		return $url;
  }
}

// ログアウト時のリダイレクト先の設定
if ( ! function_exists( 'login_change_wp_redirect' ) ) {
  function login_change_wp_redirect( $location, $status ) {
    if ( strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false ) {
      $location = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $location );
    }
    return $location;
  }
}

/*
function remcat_function($link) {
return str_replace("/category/", "/", $link);
}
add_filter('user_trailingslashit', 'remcat_function');
function remcat_flush_rules() {
global $wp_rewrite;
$wp_rewrite->flush_rules();
}
add_action('init', 'remcat_flush_rules');
function remcat_rewrite($wp_rewrite) {
$new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'remcat_rewrite');
*/
//WebPアップロード用コード
function add_file_types_to_uploads( $mimes ) {
  $mimes['webp'] = 'image/webp';
  return $mimes;
}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );

//ビジュアルエディタ用スタイル適用
add_editor_style('editor-style.css');
add_editor_style('style.css');


//『カスタムCSS』入力フィールドを投稿画面に追加する
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head','insert_custom_css');
function custom_css_hooks() {
  add_meta_box('custom_css', 'カスタムCSS', 'custom_css_input', 'post', 'normal', 'high');
  add_meta_box('custom_css', 'カスタムCSS', 'custom_css_input', 'page', 'normal', 'high');
	add_meta_box('custom_css', __('カスタムCSS', 'custom_css_input'), 'custom_css_input', 'wp-plugin', 'normal', 'high');
}
function custom_css_input() {
  global $post;
  echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
  echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
}
function save_custom_css($post_id) {
  if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
  $custom_css = $_POST['custom_css'];
  update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css() {
  if (is_page() || is_single()) {
    if (have_posts()) : while (have_posts()) : the_post();
        echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_custom_css', true).'</style>';
    endwhile; endif;
    rewind_posts();
  }
}


//コメント欄の編集
function my_comment_form_remove($arg) {
$arg['email'] = '';
$arg['url'] = '';
return $arg;
 }
 add_filter('comment_form_default_fields', 'my_comment_form_remove');

//コメント文言を変更
function custom_comment_form($args) {
	$args['comment_notes_before'] = '';
	$args['comment_notes_after'] = '';
	$args['label_submit'] = '送信';
	return $args;
}
add_filter('comment_form_defaults', 'custom_comment_form');



//js呼び出し 子テーマのJSを読み込む
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {
		//子テーマのbtn.js
		wp_enqueue_script( 'functions-child', get_stylesheet_directory_uri() . '/js/btn.js', array( 'jquery' ) );
}


//自動挿入される<P><BR>を無効
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');


/* ビジュアルエディタがタグを勝手に削除するのを阻止
---------------------------------------------------------- */
function custom_tiny_mce_before_init( $init_array ) {
  global $allowedposttags;

  $init_array['valid_elements'] = '*[*]'; //すべてのタグを許可(削除されないように)
  $init_array['extended_valid_elements'] = '*[*]'; //すべてのタグを許可(削除されないように)
  $init_array['valid_children'] = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']'; //aタグ内にすべてのタグを入れられるように
  $init_array['indent'] = true; //インデントを有効に
  $init_array['wpautop'] = false; //テキストやインライン要素を自動的にpタグで囲む機能を無効に
  $init_array['force_p_newlines'] = false; //改行したらpタグを挿入する機能を無効に

  return $init_array;
}
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_before_init' );




/* メニューにリンク無しの項目を作る */
function no_link_nav_menu($nav_menu,$args){
	return str_replace('http://none','javascript:void(0);',$nav_menu);
}
add_filter('wp_nav_menu','no_link_nav_menu',9999,2);


// ログイン時、カテゴリーのタイトルが変更される件への対応コード
function change_title_tag( $title ) {
  // 条件チェック：ログイン，カテゴリ，アーカイブ
  if ( is_user_logged_in() && is_category() && is_archive() ) {
    $now_category = get_query_var('cat');
    $args = array(
      'include' => array( $now_category ),
    );
    $tag_all = get_terms( "category", $args );
    $cat_data = get_option( 'cat_'.$now_category );

    // カテゴリに設定されたタイトルを表示
    if ( trim($cat_data['st_cattitle']) !== '' ) {
      $title = esc_html( $cat_data['st_cattitle'] );
    }

    return $title;
  }  
  return $title;
}
// 強制的に遅くフックを適用させる
add_filter( 'pre_get_document_title', 'change_title_tag', 9999999999, 2 );

// 管理画面の制御CSS
function my_admin_style() {
  echo '<style>
  .edit-post-visual-editor {
	max-height: 80%;
    overflow-y: scroll;
}
.editor-styles-wrapper{
  overflow: scroll;
}
  </style>'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');



add_action('after_setup_theme', function(){

		
			ob_start(function ($buffer_html) {

				$buffer_html = str_replace('/affinger/style.css?ver=6.3.1', '/affinger/style.css?ver=' . date("YmdHis", filemtime(dirname(__FILE__) . '/../affinger/style.css')) , $buffer_html); 
				
								$buffer_html = str_replace('/affinger-child/style.css?ver=6.3.1', '/affinger-child/style.css?ver=' . date("YmdHis", filemtime(dirname(__FILE__) . '/../affinger-child/style.css')) , $buffer_html); 
								
				return $buffer_html;

			});
		}, 10000);  //第2引数は優先順位(デフォルト10, 大きいほど後にまわされる)

		//----------------------------------------------------
		//ためていたHTMLを出力する(WordPressが処理を終了する直前に起動)
		//----------------------------------------------------
		add_action('shutdown', function(){
			if(ob_get_length() > 0){
				ob_end_flush();
			}
		}, 10000);  //第2引数は優先順位(デフォルト10, 大きいほど後にまわされる)

    function register_director_taxonomy(){
      // ライタータクソノミーの追加
      $labels = [
      'singular_name' => 'director',
      ];
      $args = [
      'label' => "ライター",
      "labels" => $labels,
      "publicly_queryable" => true,
      "hierarchical" => true,
      "show_in_menu" => true,
      "rewrite" => ['slug' => 'director', "with_front" => false],
      "show_admin_column" => false,
      "show_in_rest" => true,
      "rest_base" => "director",
      "rest_controller_class" => "WP_REST_Terms_Controller",
      "show_in_quick_edit" => false,
      ];
      register_taxonomy("director", ["post"], $args);
      }
      add_action('init', 'register_director_taxonomy');

      // カテゴリーページでもショートコードを使えるように変更
      //「説明」でショートコードを使えるようにする
      remove_filter('pre_term_description', 'wp_filter_kses');
      add_filter( 'term_description', 'custom_term_description' );
      function custom_term_description( $term ){
      if( empty( $term ) ) return false;
      return apply_filters( 'the_content', $term );
      }
// function my_enqueue_scripts()
// {
//   $version = wp_get_theme()->get( 'Version' );

//   wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), $version);
//   wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array(), $version, true);
// }
// add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

?>