<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>こころ会</title>
    <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/icon/favicon.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css">

</head>

<body>

    <header class="js-header">

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

    </header>

    <!-- MAIN -->
    <main>

        <section id="kv">

            <div class="kv-container">

                <div class="kv-frame">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/kv_pc.png" alt="メインビジュアル" class="mainvisual">
                </div>

                <div class="catch_copy-outer">

                    <div class="catch_copy">
                        <p>一人の幸せが、水の波紋のように<br>
                            周りに広がり、地域の幸せに繋がる ー</p>
                    </div>
                    <div class="catch_copy">
                        <p>誰もが幸せに暮らせるように、<br>
                            最初の小さな幸せづくりを、</p>
                    </div>
                    <div class="catch_copy">
                        <p>そして、一人ひとりが輝ける<br>
                            瞬間を創造していきます。</p>
                    </div>
                </div>

                <div class="kv-inner">
                    みんなの<span class="cacth_copy-2rd">幸せ</span>を<br>
                    <span class="cacth_copy-2rd">考え</span>、<span class="cacth_copy-2rd">願い</span>、<br>
                    <span class="cacth_copy-2rd">行動</span>していきます
                </div>

            </div>

        </section>
        <!-- kv -->

        <div class="svg-outer">

            <svg class="bg-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 376 43" preserveAspectRatio="none">
                <path class="wave-yellow"
                    d="M2597,7805.487c29.009,23.894,41.462,31.49,81.181,31.515s53.606-30.714,109.541-31.515,58.609,31.658,105.87,31.515,79.507-31.515,79.507-31.515v386.9s-44.219-30.3-79.507-30.3-62.556,30.347-105.87,30.3-71.726-30.3-109.541-30.3-64.6,12.919-81.181,30.3C2596.65,8166.738,2596.672,7807.078,2597,7805.487Z"
                    transform="translate(-2597.101 -7798.223)">
            </svg>
        </div>

        <section id="news">


            <h2>お知らせ</h2>

            <div class="news-container">



                <div class="news-outer">


                    <a href="news-page.html">
                        <div class="news-brock">

                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.png" alt="no image">

                            <div class="date">
                                <span>25/12/31</span>
                                <p>お知らせ</p>
                            </div>

                            <div class="news-inner">

                                <p class="news-title">タイトルタイトルタイトルタイトル</p>
                                <p class="news-text">テキストテキスト</p>

                            </div>

                        </div>
                    </a>

                    <a href="news-page.html">
                        <div class="news-brock">

                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.png" alt="no image">

                            <div class="date">
                                <span>25/12/31</span>
                                <p>お知らせ</p>
                            </div>

                            <div class="news-inner">

                                <p class="news-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                                <p class="news-text">テキストテキスト</p>

                            </div>

                        </div>
                    </a>
                    <a href="news-page.html">
                        <div class="news-brock">

                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.png" alt="no image">

                            <div class="date">
                                <span>25/12/31</span>
                                <p>お知らせ</p>
                            </div>

                            <div class="news-inner">

                                <p class="news-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                                <p class="news-text">テキストテキスト</p>

                            </div>

                        </div>
                    </a>
                    <a href="news-page.html">
                        <div class="news-brock">

                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.png" alt="no image">

                            <div class="date">
                                <span>25/12/31</span>
                                <p>お知らせ</p>
                            </div>

                            <div class="news-inner">

                                <p class="news-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                                <p class="news-text">テキストテキスト</p>

                            </div>

                        </div>
                    </a>

                </div>
                <!-- news-outer -->

                <a href="news.html" class="btn more">一覧を見る<span class="btn-circle"></span></a>

            </div>
            <!-- news-contens -->

        </section>
        <!-- news -->


        <section id="service">

            <svg class="bg-under wave-yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 740 84.628">
                <g transform="translate(-0.699 -691.113)">
                    <path class=""
                        d="M.147,768.712c57.094-47.018,81.6-61.975,159.769-62.034s105.509,60.44,215.584,62.034c84.746-.905,131.547-61.365,208.361-62.034,112.338-1.929,156.482,62.034,156.482,62.034V7.26S653.315,66.893,583.861,66.893,460.738,7.162,375.5,7.26,234.329,66.893,159.916,66.893,32.778,41.465.147,7.26C-.542,57.722-.5,765.563.147,768.712Z"
                        transform="translate(0.355 -7.26)" />
                </g>
            </svg>

            <div class="service-container">

                <h2>事業内容</h2>

                <div class="service-outer">

                    <div class="service-block">
                        <a href="ponte.html">
                            <img class="top-logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_ponte.png" alt="就労継続支援B型
                        ぽんて">
                            <p>就労継続支援B型<br>
                                ぽんて</p>
                        </a>
                    </div>

                    <div class="service-block">
                        <a href="plus.html">
                            <img class="top-logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_plus.png" alt="就労継続支援B型ぷらす">
                            <p class="service-title">就労継続支援B型<br>
                                ぷらす</p>
                        </a>
                    </div>

                    <div class="service-block">
                        <a href="sakura.html">
                            <img class="top-logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_sakura.png" alt="地域活動支援センターさくら">
                            <p class="service-title">地域活動支援センター<br>
                                さくら</p>
                        </a>
                    </div>

                    <div class="service-block">
                        <a href="PW.html">
                            <img class="top-logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_ponte.png" alt="相談支援ぽんて">
                            <p class="service-title">相談支援<br>
                                ぽんて</p>
                        </a>
                    </div>

                </div>
                <!-- service-outer -->

            </div>
            <!-- service-container -->

        </section>
        <!-- service -->

        <section id="footer_top">
            <svg class="bg-under wave-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 740 84.628">
                <g transform="translate(-0.699 -691.113)">
                    <path class=""
                        d="M.147,768.712c57.094-47.018,81.6-61.975,159.769-62.034s105.509,60.44,215.584,62.034c84.746-.905,131.547-61.365,208.361-62.034,112.338-1.929,156.482,62.034,156.482,62.034V7.26S653.315,66.893,583.861,66.893,460.738,7.162,375.5,7.26,234.329,66.893,159.916,66.893,32.778,41.465.147,7.26C-.542,57.722-.5,765.563.147,768.712Z"
                        transform="translate(0.355 -7.26)" />
                </g>
                </g>
            </svg>


            <div class="footer_top-container">

                <div class="bg-img">

                    <div class="footer_top-outer">

                        <h3 class="contact-text">お気軽にお問い合わせください</h3>


                        <p>一般社団法人こころ会</p>

                        <div class="footer_top-inner">

                            <div class="footer_top-block">
                                <p>049-293-6729</p>
                                <span>平日 9:00〜17:00まで</span>
                            </div>

                            <a class="btn contact" href="contact.html">
                                <img class="mail-icon" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/mail.svg" alt="mail icon">
                                お問い合わせ
                                <span class="btn-circle"></span>
                            </a>

                        </div>
                        <!-- footer_top-inner -->

                    </div>
                    <!-- footer_top-outer -->

                </div>
                <!-- bg-img -->

            </div>
            <!-- footer_top-container -->


            <!-- topに戻るボタン -->
            <div id="back-page-top">
                <button class="btn-top"">
                    <span></span>
                    <span></span>
                </button>
            </div>


        </section>
        <!-- footer_top -->

            <svg class=" bg-under wave-pink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 740 84.628">
                    <g transform="translate(-0.699 -691.113)">
                        <path class=""
                            d="M.147,768.712c57.094-47.018,81.6-61.975,159.769-62.034s105.509,60.44,215.584,62.034c84.746-.905,131.547-61.365,208.361-62.034,112.338-1.929,156.482,62.034,156.482,62.034V7.26S653.315,66.893,583.861,66.893,460.738,7.162,375.5,7.26,234.329,66.893,159.916,66.893,32.778,41.465.147,7.26C-.542,57.722-.5,765.563.147,768.712Z"
                            transform="translate(0.355 -7.26)" />
                    </g>
                    </svg>

    </main>
    <!-- MAIN -->


    <footer>

        <div class="footer-container">

            <h1>
                <a href="index.html">
                    <img class="header-logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_h1_sp.png" alt="一般社団法人こころ会">
                </a>
            </h1>

            <div class="address">
                <p>〒356-0059</p>
                <p>埼玉県ふじみ野市桜ヶ丘1-38-34</p>
                <p>TEL : 049-293-6729</p>
            </div>

            <nav>

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


        </div>
        <!-- footer-container -->

        <small>©︎ KOKOROKAI All Rights Reserved.</small>

    </footer>


    <!-- jsのファイル読み込み -->
    <script src="<?php echo get_theme_file_uri(); ?>/assets/js/script.js"></script>
</body>

</html>