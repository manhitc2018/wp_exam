<?php get_header();?>
    <main class="company">
      <section class="c-banner">
        <div class="c-banner__content">
          <h2 class="c-banner__titleen"> CORPORATE INFORMATION </h2>
          <p class="c-banner__subtitleja">企業一覧</p>
        </div>
      </section>
      <div class="l-container">
        <div class="c-breadcrumb">
          <a href="./" class="c-breadcrumb__home">ホーム</a>
          <p class="c-breadcrumb__arrow"> > </p>
          <p class="c-breadcrumb__present">企業一覧</p>
        </div>
      </div>
      <section class="c-company">
        <div class="l-container">
          <div class="c-list01">
          <?php 
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                  $args  = array(
                      'post_type' => 'company',
                      'posts_per_page' => 3,
                      'paged' => $paged
                  );
                  $company_query = new WP_Query($args);
              ?>
              <?php if ( $company_query->have_posts() ) : ?>
                <?php while ( $company_query->have_posts() ) : 
                    $company_query->the_post(); 
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
        </div>
      </section>
      <div class="l-container">
        <div class="c-line"></div>
      </div>
      <div class="l-container">
        <div class="c-pagination">
        <?php 
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                        'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format'  => '?paged=%#%',
                        'prev_text'    => __('PREV'),
                        'next_text'    => __('NEXT'),
                        'current' => max( 1, get_query_var('paged') ),
                        'total'   => $company_query->max_num_pages
                    ) );
                ?>
        </div>
      </div>
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