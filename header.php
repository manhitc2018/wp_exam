<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri() ?>/favicon.svg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;500;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?php if(is_singular('company')):?>
<?php echo "Company | " .get_the_title();?>
<?php else:?>
<?php  echo get_the_title();?>     
<?php endif;?>
</title>
<?php if (is_page('about')):?>
    <meta name="description" content="About page">
<?php elseif (is_page('contact')):?>
    <meta name="description" content="Contact page">
<?php elseif (is_front_page()):?>
    <meta name="description" content="Home page">
<?php elseif (is_post_type_archive('company')):?>
    <meta name="description" content="Company page">
<?php elseif (is_singular('company')):?>
    <meta name="description" content="Company Single page">
<?php else:?>
    <meta name="description" content="404 page">    
<?php endif;?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
</head>

<body>
    <header class="c-header">
        <div class="l-container">
        <div class="c-header__body">
            <div class="c-header__top">
            <a href="<?php echo home_url("/掲載取材依頼の企業様へ")?>">
                <span class="c-header__linktxt"> 掲載・取材依頼の企業様へ </span>
                <picture>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/index_pc/arrow01.svg" alt="掲載・取材依頼の企業様へ">
                </picture>
            </a>
            </div>
            <nav class="c-nav">
            <h1 class="c-nav__left">
                <a href="<?php echo home_url();?>">
                <picture>
                    <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/index_mb/haderlogo.png">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/index_pc/logo__header.png" alt="愛媛シゴト図鑑">
                </picture>
                </a>
            </h1>
            <div class="c-nav__right">
                <ul class="c-nav__list">
                <li class="c-nav__item <?php if (is_post_type_archive('company') || is_singular( 'company' )) : echo 'is-active'; endif;?>">
                    <a href="<?php echo home_url("/company");?>" class="u-nohover c-nav__itemlink">
                    <span class="c-nav__itemtxt">企業一覧</span>
                    </a>
                </li>
                <li class="c-nav__item <?php if (is_page('about')) : echo 'is-active'; endif;?>">
                    <a href="<?php echo home_url("/about")?>" class="u-nohover c-nav__itemlink">
                    <span class="c-nav__itemtxt">愛媛シゴト図鑑とは</span>
                    </a>
                </li>
                <li class="c-nav__item">
                    <a href="<?php echo home_url("/インタビュー")?>" class="u-nohover c-nav__itemlink">
                    <span class="c-nav__itemtxt">インタビュー</span>
                    </a>
                </li>
                <li class="c-nav__item">
                    <a href="<?php echo home_url("/ニュース")?>" class="u-nohover c-nav__itemlink">
                    <span class="c-nav__itemtxt">ニュース</span>
                    </a>
                </li>
                </ul>
                <div class="c-nav__btn <?php if (is_page('contact')) : echo 'is-active'; endif;?>">
                <a href="<?php echo home_url("/contact")?>" class="c-nav__btnlink">
                    <span class="c-nav__btntext"> お問い合わせ </span>
                </a>
                </div>
            </div>
            <div class="c-nav__groupbtnmb">
                <div class="c-nav__btnmb u-bg__green172 <?php if (is_page('contact')) : echo 'is-active__mb'; endif;?>">
                <a href="<?php echo home_url("/contact")?>" class="c-nav__btnmblink">
                    <picture>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/index_mb/envelope.svg" alt="barnav" class="c-nav__imgenvelope">
                    </picture>
                    <span class="c-nav__btnmbtext"> お問い合わせ </span>
                </a>
                </div>
                <div class="c-nav__btnmb u-bg__000 c-nav__btnmb--opennav">
                <a href="javascript:void(0)" class="c-nav__btnmblink ">
                    <picture>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/index_mb/bar3.svg" alt="barnav" class="c-nav__imgnavbar--close">
                    </picture>
                    <span class="c-nav__btnmbtext"> メニュー </span>
                </a>
                </div>
            </div>
            </nav>
        </div>
        </div>
        <div class="c-headermb">
        <div class="c-headermb__body">
            <div class="c-nav__btnmb c-nav__btnmb--close">
            <div class="c-nav__btnmblink">
                <picture>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/index_mb/close__icon.png" alt="閉じる" class="c-nav__imgclose">
                </picture>
                <span class="c-nav__btnmbtext"> 閉じる </span>
            </div>
            </div>
            <ul class="c-headermb__nav">
            <li class="c-headermb__item">
                <a href="<?php echo home_url()?>" class="c-headermb__itemlink"> ホーム </a>
            </li>
            <li class="c-headermb__item">
                <a href="<?php echo home_url("/company")?>" class="c-headermb__itemlink"> 企業一覧 </a>
            </li>
            <li class="c-headermb__item">
                <a href="<?php echo home_url("/about")?>" class="c-headermb__itemlink"> 愛媛シゴト図鑑とは </a>
            </li>
            <li class="c-headermb__item">
                <a href="<?php echo home_url("/インタビュー")?>" class="c-headermb__itemlink"> インタビュー </a>
            </li>
            <li class="c-headermb__item">
                <a href="<?php echo home_url("/ニュース")?>" class="c-headermb__itemlink"> ニュース </a>
            </li>
            <li class="c-headermb__item">
                <a href="<?php echo home_url("/運営会社")?>" class="c-headermb__itemlink"> 運営会社 </a>
            </li>
            <li class="c-headermb__item">
                <a href="<?php echo home_url("/contact")?>" class="c-headermb__itemlink"> お問い合わせ </a>
            </li>
            </ul>
            <div class="c-headermb__content">
            <p class="c-headermb__phone">
                <span class="c-headermb__telphone">TEL.</span>
                <a href="tel:089-947-1411" class="c-headermb__numberphone">089-947-1411</a>
            </p>
            <p class="c-headermb__labelopen">
                <span class="c-headermb__open">受付時間9:00〜17:00（平日のみ）</span>
            </p>
            </div>
            <a href="<?php echo home_url("/掲載取材のご依頼についてはこちら")?>" class="c-btn03 u-nohover">
            <p class="c-btn03__txt"> 掲載・取材のご依頼についてはこちら </p>
            </a>
            <ul class="c-headermb__nav02">
            <li class="c-headermb__item">
                <a href="<?php echo home_url("/プライバシーポリシー")?>" class="c-headermb__itemlink"> プライバシーポリシー </a>
            </li>
            <li class="c-headermb__item">
                <a href="<?php echo home_url("/利用規約")?>" class="c-headermb__itemlink"> 利用規約 </a>
            </li>
            <li class="c-headermb__item c-btn__close c-nav__btnmb--close">
                <p class="c-headermb__itemlink ">
                <i class="fas fa-times c-btn__closeicon"></i> 閉じる
                </p>
            </li>
            </ul>
        </div>
        </div>
    </header>