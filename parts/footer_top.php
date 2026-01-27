
    <section id="footer_top" class="bg-<?= $args["background"] ?>">
        <?php if(!isset($args["no-wave"])): ?>
            <div class="wave-bottom wave-<?= $args["top-wave"]; ?>"></div>
        <?php endif; ?>
        <?php if(isset($args["service"])): ?>
            <div class="service-container">

                <h2>一般社団法人　こころ会</h2>

                <div class="service-outer">

                    <div class="service-block">
                        <a href="<?= site_url(); ?>/service/ponte">
                            <img class="top-logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_ponte.png" alt="就労継続支援B型 ぽんて">
                            <p>
                                <span>就労継続支援B型</span>
                                ぽんて
                            </p>
                        </a>
                    </div>

                    <div class="service-block">
                        <a href="<?= site_url(); ?>/service/plus">
                            <img class="top-logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_plus.png" alt="就労継続支援B型ぷらす">
                            <p class="service-title">
                                <span>就労継続支援B型</span>
                                ぷらす
                            </p>
                        </a>
                    </div>

                    <div class="service-block">
                        <a href="<?= site_url(); ?>/service/sakura">
                            <img class="top-logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_sakura.png" alt="地域活動支援センターさくら">
                            <p class="service-title">
                                <span>地域活動支援センター</span>
                                さくら
                            </p>
                        </a>
                    </div>

                    <div class="service-block">
                        <a href="<?= site_url(); ?>/service/ponte-pw">
                            <img class="top-logo-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo_ponte.png" alt="相談支援ぽんて">
                            <p class="service-title">
                                <span>相談支援</span>
                                ぽんて
                            </p>
                        </a>
                    </div>

                </div>
                <!-- service-outer -->

            </div>
        <?php endif; ?>
        <div class="footer_top-container">

            <div class="bg-img">

                <div class="footer_top-outer">

                    <div class="contact-text">お気軽にお問い合わせください</div>


                    <p>一般社団法人こころ会</p>

                    <div class="footer_top-inner">

                        <div class="footer_top-block">
                            <p>049-293-6729</p>
                            <span>平日 9:00〜17:00まで</span>
                        </div>

                        <a class="btn contact" href="<?php echo esc_url( home_url('/contact') ); ?>">
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
        <section id="back-btn-containar">
            <a href="#">
                <div id="back-page-top">
                    <button class="btn-top">
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </a>
        </section>
    </section>
    <div class="wave-footer">
        <div class="wave-bottom wave-<?= $args["background"] ?>"></div>
    </div>