// .accordion .accordion_one
jQuery(function(){
  //.accordion_oneの中の.accordion_headerがクリックされたら
  jQuery('.accordion .accordion_one .accordion_header').click(function(){
    //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
    jQuery(this).next('.accordion_inner').slideToggle();
    jQuery(this).toggleClass("open");
  });
  //閉じるボタンがクリックされたら
  jQuery('.accordion a.close_btn').click(function () {
    //クリックされたa.close_btnの親要素の.accordion_oneの.accordion_innerを閉じる。
    jQuery(this).parents('.accordion .accordion_one .accordion_inner').slideUp();
    jQuery('.accordion .accordion_one .accordion_header').removeClass("open");
  });
});


//子メニュー開いたときの開閉
var flag = false;
jQuery(window).on('load resize', function(){//window幅に変更があった場合に感知
  flag = ( window.matchMedia('(max-width:959px)').matches ); //状態を保存
});
jQuery(function(){
  jQuery('.menu-item > a').on('click', function(){//要素が押されたら
    if (flag){//959px以下なら
      //クラスが要素に無ければ追加し、あれば削除
      jQuery(this).children('i').toggleClass('fa-angle-right').toggleClass('fa-angle-down');
      //隣接する.sub-menuが表示非表示
      jQuery(this).next('.sub-menu').slideToggle();
    } else {
      ;
    }
  });
});


// ページ内リンク
jQuery(function(){
  // 閉じるボタンをクリックした場合に処理
  jQuery('.accordion a.close_btn').click(function() {
    // 移動先を0px上にずらす
    var adjust = 0;
    // スクロールの速度
    var speed = 500; // ミリ秒
    // アンカーの値取得
    var href= jQuery(this).attr("href");
    // 移動先を取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整
    var position = target.offset().top - adjust;
    // スムーススクロール
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});
