<form class="commonsearchbox" method="get" action="<?php echo home_url('/'); ?>">
	<input class="commonsearch-keyword" name="s" id="s" type="text" placeholder="キーワードを入力">
	<div class="commonsearch-category">
		<?php wp_dropdown_categories('depth=0&orderby=name&hide_empty=1&show_option_all=カテゴリーを選ぶ'); ?>
		<?php $tags = get_tags(); if ( $tags ) : ?>
		<?php endif; ?>
	</div>
	<input id="submit" class="commonsearch-submit" type="submit" value="検索">
</form>