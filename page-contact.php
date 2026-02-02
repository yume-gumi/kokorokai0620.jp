<?php get_header();  ?>

<main id="contact" class="service_page">

    <h4 class="service-head">お問い合わせ</h4>

    <div class="top-bg wave-yellow"></div>


    <section id="tell-container">
         
        <h3>お電話でのお問い合わせ</h3>
        <div class="tell-outer">

        <div class="tell-brock">

            <span class="tell-title">
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
        <!-- tell-brock -->
        <div class="tell-brock">

            <span class="tell-title">
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
        <!-- tell-brock -->
        <div class="tell-brock">

            <span class="tell-title">
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
        <!-- tell-brock -->
        <div class="tell-brock">

            <span class="tell-title">
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
        <!-- tell-brock -->



        </div>
        <!-- tell-outer -->

    </section>
    <!-- tell-container -->


    <section id="form" class="bg-yellow">
        
        <?php the_content(); ?>

    </section>
    <!-- ＃フォrm -->
    



    <?php
    $args  =  [
        "top-wave"  =>  "blue",
        "background"  =>  "yellow",
        "no-wave"  =>  true,
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>
</main>

<?php get_footer();  ?>