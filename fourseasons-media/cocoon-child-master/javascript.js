//ここに追加したいJavaScript、jQueryを記入してください。
//このJavaScriptファイルは、親テーマのJavaScriptファイルのあとに呼び出されます。
//JavaScriptやjQueryで親テーマのjavascript.jsに加えて関数を記入したい時に使用します。
// JavaScript Document
const setFillHeight = () => {
	const vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
}

// 画面のサイズ変動があった時に高さを再計算する
window.addEventListener('resize', setFillHeight);

// 初期化
setFillHeight();

// $(function () {
// 	$('.js-navButton').on('click', function () {
// 		$(this).toggleClass('is-active');
// 		$('.js-drawerMenu').toggleClass('is-show');
// 		return false;
// 	});
// });

    let gnavButton = document.querySelector('.js-navButton');
    let gnavMenu = document.querySelector('.js-drawerMenu');
    gnavButton.addEventListener('click', function(){
        if(gnavButton.classList.contains('is-active')){
            document.body.style.overflow = "unset";
            gnavButton.classList.remove('is-active');
            gnavMenu.classList.remove('is-show');
        } else {
			document.body.style.overflow = "hidden";
			gnavButton.classList.add('is-active');
			gnavMenu.classList.add('is-show');
		}
    })

// トップページ施術メニュー
const categoryButton = $('.p-treatmentMenu-category__button'),
	categoryResult = $('.p-treatmentMenu-categoryResult__item')

categoryButton.click(function () {
	const index = categoryButton.index(this);
	categoryButton.add(categoryResult).removeClass('--is-active');
	$(this).addClass('--is-active');
	categoryResult.eq(index).addClass('--is-active');
});

const tagButtonTrouble = $('.--js-tag-trouble'),
	tagResultTrouble = $('.--js-tagResult-trouble'),
	tagButtonTreatment = $('.--js-tag-treatment'),
	tagResultTreatment = $('.--js-tagResult-treatment'),
	tagButtonMachine = $('.--js-tag-machine'),
	tagResultMachine = $('.--js-tagResult-machine');

tagButtonTrouble.click(function () {
	const index = tagButtonTrouble.index(this);
	tagButtonTrouble.add(tagResultTrouble).removeClass('--is-active');
	$(this).addClass('--is-active');
	tagResultTrouble.eq(index).addClass('--is-active');
});

tagButtonTreatment.click(function () {
	const index = tagButtonTreatment.index(this);
	tagButtonTreatment.add(tagResultTreatment).removeClass('--is-active');
	$(this).addClass('--is-active');
	tagResultTreatment.eq(index).addClass('--is-active');
});

tagButtonMachine.click(function () {
	const index = tagButtonMachine.index(this);
	tagButtonMachine.add(tagResultMachine).removeClass('--is-active');
	$(this).addClass('--is-active');
	tagResultMachine.eq(index).addClass('--is-active');
});

$('.p-stemcell__index-btn').on('click', function () {
	$('.p-stemcell__index-box,.p-stemcell__index-btn').toggleClass('is-open')
});


// (function ($) {
// 	$(function () {
// 		var $header = $('#top-head');
// 		$('#nav-toggle').click(function () {
// 			$header.toggleClass('open');
// 		});
// 	});
// })(jQuery);

// select の文字色を input[type="text"]、textarea の挙動に揃えるためのアコレコ
$('select option:first-child').addClass('select-label');
$('select').on('change', function () {
	var itemSelect = $(this).find('option:selected').hasClass('select-label');
	if (itemSelect) {
		$(this).parents('.select-field').removeClass('select-option');
	} else {
		$(this).parents('.select-field').addClass('select-option');
	}
});

$('.cf7-reservation__dd-item-date').focus(function () {
	$(this).addClass('select-date');
});

$(function () {
	$(".accordion dt").on("click", function () {
		$(this).next().slideToggle();
	});
});

//スクロールジャンクを防ぐ “Passive Event Listener”
document.addEventListener('touchstart', function () { }, { passive: true });

//ウィンドウをスクロールすると下からふわっとコンテンツがフェードインする実装
// $(function () {
// 	function animation() {
// 		$('.scroll_fade').each(function () {
// 			var target = $(this).offset().top;
// 			var scroll = $(window).scrollTop();
// 			var windowHeight = $(window).height();
// 			if (scroll > target - windowHeight + 100) {
// 				$(this).css('opacity', '1');
// 				$(this).css('transform', 'translateY(0)');
// 			}
// 		});
// 	}
// 	animation();
// 	$(window).scroll(function () {
// 		animation();
// 	});
// });

//iframe動画の遅延読み込み
function youtube_defer() {
	var iframes = document.querySelectorAll('.youtube');
	iframes.forEach(function (iframe) {
		if (iframe.getAttribute('data-src')) {
			iframe.setAttribute('src', iframe.getAttribute('data-src'));
		}
	});
}
window.addEventListener('load', youtube_defer);


// 2104014oka image compare viewer
const options = {
	// UI Theme Defaults
	addCircle: true,
	// Label Defaults
	showLabels: true,
	labelOptions: {
		before: 'Before',
		after: 'After'
	},
	// Other options
	hoverStart: true
};
const viewers = document.querySelectorAll(".image-compare");
viewers.forEach((element) => {
	let view = new ImageCompare(element, options).mount();
});



// スクロール位置に応じて予約ボタンを表示/非表示にします
// const rsvButton = document.querySelector('.p-reservation-btn');
// const footer = document.querySelector('#footer');

// window.addEventListener('scroll', getPosition);

// function getPosition() {
// 	const footerPosition = footer.getBoundingClientRect().y - window.innerHeight;

// 	if (footerPosition < 0) {
// 		rsvButton.classList.add("hidden");
// 	} else {
// 		rsvButton.classList.remove("hidden");
// 	}
// }

// 症例ページ