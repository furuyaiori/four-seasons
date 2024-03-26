<?php get_header(); ?>
<div id="content" class="clearfix">
    <div id="contentInner">
        <main>
            <article>
                <section class="writers-list-wrap">
                    <h2 class="heading-writers-list">ライター一覧</h2>
                    <div class="other-writer">
                      <?php
                        $args = array(
                          'post_type' => 'writer',
                          'posts_per_page' => -1,
                        );
                        $the_query = new WP_Query($args);
                      ?>
                      <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                          <?php
                            $writers = get_field('writer_introduction');
                            if($writers):
                              foreach($writers as $writer):
                          ?>

                          <div class="writer-list-template">
                            <div class="writer-wrapper">
                              <div class="writer-flex">
                                <!-- プロフィール画像 -->
                                <img class="profile-image" src="<?php echo $writer['icon']; ?>">
                                <div class="writer-information">
                                  <!-- 名前、職業、経験年数 -->
                                  <h3><?php echo $writer['name']; ?></h3>
                                  <div class="writer-org-exp">
                                    <div class="writer-org-exp-item"><?php echo $writer['job']; ?></div>
                                    <div class="writer-org-exp-item"><?php echo $writer['year']; ?></div>
                                  </div>
                                  <!-- 紹介文 -->
                                  <p class="writer-introduction1">
                                    <?php 
                                    // 紹介文が100文字を超える場合は、100文字で切り取り、末尾に「...」を追加
                                    $intro_text = $writer['intro'];
                                    if(mb_strlen($intro_text) > 100) {
                                      $intro_text = mb_strimwidth($intro_text, 0, 100, '...');
                                    }
                                    ?>
                                    <span><?php echo $intro_text; ?></span>
                                    <a href="<?php echo get_permalink($post_id); ?>"><b>続きを読む</b></a>
                                  </p>
                                </div>
                              </div>
                              <p class="writer-introduction2">
                                <?php
                                $intro_text =$writer['intro'];
                                if(mb_strlen($intro_text) > 100){
                                  $intro_text = mb_strimwidth($intro_text,0,100,'...');
                                }
                                ?>
                                <span><?php echo $intro_text; ?></span>
                                <a href="<?php echo get_permalink($post_id); ?>"><b>続きを読む</b></a>
                              </p>
                            </div>
                          </div>
                          <?php endforeach;?>
                          <?php endif;?>

                        <?php endwhile; ?>
                      <?php else: ?>
                        <p>まだ投稿がありません</p>
                      <?php endif; ?>
                      <?php wp_reset_postdata(); ?>
                    </div>
                </section>
            </article>
        </main>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
