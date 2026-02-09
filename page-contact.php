<?php get_header();  ?>

<main id="contact" class="service_page">

    <h4 class="service-head">お問い合わせ</h4>

    <div class="wave-top wave-yellow"></div>


    <section id="tell-contact" class="bg-yellow">

        <h3>お電話でのお問い合わせ</h3>
        <div class="tell-outer">

            <div class="tell-card">

                <span class="tell-title line-green">
                    就労継続支援B型事業所
                </span>

                <p>ぷらす</p>

                <div class="tell-flex">
                    <div class="tell-image">
                        <img src="<?php echo  get_theme_file_uri();  ?>/assets/images/icon/tellphone.svg" alt="電話アイコン">
                    </div>
                    <div class="tell-number">
                        049-293-6729
                    </div>
                </div>
                <!-- tell-flex -->

            </div>
            <!-- tell-card -->
            <div class="tell-card">

                <span class="tell-title line-pink">
                    就労継続支援B型事業所
                </span>

                <p>ぽんて</p>

                <div class="tell-flex">
                    <div class="tell-image">
                        <img src="<?php echo  get_theme_file_uri();  ?>/assets/images/icon/tellphone.svg" alt="電話アイコン">
                    </div>
                    <div class="tell-number">
                        049-290-3966
                    </div>
                </div>
                <!-- tell-flex -->

            </div>
            <!-- tell-card -->
            <div class="tell-card">

                <span class="tell-title line-orange">
                    地域活動センター
                </span>

                <p>さくら</p>

                <div class="tell-flex">
                    <div class="tell-image">
                        <img src="<?php echo  get_theme_file_uri();  ?>/assets/images/icon/tellphone.svg" alt="電話アイコン">
                    </div>
                    <div class="tell-number">
                        049-293-6739
                    </div>
                </div>
                <!-- tell-flex -->

            </div>
            <!-- tell-card -->
            <div class="tell-card">

                <span class="tell-title line-blue">
                    相談支援
                </span>

                <p>ぽんて</p>

                <div class="tell-flex">
                    <div class="tell-image">
                        <img src="<?php echo  get_theme_file_uri();  ?>/assets/images/icon/tellphone.svg" alt="電話アイコン">
                    </div>
                    <div class="tell-number">
                        049-290-3966
                    </div>
                </div>
                <!-- tell-flex -->

            </div>
            <!-- tell-card -->



        </div>
        <!-- tell-outer -->

    </section>
    <!-- tell-container -->


    <section id="mail-contact" class="bg-yellow">

    <div id="form">

        <h3>お問い合わせフォーム</h3>
        <p class="form-desc">必要事項にご入力の上、「送信する」ボタンを押してください。</p>

        <div class="form-outer">

            <?php the_content(); ?>

            
            
        </div>
        
    </div>
    <!-- #form -->
    </section>
    <!-- ＃mail-contact -->


    <?php
    $args  =  [
        "top-wave"  =>  "yellow",
        "background"  =>  "blue",
        "service"  =>  true
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>




</main>

<?php get_footer();  ?>