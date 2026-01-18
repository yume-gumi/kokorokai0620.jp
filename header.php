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
                <a href="index.html">
                    <img class="header-logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_h1_sp.png" alt="一般社団法人こころ会">
                </a>
            </h1>

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
    <nav id="js-nav" class="header-nav">

        <ul>

            <li><a href="index.html">TOPページ<span class="arrow"></span></a></li>
            <li><a href="news.html">お知らせ<span class="arrow"></span></a></li>

            <li class="btn-accordion js-ac">
                <button class="accordion-head">事業内容</button>
                <span class="plus"></span>
            </li>
            <!-- アコーディオンメニュー -->
            <div class="accordion-body">
                <a href="ponte.html">就労継続支援B型　ぽんて</a>
                <a href="plus.html">就労継続支援B型　ぷらす</a>
                <a href="sakura.html">地域活動センター　さくら</a>
                <a href="PW.html">相談支援　ぽんて</a>
            </div>
            <!-- アコーディオンメニュー閉じる -->


            <li><a href="about.html">会社概要<span class="arrow"></span></a></li>

            <a href="#"><img class="inst" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/instagram.svg" alt="instagram"></a>
            <div class="sub-menu">
                <a href="contact.html"><span>お問い合わせ</span></a>
                <a href="privacy.html"><span>プライバシーポリシー</span></a>
            </div>

        </ul>

    </nav>
    <!-- ハンバーガーメニュー閉じる -->
