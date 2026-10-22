<?php get_header();  ?>
<main id="about">
    <section class="about__top">
        <div class="about__top--inner">

            <picture>
                <source srcset="<?= get_theme_file_uri()  ?>/assets/images/about_message.png" media="(min-width:  640px)" />
                <img src="<?= get_theme_file_uri()  ?>/assets/images/about_message_sp.png" alt="MDN" />
            </picture>

        </div>

        <div class="wave-top  wave-blue"></div>
    </section>
    <section class="about__company">
        <h2 class="h2-01">法人概要</h2>
        <dl>
            <div>
                <dt>会社名</dt>
                <dd>一般社団法人　こころ会</dd>
            </div>
            <div>
                <dt>代表理事</dt>
                <dd>岩長泰志</dd>
            </div>
            <div>
                <dt>所在地</dt>
                <dd>〒356-0059　埼玉県ふじみ野市松山1-2-5 カントー商事ビル1F</dd>
            </div>
            <div>
                <dt>電話番号</dt>
                <dd>049-290-3966</dd>
            </div>
            <div>
                <dt>FAX番号</dt>
                <dd>049-264-8070</dd>
            </div>
            <div>
                <dt>事業案内</dt>
                <dd>
                    <ul>
                        <li>就労継続支援B型</li>
                        <li>地域活動支援センター</li>
                        <li>相談支援（計画相談・委託相談）</li>
                    </ul>

                    <div class="service">
                        <div class="service__item">
                            <p>
                                <span>就労継続支援B型</span>
                                ぽんて
                            </p>
                            <address>
                                〒356-0027　<br>
                                埼玉県ふじみ野市松山1-2-5&nbsp;<br>
                                カントー商事ビル1F
                            </address>
                            <div class="service__item--contact">
                                <a href="tel:049-290-3966">TEL:049-290-3966</a>
                                <span>FAX:049-264-8070</a>

                            </div>
                        </div>
                        <div class="service__item">
                            <p>
                                <span>就労継続支援B型</span>
                                ぷらす
                            </p>
                            <address>
                                〒356-0059　<br>
                                埼玉県ふじみ野市&nbsp;<br>
                                桜ヶ丘1-38-34
                            </address>
                            <div class="service__item--contact">
                                <a href="tel:049-293-6729">TEL:049-293-6729</a>
                                <span>FAX:049-293-6780</a>
                            </div>
                        </div>
                        <div class="service__item">
                            <p>
                                <span>地域活動支援センター</span>
                                さくら
                            </p>
                            <address>
                                〒356-0059　<br>
                                埼玉県ふじみ野市&nbsp;<br>
                                桜ヶ丘1-38-34 2F
                            </address>
                            <div class="service__item--contact">
                                <a href="tel:049-293-6329">TEL:049-293-6739</a>
                                <span>FAX:049-293-6780</a>
                            </div>
                        </div>
                        <div class="service__item">
                            <p>
                                <span>相談支援</span>
                                ぽんて相談室
                            </p>
                            <address>
                                〒356-0027　<br>
                                埼玉県ふじみ野市&nbsp;<br>
                                桜ヶ丘1-38-34 2F

                            </address>
                            <div class="service__item--contact">
                                <a href="tel::049–290-3966">TEL:049-293-6779</a>
                                <span>FAX:049-293-6780</a>

                            </div>
                        </div>
                    </div>
                </dd>
            </div>
        </dl>
    </section>
    <?php
    $args  =  [
        "top-wave"  =>  "blue",
        "background"  =>  "yellow",
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>
</main>

<?php get_footer();  ?>