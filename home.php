<?php get_header();  ?>

<!--  MAIN  -->
<main id="news">

    <h4 class="service-head">お知らせ</h4>

    <div class="wave-top wave-blue"></div>


    <section id="news-home" class="bg-blue">
        <div class="news-outer">

            <div class="news-inner">

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

                        <a href="<?php the_permalink(); ?>" class="news-card">

                            <div class="deta-outer">

                                <span class="deta">
                                    <?php the_time("Y.m.d"); ?>
                                </span>

                                <span class="category">
                                    <?php
                                    $category = get_the_category();
                                    if ($category) {
                                        echo '<span>' . $category[0]->name . '</span>';
                                    }
                                    ?>
                                </span>
                            </div>

                            <p class="title"><?php
                                                        // タイトルの文字数を30文字に制限し、超える場合は「...」を付与
                                                        $title = get_the_title();
                                                        echo mb_strimwidth($title, 0, 80, '...', 'UTF-8');
                                                        ?>
                            </p>
                        </a>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,      // 現在のページの両側に表示する数字の数
                    'prev_text' => '<', // 「前へ」リンクのテキスト
                    'next_text' => '>', // 「次へ」リンクのテキスト
                ));
                ?>
            </div>
            <!-- news-outer -->

    </section>
    <!-- #news -->



    <?php
    $args  =  [
        "top-wave"  =>  "blue",
        "background"  =>  "yellow",
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>
</main>
<!--  MAIN  -->


<?php get_footer();  ?>