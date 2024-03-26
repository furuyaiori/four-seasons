(function (window, document, wp, undefined) {
	'use strict'

	wp.domReady(function () {
		// テキスト
		//wp.blocks.unregisterBlockType( 'core/paragraph' );
		//wp.blocks.unregisterBlockType( 'core/heading' );
		//wp.blocks.unregisterBlockType( 'core/list' );
		//wp.blocks.unregisterBlockType( 'core/quote' );
		//wp.blocks.unregisterBlockType( 'core/code' );
		//wp.blocks.unregisterBlockType( 'core/freeform' );
		wp.blocks.unregisterBlockType( 'core/preformatted' );
		wp.blocks.unregisterBlockType( 'core/pullquote' );
		//wp.blocks.unregisterBlockType( 'core/table' );
		wp.blocks.unregisterBlockType( 'core/verse' );

		// メディア
		//wp.blocks.unregisterBlockType( 'core/image' );
		//wp.blocks.unregisterBlockType( 'core/gallery' );
		wp.blocks.unregisterBlockType( 'core/audio' );
		//wp.blocks.unregisterBlockType( 'core/cover' );
		wp.blocks.unregisterBlockType( 'core/file' );
		wp.blocks.unregisterBlockType( 'core/media-text' );
		//wp.blocks.unregisterBlockType( 'core/video' );

		// デザイン
		//wp.blocks.unregisterBlockType( 'core/buttons' );
		//wp.blocks.unregisterBlockType( 'core/columns' );
		//wp.blocks.unregisterBlockType( 'core/group' );
		wp.blocks.unregisterBlockType( 'core/more' );
		//wp.blocks.unregisterBlockType( 'core/nextpage' );
		//wp.blocks.unregisterBlockType( 'core/separator' );
		//wp.blocks.unregisterBlockType( 'core/spacer' );

		// ウィジェット
		//wp.blocks.unregisterBlockType( 'core/shortcode' );
		wp.blocks.unregisterBlockType( 'core/archives' );
		wp.blocks.unregisterBlockType( 'core/calendar' );
		wp.blocks.unregisterBlockType( 'core/categories' );
		//wp.blocks.unregisterBlockType( 'core/html' );
		wp.blocks.unregisterBlockType( 'core/latest-comments' );
		wp.blocks.unregisterBlockType( 'core/latest-posts' );
		wp.blocks.unregisterBlockType( 'core/rss' );
		wp.blocks.unregisterBlockType( 'core/social-links' );
		wp.blocks.unregisterBlockType( 'core/tag-cloud' );
		//wp.blocks.unregisterBlockType( 'core/search' );

		// 埋め込み
		//wp.blocks.unregisterBlockVariation( 'core/embed', 'twitter' );
		//wp.blocks.unregisterBlockVariation( 'core/embed', 'youtube' );
		//wp.blocks.unregisterBlockVariation( 'core/embed', 'wordpress' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'soundcloud' );
		//wp.blocks.unregisterBlockVariation( 'core/embed', 'spotify' );
		//wp.blocks.unregisterBlockVariation( 'core/embed', 'flickr' );
		//wp.blocks.unregisterBlockVariation( 'core/embed', 'vimeo' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'animoto' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'cloudup' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'crowdsignal' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'dailymotion' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'imgur' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'issuu' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'kickstarter' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'meetup-com' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'mixcloud' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'reddit' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'reverbnation' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'screencast' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'scribd' );
		//wp.blocks.unregisterBlockVariation( 'core/embed', 'slideshare' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'smugmug' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'speaker-deck' );
		//wp.blocks.unregisterBlockVariation( 'core/embed', 'tiktok' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'ted' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'tumblr' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'videopress' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'wordpress-tv' );
		wp.blocks.unregisterBlockVariation( 'core/embed', 'amazon-kindle' );
	});

}(window, window.document, wp));
