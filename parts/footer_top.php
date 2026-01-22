
    <section id="footer_top" class="bg-<?= $args["background"] ?>">
        <div class="wave-bottom wave-<?= $args["top-wave"]; ?>"></div>
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
                <a href="<?php echo home_url('/'); ?>">
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