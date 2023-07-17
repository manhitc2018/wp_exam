<?php get_header();?>
    <main class="contact">
      <section class="c-banner">
        <div class="c-banner__content">
          <h2 class="c-banner__titleen"> CONTACT </h2>
          <p class="c-banner__subtitleja">お問い合わせ</p>
        </div>
      </section>
      <section class="c-contact">
        <div class="l-container">
          <div class="c-breadcrumb">
            <a href="./" class="c-breadcrumb__home">ホーム</a>
            <p class="c-breadcrumb__arrow"> > </p>
            <p class="c-breadcrumb__present">お問い合わせ</p>
          </div>
        </div>
        <div class="l-container__w820">
          <h2 class="c-contact__title">一般･学生の皆様へ</h2>
          <p class="c-contact__des"> この度は愛媛シゴト図鑑をご覧いただきありがとうございます。<br> 愛媛シゴト図鑑を見て疑問に思ったこと、ご質問等ございましたら下記の問い合わせフォームにて意見をお寄せください<br>。少し聞きづらいなと思うようなことも遠慮なくご質問ください。愛媛シゴト図鑑は頑張る就活生を応援しています！<br> 個人情報の取扱に関しましては、<a href="#" class="c-contact__des--spec01">プライバシーポリシー</a>をご確認ください。<br>
            <span class="c-contact__des--specicon">※</span><span class="c-contact__des--spec02">は入力必須です。</span>
          </p>
          <?php echo do_shortcode('[contact-form-7 id="58" title="コンタクトフォーム 1" html_class="c-form01" html_id="contact__form"]')?>
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