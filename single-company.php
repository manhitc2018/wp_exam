<?php get_header();?>
    <main class="company_sigle">
      <section class="c-banner">
        <div class="c-banner__content">
          <h2 class="c-banner__titleen"> CORPORATE INFORMATION </h2>
          <p class="c-banner__subtitleja">企業一覧</p>
        </div>
      </section>
      <section class="c-company01">
        <div class="l-container">
          <div class="c-breadcrumb">
            <a href="<?php echo home_url('/')?>" class="c-breadcrumb__home">ホーム</a>
            <p class="c-breadcrumb__arrow"> > </p>
            <a href="<?php echo home_url('/company')?>" class="c-breadcrumb__home">企業一覧</a>
            <p class="c-breadcrumb__arrow"> > </p>
            <p class="c-breadcrumb__present"><?php echo get_the_title();?></p>
          </div>
        </div>
        <div class="l-container">
          <div class="c-warp">
            <div class="c-warp__slider">
              <?php if( get_field('imgcaption') ): ?>
                <?php while( have_rows('imgcaption') ): the_row();
                  $slider_image = get_sub_field('image');
                  $slider_cap = get_sub_field('caption');
                ?>
                <div class="c-warp__item">
                  <a href="<?php if ($slider_cap){echo home_url('404');}else {echo home_url('404');}?>">
                  <?php if ($slider_image):?>
                    <img src="<?php echo $slider_image['url']?>" alt="<?php echo $slider_cap;?>" class="c-warp__itemimg">
                  <?php else:?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/empty/no-img.png" alt="No Image" class="c-warp__itemimg c-warp__itemimg--empty">
                  <?php endif; ?>
                    <?php if ($slider_cap):?>
                    <p class="c-warp__caption"><span><?php echo $slider_cap;?></span></p>
                    <?php endif; ?>
                  </a>
                </div>
                <?php endwhile; ?>
                <?php else:?>
                  <div class="c-warp__item">
                  <a href="<?php echo home_url('404')?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/empty/no-img.png" alt="No caption" class="c-warp__itemimg c-warp__itemimg--empty">
                  </a>
                </div>
              <?php endif; ?>
            </div>
            <div class="c-warp__box">
              <p class="c-warp__date"><?php echo get_the_date("Y.m.d"); ?></p>
              <h2 class="c-warp__title"><?php echo get_the_title();?></h2>
              <p class="c-warp__location"><?php echo get_field("location")?></p>
              <p class="c-warp__message"><?php echo get_field("mesage")?></p>
              <div class="c-warp__glabel">
              <?php $tags = get_the_terms( $post->ID, 'company_tags' );?>
                  <?php if ( $tags ):?>
                    <?php foreach ($tags as $tag):?>
                    <p class="c-warp__label">
                      <span class="c-warp__labeltext"><?php echo $tag->name?></span>
                  <?php endforeach;?>
                <?php endif; ?>
                </p>
              </div>
              <div class="c-warp__content"><?php  the_content();?></div>
            </div>
          </div>
        </div>
      </section>
      <section class="c-data">
        <div class="l-container">
          <div class="c-data__box">
            <div class="c-data__left">
              <h2 class="c-data__title">企業DATA</h2>
            </div>
            <div class="c-data__detail">
              <p class="c-data__name"><?php echo get_field("company_name")?></p>
              <?php if (get_field("url")):?>
              <div class="c-data__url">
                <a href="<?php echo get_field("url")?>" target="_blank"><?php echo get_field("url")?>
                  <i class="fas fa-external-link-alt c-icon-url"></i>  
                </a>
              </div>
              <?php endif;?>
              <div class="c-data__list">
                <div class="c-data__item">
                  <p class="c-data__itemleft">
                    <span class="c-data__itemlefttxt">本社</span>
                  </p>
                  <p class="c-data__itemright"><?php echo get_field("address")?></p>
                </div>
                <div class="c-data__item">
                  <p class="c-data__itemleft">
                    <span class="c-data__itemlefttxt">TEL</span>
                  </p>
                  <p class="c-data__itemright"><?php echo get_field("tel")?></p>
                </div>
                <div class="c-data__item">
                  <p class="c-data__itemleft">
                    <span class="c-data__itemlefttxt">設立</span>
                  </p>
                  <p class="c-data__itemright"><?php echo get_field("established")?></p>
                </div>
                <div class="c-data__item">
                  <p class="c-data__itemleft">
                    <span class="c-data__itemlefttxt">従業員数</span>
                  </p>
                  
                  <p class="c-data__itemright"><?php if (get_field("number_of_employee")):?><?php echo get_field("number_of_employee")?>名<?php endif;?></p>
                  
                </div>
                <div class="c-data__item">
                  <p class="c-data__itemleft">
                    <span class="c-data__itemlefttxt">代表者</span>
                  </p>
                  <p class="c-data__itemright"><?php echo get_field("president")?></p>
                </div>
                <div class="c-data__item"></div>
                <div class="c-data__item">
                  <p class="c-data__itemleft">
                    <span class="c-data__itemlefttxt">事業内容</span>
                  </p>
                  <p class="c-data__itemright"><?php echo get_field("business_content")?></p>
                </div>
              </div>
              <dl class="c-achievements">
                <dt class="c-achievements__dt">新卒採用実績</dt>
                <dd class="c-achievements__dd"><?php echo get_field("recruit")?></dd>
              </dl>
            </div>
          </div>
        </div>
      </section>
      <?php if (get_field('strenght')):?>
      <section class="c-strength">
        <div class="l-container__w820">
          <div class="c-captitle">
            <h2 class="c-captitle__content">会社のココが良い！</h2>
          </div>
          <div class="c-strength__body">
            <?php if( have_rows('strenght') ): ?>
              <?php while( have_rows('strenght') ): the_row();
                $strenght_title = get_sub_field('strenght_title');
                $strenght_text = get_sub_field('strenght_text');
              ?>
              <div class="c-strength__item">
                <h3 class="c-strength__title"><?php echo $strenght_title;?></h3>
                <p class="c-strength__txt"><?php echo $strenght_text;?></p>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <?php endif; ?>
      <?php if (get_field('service_us')):?>
      <section class="c-service">
        <div class="l-container__w820">
          <div class="c-captitle">
            <h2 class="c-captitle__content">我が社の サービス</h2>
          </div>
          <div class="c-service__list">
          <?php if( have_rows('service_us') ): ?>
              <?php while( have_rows('service_us') ): the_row();
              $service_us_img = get_sub_field('service_us_img');
              $service_us_title = get_sub_field('service_us_title');
              $service_us_text = get_sub_field('service_us_text');
            ?>
            <?php if ($service_us_title):?>
            <div class="c-service__item">
              <?php if ($service_us_img):?>
                <img src="<?php echo $service_us_img['url']?>" alt="<?php echo $service_us_title?>" class="c-service__itemimg">
                <?php else:?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/empty/no-img.png" alt="No image" class="c-service__itemimg">  
              <?php endif; ?>
              <div class="c-service__itemright">
                
                <h3 class="c-service__itemtitle"><?php echo $service_us_title?></h3>
                
                <p class="c-service__itemtxt"><?php echo $service_us_text?></p>
              </div>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            
          </div>
        </div>
      </section>
      <?php endif; ?>
      <section class="c-related">
        <div class="l-container">
          <div class="c-related__header">
            <h2 class="c-related__title"> 関連記事 </h2>
          </div>
          <p class="c-related__sub"> この企業に関連する記事のご紹介です。 </p>
          <div class="c-related__row">
            <div class="c-related__item">
              <a href="<?php echo home_url('テキストテキストテキストテキストテキストテキスト'); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/company_single/dummy.png" alt="テキストテキストテキストテキスト
                    テキストテキスト">
              <div class="c-related__itemcontent">
                <h3 class="c-related__itemtitle">テキストテキストテキストテキスト テキストテキスト</h3>
                <p class="c-related__itemtxt">株式会社悠遊社</p>
              </div>
              </a> 
            </div>
            <div class="c-related__item">
              <a href="<?php echo home_url('テキストテキストテキストテキストテキストテキスト'); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/company_single/dummy.png" alt="テキストテキストテキストテキスト
                    テキストテキスト">
              <div class="c-related__itemcontent">
                <h3 class="c-related__itemtitle">テキストテキストテキストテキスト テキストテキスト</h3>
                <p class="c-related__itemtxt">株式会社悠遊社</p>
              </div>
              </a> 
            </div>
            <div class="c-related__item">
              <a href="<?php echo home_url('テキストテキストテキストテキストテキストテキスト'); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/company_single/dummy.png" alt="テキストテキストテキストテキスト
                    テキストテキスト">
              <div class="c-related__itemcontent">
                <h3 class="c-related__itemtitle">テキストテキストテキストテキスト テキストテキスト</h3>
                <p class="c-related__itemtxt">株式会社悠遊社</p>
              </div>
              </a> 
            </div>
            <div class="c-related__item">
              <a href="<?php echo home_url('テキストテキストテキストテキストテキストテキスト'); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/company_single/dummy.png" alt="テキストテキストテキストテキスト
                    テキストテキスト">
              <div class="c-related__itemcontent">
                <h3 class="c-related__itemtitle">テキストテキストテキストテキスト テキストテキスト</h3>
                <p class="c-related__itemtxt">株式会社悠遊社</p>
              </div>
              </a> 
            </div>
          </div>
        </div>
      </section>
      <section class="c-othercompany">
        <div class="l-container">
          <h2 class="c-othercompany__title">他の企業を探す</h2>
          <div class="c-list01">
          <?php 
              $id__current = get_the_ID();
              $args  = array(
                'post_type' => 'company',
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'post__not_in' => array($id__current)
              );
              $othercompany_query = new WP_Query($args);
          ?>
          <?php if ( $othercompany_query->have_posts() ) : ?>
            <?php while ( $othercompany_query->have_posts() ) : 
                $othercompany_query->the_post(); 
            ?>
            <div class="c-item">
              <a href="<?php the_permalink(); ?>">
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <?php if ($image):?>
              <img src="<?php echo $image[0]; ?>" alt="<?php the_title();?>" class="c-item__img">
              <?php else:?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/empty/no-img.png" alt="<?php the_title();?>" class="c-item__img">
              <?php endif;?>
              <div class="c-item__content">
                <h2 class="c-item__title"><?php the_title();?></h2>
                <p class="c-item__subtitle"><?php echo get_field("location")?></p>
                <p class="c-item_shortdes"><?php echo get_field("mesage")?></p>
                <div class="c-icon">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/company/icon.svg" alt="icon arrow">
                </div>
              </div>
              <?php $tags = get_the_terms( $post->ID, 'company_tags' );?>
              <div class="c-item__glabel">
              <?php if ( $tags ):?>
                <?php foreach ($tags as $tag):?>
                  <div class="c-item__label">
                    <p class="c-item__labeltext"><?php echo $tag->name?></p>
                  </div>
                <?php endforeach;?>
              <?php endif; ?>
                </div>
              </a>
            </div>

            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata();?>  
          </div>
          <a href="<?php echo home_url('company')?>" class="c-btn01 u-center__margin u-nohover">
            <p class="c-btn01__txt"> 企業一覧はこちら </p>
            <picture class="c-btn01__groupimg">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/index_pc/icon__btn.svg" alt="企業一覧はこちら">
            </picture>
          </a>
        </div>
      </section>
    </main>
    <div class="c-backtotop u-hover" id="scroll-top">
      <div class="c-backtotop__arrow">
        <picture class="c-backtotop__icon">
          <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/index_mb/scrolltotop.svg">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/index_pc/icon__btnbacktotop.svg" alt="backtotop">
        </picture>
      </div>
    </div>
<?php get_footer();?>