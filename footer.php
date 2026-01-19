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

<?php wp_footer(); ?>
</body>

</html>