<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>
          </main>

        <?php get_sidebar(); ?>

      </div>

    </div>

    <?php
    ////////////////////////////
    //コンテンツ下部ウィジェット
    ////////////////////////////
    if ( is_active_sidebar( 'content-bottom' ) ) : ?>
    <div id="content-bottom" class="content-bottom wwa">
      <div id="content-bottom-in" class="content-bottom-in wrap">
        <?php dynamic_sidebar( 'content-bottom' ); ?>
      </div>
    </div>
    <?php endif; ?>

    <?php //投稿パンくずリストがフッター手前の場合
    if ((is_single() || is_category()) && is_single_breadcrumbs_position_footer_before()){
      cocoon_template_part('tmp/breadcrumbs');
    } ?>

    <?php //固定ページパンくずリストがフッター手前の場合
    if (is_page() && is_page_breadcrumbs_position_footer_before()){
      cocoon_template_part('tmp/breadcrumbs-page');
    } ?>
</div><!-- #container -->
    <footer id="footer" class="footer footer-container nwa" itemscope itemtype="https://schema.org/WPFooter">

      <!-- <div id="footer-in" class="footer-in wrap cf">

        <?php //フッターにウィジェットが一つも入っていない時とモバイルの時は表示しない
        if ( (is_active_sidebar('footer-left') ||
          is_active_sidebar('footer-center') ||
          is_active_sidebar('footer-right') )  ): ?>
          <div class="footer-widgets cf">
             <div class="footer-left">
             <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-left') ) : else : ?>
             <?php endif; ?>
             </div>
             <div class="footer-center">
             <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-center') ) : else : ?>
             <?php endif; ?>
             </div>
             <div class="footer-right">
             <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-right') ) : else : ?>
             <?php endif; ?>
             </div>
          </div>
        <?php endif; ?>

        <?php //モバイルウィジェット
        if (is_active_sidebar('footer-mobile')): ?>
          <div class="footer-widgets-mobile cf">
             <div class="footer-mobile">
             <?php dynamic_sidebar('footer-mobile'); ?>
             </div>
          </div>
        <?php endif ?>

        <?php //フッターの最下部（フッターメニューやクレジットなど）
        cocoon_template_part('tmp/footer-bottom'); ?>

      </div> -->
      <div class="footer_container">
		<div class="footer-menu">
			<h2><a href="https://four-seasons.jp">フォーシーズンズ美容皮膚科 神戸院</a></h2>
