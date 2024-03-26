<?php get_header();?>
<div id="content" class="clearfix">
  <div id="contentInner">
  <main>
      <article>
      <?php $writer_infos = get_field('writer_introduction');?>
    <?php if($writer_infos):?>
    <?php foreach($writer_infos as $writer_info):?>
    <section class="profile-writer-wrap">
      <h2 class="heading-writer">プロフィール</h2>
      <div class="profile d-flex">
          <div class="profle-image">
              <img src="<?php echo $writer_info['icon'] ;?>" alt="" decoding="async" class="lazyload" width="400" height="400" data-eio-rwidth="400" data-eio-rheight="400">
              <noscript>
                  <img src="<?php echo $writer_info['icon'];?>" alt="spin.png" data-eio="l">
              </noscript>
          </div>
          <div class="profile-content">
            <div class="profile-writer-information-pc">
                <div class="profile-writer__name"><?php echo $writer_info['name'] ;?></div>
                <div class="profile-writer__short_intro"><?php echo $writer_info['job'] ;?><span>/</span><br class="show-sp"><?php echo $writer_info['year'] ;?></div>
                </div>
              <div class="profile__info_sp">
                  <div class="profile-image-sp">
                      <img src="<?php echo $writer_info['icon'] ;?>" alt="" decoding="async" class="lazyload" width="400" height="400" data-eio-rwidth="400" data-eio-rheight="400">
                      <noscript>
                          <img src="<?php echo $writer_info['icon'] ;?>" alt="spin.png" data-eio="">
                      </noscript>
                  </div>
                  <div class="profile-writer-information">
                      <div class="profile-writer__name"><?php echo $writer_info['name'] ;?></div>
                      <div class="profile-writer__short_intro"><?php echo $writer_info['job'] ;?><span>/</span><br class="show-sp"><?php echo $writer_info['year'] ;?></div>
                  </div>
              </div>
              <div class="profile-writerintroduction"><?php echo $writer_info['intro'];?></div>
          </div>
      </div>
    </section>
    <?php $writer_id = $writer_info['select'];?>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
    <?php $args = array(
    'post_type' => 'post',
    'tax_query' => array(
        array(
            'taxonomy' => 'director',
            'field'    => 'term_id',
            'terms'    => $writer_id,
        ),
    ),
);
?>
    <?php $the_query = new WP_Query($args);?>
    <?php if ($the_query->have_posts()):?>
    <section class="post-writer-wrap">
      <h2 class="heading-writer"><?php echo $writer_info['name'] ;?>の記事一覧</h2>
      <div class="post-writer d-flex">
      <?php while ($the_query->have_posts()): $the_query->the_post();?>
        <!-- 最初の記事 -->
        <div class="post-writer-item">
            <div class="post-writer-item-box">
                <a href="<?php echo get_permalink() ;?>" class="writer-box__title" data-wpel-link="internal"><?php echo get_the_title() ;?></a>
                <div class="writer-box__content d-flex">
                    <div class="writer-box__content__image">
                      <?php the_post_thumbnail('full', array('width' => 1280, 'height' => 720)); ?>
                    </div>
                    <div class="writer-box__content__excerpt"><?php the_excerpt();?></div>
                </div>
                <div class="writer-box__bottom d-flex">
                    <div class="writer-box__date-icon d-flex">
                    <?php if(get_the_modified_time() != get_the_time()):?>
                        <i class="st-fa st-svg-refresh"></i>
                        <span class="writer-box__date"><?php echo get_the_modified_date('Y年n月j日');?></span>
                        <?php else:?>
                        <i class="st-fa st-svg-clock-o"></i>
                        <span class="writer-box__date"><?php echo get_the_date('Y年n月j日');?></span>
                        <?php endif;?>
                    </div>
                    <div class="writer-box__cta">
                        <a href="<?php echo get_permalink();?>" class="writer-box__cta-link d-flex">
                            <span class="writer-box__cta-text">記事を読む</span>
                            <!-- <div class="writer-box__cta-icon"><img src="" alt=""></div> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;?>
        <div class="writer-pagination">
        <?php
        // ページネーションの表示
        echo paginate_links(array(
            'total' => $the_query->max_num_pages, // 総ページ数
            'current' => $paged,                 // 現在のページ番号
            'mid_size' => 2,                     // 現在のページの前後に表示するページ数
            'prev_next' => false,                 // 前後のページへのリンクを表示するか
        ));
        ?>
    </div>      </div>
    </section>
    <?php endif; wp_reset_postdata();?>
    <?php endforeach;?>
    <?php endif;?>

      </article>
    </main>

  </div>
  <?php get_sidebar();?>
</div>
<?php  get_footer();?>