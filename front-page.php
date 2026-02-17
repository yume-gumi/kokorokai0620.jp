<?php get_header();  ?>

<!--  MAIN  -->
<main id="top">
    <div class="loading">
        <div class="loading__mask"></div>
        <div class="loading__inner">
            <img src="<?= get_theme_file_uri(); ?>/assets/images/logo.svg" alt="" class="loading__logo">
            <div class="loading__percent"><span id="percent-text"></span>％</div>
        </div>
    </div>
    <section id="top-container">

        <div class="top-bg"></div>

        <section id="kv">

            <div class="kv-container">

                <div class="kv-photo">
                    <img class="photo-sp" src="<?php echo  get_theme_file_uri();  ?>/assets/images/kv_sp.png" alt="メインビジュアル" class="mainvisual">
                    <img class="photo-pc" src="<?php echo  get_theme_file_uri();  ?>/assets/images/kv_pc.png" alt="メインビジュアル" class="mainvisual">

                    <div class="catch_copy-outer">

                        <p class="catch_copy">
                        ひとりの小さな幸せが、波紋のように<br>やさしく広がり、地域の幸せへ</p>
                        <p class="catch_copy">誰もが自分らしく輝ける瞬間を<br>丁寧につくっていきます。</p>

                    </div>
                </div>
                <!--  kv-photo  -->


                <div class="kv-inner">
                    みんなの<span>幸せ</span>を<br>
                    <span>考え</span>、<span>願い</span>、<br>
                    <span>行動</span>していきます
                </div>

            </div>


        </section>
        <!--  kv  -->

        <div class="cc-img"></div>

    </section>


    <div class="wave-top  wave-yellow"></div>
    <section id="news">


        <h2 class="h2-01">お知らせ</h2>

        <div class="news-container">


            <div class="news-outer">

            <?php
            // ページ番号の取得
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post', //投稿タイプ
                'posts_per_page' => 4, //１ページの表示数
                'paged' => $paged //何ページ目の情報を取得するかを指定
            );

            // 以下、ループ構造
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            ?>

                <a href="<?php the_permalink(); ?>">
                    <div class="news-brock">

                        <img src="<?= get_thumbnail(); ?>" alt="<?php the_title(); ?>">

                        <div class="date">
                            <span> <?php the_time("Y/m/d"); ?></span>
                            <p>お知らせ</p>
                        </div>

                        <div class="news-inner">

                            <p class="news-title">
                                <?php the_title(); ?>
                            </p>

                            <p class="news-text">
                                <?php the_excerpt(); ?>
                            </p>

                        </div>

                    </div>
                </a>
                <?php
                endwhile;
            endif;
            ?>

                <!-- <a href="news-page.html">
                    <div class="news-brock">

                        <img src="<?php echo  get_theme_file_uri();  ?>/assets/images/noimage.png" alt="no  image">

                        <div class="date">
                            <span>25/12/31</span>
                            <p>お知らせ</p>
                        </div>

                        <div class="news-inner">

                            <p class="news-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <p class="news-text">テキストテキストテキストテキストテキストテキスト</p>

                        </div>

                    </div>
                </a>
                <a href="news-page.html">
                    <div class="news-brock">

                        <img src="<?php echo  get_theme_file_uri();  ?>/assets/images/noimage.png" alt="no  image">

                        <div class="date">
                            <span>25/12/31</span>
                            <p>お知らせ</p>
                        </div>

                        <div class="news-inner">

                            <p class="news-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <p class="news-text">テキストテキストテキストテキストテキストテキスト</p>

                        </div>

                    </div>
                </a>
                <a href="news-page.html">
                    <div class="news-brock">

                        <img src="<?php echo  get_theme_file_uri();  ?>/assets/images/noimage.png" alt="no  image">

                        <div class="date">
                            <span>25/12/31</span>
                            <p>お知らせ</p>
                        </div>

                        <div class="news-inner">

                            <p class="news-title">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</p>
                            <p class="news-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>

                        </div>

                    </div>
                </a> -->

            </div>
            <!--  news-outer  -->

            <a href="<?php echo  esc_url(home_url('/news'));  ?>" class="btn  more">一覧を見る<span class="btn-circle"></span></a>

        </div>
        <!--  news-contens  -->

    </section>
    <!--  news  -->


    <section id="service">
        <div class="wave-bottom  wave-yellow"></div>


        <div class="service-container">

            <h2 class="h2-02">事業内容</h2>

            <div class="  service-outer">

                <div class="service-block">
                    <a href="<?php echo  esc_url(home_url('/service/ponte/'));  ?>">
                        <img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_simple.svg" alt="就労継続支援B型
                                                ぽんて">
                        <p>就労継続支援B型<br>
                            ぽんて</p>
                    </a>
                </div>

                <div class="service-block">
                    <a href="<?php echo  esc_url(home_url('/service/plus/'));  ?>">
                        <img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_simple.svg" alt="就労継続支援B型ぷらす">
                        <p class="service-title">就労継続支援B型<br>
                            ぷらす</p>
                    </a>
                </div>

                <div class="service-block">
                    <a href="<?php echo  esc_url(home_url('/service/sakura/'));  ?>">
                        <img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_simple.svg" alt="地域活動支援センターさくら">
                        <p class="service-title">地域活動支援センター<br>
                            さくら</p>
                    </a>
                </div>

                <div class="service-block">
                    <a href="<?php echo  esc_url(home_url('/service/ponte-pw/'));  ?>">
                        <img class="top-logo-img" src="<?php echo  get_theme_file_uri();  ?>/assets/images/logo_simple.svg" alt="相談支援ぽんて">
                        <p class="service-title">相談支援<br>
                            ぽんて</p>
                    </a>
                </div>

            </div>
            <!--  service-outer  -->

        </div>
        <!--  service-container  -->

    </section>
    <!--  service  -->



    <?php
    $args  =  [
        "top-wave"  =>  "green",
        "background"  =>  "pink",
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>


</main>
<!--  MAIN  -->
<script src="<?php echo  get_theme_file_uri();  ?>/assets/js/kv.js"></script>

<?php get_footer();  ?>