<div class="footer-main-menu">
<ul>
<li><a href="https://four-seasons.jp/sejyutsu"><span>施術メニュー</span></a></li>
<li><a href="https://four-seasons.jp/fs_original_210106" target="_blank" rel="nofollow noopener noreferrer"><span>当院オリジナル施術</span></a></li>
<li><a href="https://four-seasons.jp/concept"><span>当院の特徴</span></a></li>
<li><a href="https://four-seasons.jp/price_list"><span>料金表</span></a></li>
<li><a href="https://four-seasons.jp/doctors"><span>ドクター紹介</span></a></li>
<li><a href="https://four-seasons.jp/staff"><span>スタッフ紹介</span></a></li>
<li><a href="https://four-seasons.jp/first"><span>初めての方</span></a></li>
<li><a href="https://four-seasons.jp/wp-content/themes/fourseasons/pdf/doui_200123.pdf"><span>同意書</span></a></li>
<li><a href="https://four-seasons.jp/access"><span>クリニック案内</span></a></li>
<li><a href="https://four-seasons.jp/privacy"><span>プライバシーポリシー</span></a></li>
<li><a href="https://four-seasons.jp/vip_member"><span>VIP会員について</span></a></li>
<li><a href="https://four-seasons.jp/sod"><span>院内のウイルス対策</span></a></li>
<li><a href="https://four-seasons.jp/sitemap"><span>サイトマップ</span></a></li>
<li><a href="https://four-seasons.jp/contact"><span>お問い合わせ</span></a></li>
<li><a href="https://four-seasons.jp/company"><span>会社概要</span></a></li>
<li><a href="https://four-seasons.jp/datumou"><span>医療脱毛について</span></a></li>
<li><a href="https://recruit.four-seasons.jp/" target="_blank" rel="nofollow noopener noreferrer"><span>求人情報(採用サイトへ)</span></a></li>
<li><a href="https://four-seasons.jp/column"><span>フォーシーズンズコラム</span></a></li>
<li><a href="https://four-seasons.jp/case"><span>症例写真</span></a></li>
<li><a href="https://four-seasons.jp/aicolumn"><span>フォーシーズンズAIコラム</span></a></li>
</ul>
</div>
<h3 style="text-align:center;"><a style="color:white;" href="https://four-seasons.jp/sejyutsu">施術メニュー</a></h3>
<div class="footer-treatment-menu">
<div class="footer-menu-item"><h4>施術名別</h4><ul><li><a href="https://four-seasons.jp/saisei"><span>肌再生/幹細胞治療</span></a></li>
<li><a href="https://four-seasons.jp/prp"><span>PRP皮膚再生療法</span></a></li>
<li><a href="https://four-seasons.jp/acrs"><span>ACRS(肌再生治療)</span></a></li>
<li><a href="https://four-seasons.jp/skin_regeneration_around_eyes"><span>目元の肌再生</span></a></li>
<li><a href="https://four-seasons.jp/skin_regeneration_around_hands"><span>手元の肌再生</span></a></li>
<li><a href="https://four-seasons.jp/lip"><span>唇の肌再生（バックエイジング）</span></a></li>
<li><a href="https://four-seasons.jp/forehead"><span>おでこの肌再生（バックエイジング）</span></a></li>
<li><a href="https://four-seasons.jp/aga"><span>毛髪再生療法</span></a></li>
<li><a href="https://four-seasons.jp/datumou"><span>医療脱毛</span></a></li>
<li><a href="https://four-seasons.jp/epilation_for_slimmer_face"><span>小顔脱毛</span></a></li>
<li><a href="https://four-seasons.jp/suikou"><span>水光注射</span></a></li>
<li><a href="https://four-seasons.jp/mpgun"><span>メソガン（MPガン）</span></a></li>
<li><a href="https://four-seasons.jp/hifu"><span>ハイフ(HIFU)</span></a></li>
<li><a href="https://four-seasons.jp/darmapen"><span>ダーマペン4</span></a></li>
<li><a href="https://four-seasons.jp/velvetskin"><span>ヴェルベットスキン</span></a></li>
<li><a href="https://four-seasons.jp/hiaruron"><span>ヒアルロン酸注射</span></a></li>
<li><a href="https://four-seasons.jp/botox"><span>ボトックス治療</span></a></li>
<li><a href="https://four-seasons.jp/hokuro_ibo"><span>CO2レーザー</span></a></li>
<li><a href="https://four-seasons.jp/photo-facial"><span>シミ除去<br>フォトフェイシャル M22</span></a></li>
<li><a href="https://four-seasons.jp/rejuvenation"><span>リジュビネーション（タイトニング・ホワイトニング）</span></a></li>
<li><a href="https://four-seasons.jp/hidora"><span>ハイドラフェイシャル(ピーリングと吸引のトリプル美容)</span></a></li>
<li><a href="https://four-seasons.jp/clatuu-alpha"><span>メスを使わない冷却痩身 シャーベットスリム(クラツーα)</span></a></li>
<li><a href="https://four-seasons.jp/nanostar-r"><span>ルビーレーザー　ナノスターR</span></a></li>
<li><a href="https://four-seasons.jp/umbilical"><span>ベビースキン（臍帯血幹細胞培養上清液療法）</span></a></li>
<li><a href="https://four-seasons.jp/dietsuppli"><span>医療痩身・医療ダイエット</span></a></li>
<li><a href="https://four-seasons.jp/peeling_treatment"><span>ピーリング</span></a></li>
<li><a href="https://four-seasons.jp/indiba"><span>医療用インディバ</span></a></li>
<li><a href="https://four-seasons.jp/ldm"><span>水玉リフティング（LDM-MED）</span></a></li>
<li><a href="https://four-seasons.jp/vst-shape"><span>ビスタシェイプ(VST®-Shape)</span></a></li>
<li><a href="https://four-seasons.jp/biyou_tyusya"><span>美容点滴・注射</span></a></li>
<li><a href="https://four-seasons.jp/iontophoresis"><span>イオン導入</span></a></li>
<li><a href="https://four-seasons.jp/cleansing"><span>血液クレンジング</span></a></li>
<li><a href="https://four-seasons.jp/bnls"><span>脂肪溶解注射 BNLS </span></a></li>
<li><a href="https://four-seasons.jp/thread_lift/"><span>スレッドリフト</span></a></li>
<li><a href="https://four-seasons.jp/leadfine"><span>リードファインリフト</span></a></li>
<li><a href="https://four-seasons.jp/nk_cell_beauty_therapy"><span>NK細胞療法</span></a></li>
<li><a href="https://four-seasons.jp/nmn点滴"><span>NMN点滴</span></a></li>
<li><a href="https://four-seasons.jp/exosome"><span>エクソソーム</span></a></li>
<li><a href="https://four-seasons.jp/sunekos"><span>スネコス</span></a></li>
</ul>
</div>
<div class="footer-menu-item">
<h4>お悩み別</h4>
<ul>
<li><a href="https://four-seasons.jp/skin_regeneration_around_eyes"><span>目元の肌再生</span></a></li>
<li><a href="https://four-seasons.jp/skin_regeneration_around_hands"><span>手元の肌再生</span></a></li>
<li><a href="https://four-seasons.jp/keana"><span>毛穴治療</span></a></li>
<li><a href="https://four-seasons.jp/shimi"><span>シミ・ソバカス ・肝斑治療</span></a></li>
<li><a href="https://four-seasons.jp/anti-aging"><span>エイジングケア</span></a></li>
<li><a href="https://four-seasons.jp/hokuro_ibo"><span>ほくろ・いぼ除去</span></a></li>
<li><a href="https://four-seasons.jp/shiwa"><span>シワ治療</span></a></li>
<li><a href="https://four-seasons.jp/bihaku"><span>美白・美肌</span></a></li>
<li><a href="https://four-seasons.jp/nikibi"><span>ニキビ治療</span></a></li>
<li><a href="https://four-seasons.jp/nikibi_ato"><span> ニキビ痕治療</span></a></li>
<li><a href="https://four-seasons.jp/faceup/"><span>フェイスアップ・たるみ治療</span></a></li>
<li><a href="https://four-seasons.jp/kogao"><span>輪郭形成・小顔治療</span></a></li>
<li><a href="https://four-seasons.jp/dietsuppli/"><span>医療痩身・ダイエット</span></a></li>
<li><a href="https://four-seasons.jp/takansyou"><span>多汗症治療</span></a></li>
<li><a href="https://four-seasons.jp/aga"><span>薄毛・育毛・AGA治療</span></a></li>
</ul>
</div>
<div class="footer-menu-item">
<h4>エステ</h4>
<ul>
<li><a href="https://four-seasons.jp/fs_skin_regeneration_esthetic"><span>メディカルエステ</span></a></li>
</ul>
<h4>コースメニュー</h4>
<ul class="sonota">
<li><a href="https://four-seasons.jp/%e3%83%b4%e3%82%a7%e3%83%ab%e3%83%b4%e3%82%a7%e3%83%83%e3%83%88%e3%82%b9%e3%82%ad%e3%83%b3%e7%be%8e%e8%82%8c%e3%82%b1%e3%82%a2%e3%82%b3%e3%83%bc%e3%82%b9"><span>ヴェルヴェットスキン美肌ケアコース</span></a></li>
<li><a href="https://four-seasons.jp/%e8%82%8c%e5%86%8d%e7%94%9f%e3%83%97%e3%83%ac%e3%83%a0%e3%82%a2%e3%83%a0%e3%82%b3%e3%83%bc%e3%82%b9"><span>肌再生プレミアムコース</span></a></li>
<li><a href="https://four-seasons.jp/bridalcourse"><span>ブライダル前の美容医療コース</span></a></li>
<li><a href="https://four-seasons.jp/%e3%83%8b%e3%82%ad%e3%83%93%e7%97%95%e6%94%b9%e5%96%84%e3%82%b3%e3%83%bc%e3%82%b9"><span>ニキビ痕改善コース</span></a></li>
</ul>
<h4>男性美容メニュー</h4>
<ul class="dansei">
<li><a href="https://four-seasons.jp/mens"><span>男性美容医療</span></a></li>
</ul>
<h4>その他のメニュー</h4>
<ul class="sonota">
<li><a href="https://four-seasons.jp/cell_cosmetics"><span>FS幹細胞美容液</span></a></li>
<li><a href="https://four-seasons.jp/mask_pack"><span>美容フェイスマスク</span></a></li>
<li><a href="https://four-seasons.jp/artmake"><span>アートメイク</span></a></li>
<li><a href="https://four-seasons.jp/piasu"><span>ピアスの穴あけ</span></a></li>
<li><a href="https://four-seasons.jp/medicine"><span>外用薬・内服薬</span></a></li>
<li><a href="https://four-seasons.jp/counseling"><span>無料カウンセリング</span></a></li>
</ul>
<h4>物販</h4>
<ul>
<li><a href="https://four-seasons.jp/fs_vc_gel"><span>高浸透型ビタミンC 誘導体ジェル</span></a></li>
<li><a href="https://four-seasons.jp/skinpeelbar"><span>スキンピールバー</span></a></li>
<li><a href="https://four-seasons.jp/zo_skin"><span>ゼオスキン</span></a></li>
<li><a href="https://four-seasons.jp/matsuge"><span>まつ毛育毛剤 「ルミガン」</span></a></li>
<li><a href="https://four-seasons.jp/lusciouslips"><span>ラシャスリップス</span></a></li>
<li><a href="https://four-seasons.jp/hari_beauty"><span>V3ファンデーション</span></a></li>
<li><a href="https://four-seasons.jp/plusrestore"><span>プラスリストア</span></a></li>
<li><a href="https://four-seasons.jp/jan-marini"><span>ジャンマリーニ</span></a></li>
<li><a href="https://four-seasons.jp/solprowhite"><span>ソルプロプリュスホワイトサプリメント</span></a></li>
<li><a href="https://four-seasons.jp/cbd"><span>CBD</span></a></li>
<li><a href="https://four-seasons.jp/cyspera"><span>Cyspera</span></a></li>
</ul>
</div>
</div>
</div></div>
	<div class="ft-logo">
		<h2 class="pic">
			<a href="https://four-seasons.jp">
				<img src="https://four-seasons.jp/wp/wp-content/themes/fourseasons/img/210617/210617_logo_white.png" alt="フォーシーズンズ美容皮膚科" width="220" height="220" loading="lazy"><br>
				<span>FOUR SEASONS</span><br>
				<span>フォーシーズンズ美容皮膚科クリニック神戸院</span>
			</a>
		</h2>
		<p class="copy">&copy; 2024 Four Seasons, inc</p>
	</div>
    </footer>
    <div class="p-reservation-btn">
	<a href="/counseling" class="p-reservation-btn__anchor">
		<div class="p-reservation-btn__anchor-img"><img width="40px" height="40px" src="https://four-seasons.jp/wp/wp-content/themes/fourseasons/img/header/icon_reservation.png" alt=""></div>
		<span class="p-reservation-btn__anchor-main">ご予約はこちら</span>
		<span class="p-reservation-btn__anchor-sub">RESERVATION</span>
	</a>
</div>

    <?php //管理者用パネル
    cocoon_template_part('tmp/admin-panel'); ?>

    <?php //モバイルヘッダーメニューボタン
    cocoon_template_part('tmp/mobile-header-menu-buttons'); ?>

    <?php //モバイルフッターメニューボタン
    cocoon_template_part('tmp/mobile-footer-menu-buttons'); ?>

    <?php //トップへ戻るボタンテンプレート
    cocoon_template_part('tmp/button-go-to-top'); ?>

    <?php if (!is_amp()) {
      //再利用用にフッターコードを取得
      //wp_footer()関数では、一度しか出力が行われないようなので事前にグローバル変数に格納しておく
      global $_WP_FOOTER;
      ob_start();
      wp_footer();
      $f = ob_get_clean();
      echo $f;
      $_WP_FOOTER = $f;
    } ?>

    <?php //フッターで読み込むscriptをまとめたもの
    cocoon_template_part('tmp/footer-scripts');?>

  

</body>

</html>