<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>こころ会</title>
    <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/icon/favicon.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css">

    <?php wp_head(); ?> 
    
</head>



<body>

    <header id="js-header">

        <div class="header-container">

            <h1>
                <a href="<?= site_url(); ?>">
                    <img class="header-logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_h1_sp.png" alt="一般社団法人こころ会">
                </a>
            </h1>

            <nav class="header__nav--pc">
                <ul>
                    <li class=" background_circle background_circle--01">
                        <a href="<?= site_url(); ?>/news">お知らせ</a>
                    </li>
                    <li class="service background_circle background_circle--02">
                        <a class="service">
                            事業内容
                            <div class="service__items">
                                <object>
                                    <a href="<?= site_url(); ?>/ponte">
                                        <span>就労継続支援B型</span>
                                        ぽんて
                                    </a>
                                </object>
                                <object>
                                    <a href="<?= site_url(); ?>/plus">
                                        <span>就労継続支援B型</span>
                                        ぷらす
                                    </a>
                                </object>
                                <object>
                                    <a href="<?= site_url(); ?>/sakura">
                                        <span>地域活動支援センター</span>
                                        さくら
                                    </a>
                                </object>
                                <object>
                                    <a href="<?= site_url(); ?>/PW">
                                        <span>相談支援</span>
                                        ぽんて
                                    </a>
                                </object>
                            </div>
                        </a>
                    </li>
                    <li class="background_circle background_circle--03">
                        <a href="<?= site_url(); ?>/about">会社概要</a>
                    </li>
                    <li>
                        <a href="<?= site_url(); ?>/contact">お問い合わせ</a>
                    </li>
                    <li>
                        <a href=""><img src="<?= get_theme_file_uri(); ?>/assets/images/icon/instagram.svg" alt=""></a>
                    </li>
                </ul>

            </nav>

            <!-- ハンバーガーボタン -->
            <button id="js-hamburger" class="hamburger-btn">
                <span class=""></span>
                <span class=""></span>
                <p class="">MENU
                <p>
            </button>
            <!-- ハンバーガーボタン -->

        </div>
        <!-- .header-container -->

        
    </header>
    
    <!-- ハンバーガーメニュー -->

    <nav id="js-nav" class="header__nav--sp">

        <ul>

            <li><a href="index.html">TOPページ<span class="arrow"></span></a></li>
            <li><a href="news.html">お知らせ<span class="arrow"></span></a></li>

            <li class="btn-accordion js-ac">
                <button class="accordion-head">事業内容</button>
                <span class="plus"></span>
            </li>
            <!-- アコーディオンメニュー -->
            <div class="accordion-body">
                <a href="<?= site_url(); ?>/ponte">就労継続支援B型　ぽんて</a>
                <a href="<?= site_url(); ?>/plus">就労継続支援B型　ぷらす</a>
                <a href="<?= site_url(); ?>/sakura">地域活動センター　さくら</a>
                <a href="<?= site_url(); ?>/pw">相談支援　ぽんて</a>
            </div>
            <!-- アコーディオンメニュー閉じる -->


            <li><a href="<?= site_url(); ?>/about">会社概要<span class="arrow"></span></a></li>

            <a href="#"><img class="inst" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/instagram.svg" alt="instagram"></a>
            <div class="sub-menu">
                <a href="<?= site_url(); ?>/contact"><span>お問い合わせ</span></a>
                <a href="<?= site_url(); ?>/privacy"><span>プライバシーポリシー</span></a>
            </div>

        </ul>

    </nav>
    <!-- ハンバーガーメニュー閉じる -->
