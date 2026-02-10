<footer>

    <div class="footer-container">

        <div class="footer__company">
            <h1>
                <a href="<?= site_url();  ?>/">
                    <img class="header-logo" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo.svg" alt="一般社団法人こころ会">
                </a>
            </h1>

            <div class="address">
                <p>〒356-0059</p>
                <p>埼玉県ふじみ野市桜ヶ丘1-38-34</p>
                <p>TEL : 049-293-6729</p>
            </div>

        </div>


        <nav class="footer_nav__pc">
            <div class="service-items">
                <p class="list-style">事業内容</p>
                <ul>
                    <li>
                        <a href="<?= site_url()  ?>/service/ponte">
                            <span>就労継続支援B型</span>ぽんて
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url()  ?>/service/plus">
                            <span>就労継続支援B型</span>ぷらす
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url()  ?>/service/sakura">
                            <span>地域活動支援センター</span>さくら
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url()  ?>/service/ponte-pw">
                            <span>相談支援</span>ぽんて
                        </a>
                    </li>
                </ul>
            </div>
            <ul>
                <li class="list-style"><a href="<?= site_url()  ?>/news">お知らせ</a></li>
                <li class="list-style"><a href="<?= site_url()  ?>/about">会社概要</a></li>
                <li class="list-style"><a href="<?= site_url()  ?>/contact">お問い合わせ</a></li>
                <li class="list-style"><a href="<?= site_url()  ?>/privacy">プライバシーポリシー</a></li>
            </ul>

            <div class="instagram">
                <img src="<?= get_theme_file_uri();  ?>/assets/images/icon/instagram.svg" alt="">
            </div>
        </nav>

        <nav class="footer_nav__sp">

            <ul>

                <li><a href="<?= site_url();  ?>">TOPページ<span class="arrow"></span></a></li>

                <li><a href="<?= site_url();  ?>/news">お知らせ<span class="arrow"></span></a></li>

                <li class="btn-accordion  js-ac">
                    <button class="accordion-head">事業内容</button>
                    <span class="plus"></span>
                </li>
                <!--  アコーディオンメニュー  -->
                <div class="accordion-body">
                    <a href="<?= site_url();  ?>/service/ponte">就労継続支援B型　ぽんて</a>
                    <a href="<?= site_url();  ?>/service/plus">就労継続支援B型　ぷらす</a>
                    <a href="<?= site_url();  ?>/service/sakura">地域活動センター　さくら</a>
                    <a href="<?= site_url();  ?>/service/ponte-pw">相談支援　ぽんて</a>
                </div>
                <!--  アコーディオンメニュー閉じる  -->

                <li><a href="<?= site_url();  ?>/about">会社概要<span class="arrow"></span></a></li>

                <a href="#"><img class="inst" src="<?php echo  get_theme_file_uri();  ?>/assets/images/icon/instagram.svg" alt="instagram"></a>
                <div class="sub-menu">
                    <a href="<?= site_url();  ?>/contact"><span>お問い合わせ</span></a>
                    <a href="<?= site_url();  ?>/privacy"><span>プライバシーポリシー</span></a>
                </div>

            </ul>


        </nav>


    </div>
    <!--  footer-container  -->

    <small>©︎ KOKOROKAI All Rights Reserved.</small>


</footer>


<!--  jsのファイル読み込み  -->
<script src="<?php echo  get_theme_file_uri();  ?>/assets/js/script.js"></script>

<?php wp_footer();  ?>
</body>

</html>