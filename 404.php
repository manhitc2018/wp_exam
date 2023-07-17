<?php get_header();?>
<main class="c-404">
    <h2 class="c-404__title"> 404</h2>
    <p class="c-404__sub">Page not found</p>

    <p class="c-404__hometext">Please return to the top page</p>
    <a href="<?php echo home_url()?>" class="c-btn01 u-center__margin u-nohover">
            <p class="c-btn01__txt"> ホームページ </p>
            <picture class="c-btn01__groupimg">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/index_pc/icon__btn.svg" alt="ホームページ">
            </picture>
          </a>
</main>
<?php get_footer();?>