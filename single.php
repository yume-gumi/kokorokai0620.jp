<?php get_header();  ?>

<!--  MAIN  -->
<main id="single">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <section id="news">

                <h4 class="service-head">お知らせ</h4>

                <div class="wave-top wave-blue"></div>

                <section id="news-home" class="bg-blue">

                    <div class="news-outer">
                        <div class="news-inner">

                            <div class="deta-outer-single">

                                <span class="deta">
                                    <?php the_time("Y.m.d"); ?>
                                </span>

                                <span class="category">
                                    <?php
                                    $category = get_the_category();
                                    if ($category) {
                                        echo $category[0]->name;
                                    }
                                    ?>
                                </span>

                            </div>

                            <h1 class="title-single">
                                <?php the_title(); ?>
                            </h1>

                            <div class="text-single">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="news-pagination">
                            <div class="prev btn">
                                <?php
                                $prev_post = get_previous_post();
                                if ($prev_post) :
                                    previous_post_link('%link', '← 前の記事');
                                else :
                                ?>
                                    <span class="no-post">← 前の記事</span>
                                <?php endif; ?>
                            </div>
                            <div class="next btn">
                                <?php
                                $next_post = get_next_post();
                                if ($next_post) :
                                    next_post_link('%link', '次の記事 →');
                                else :
                                ?>
                                    <span class="no-post">次の記事 →</span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="news-back">
                            <a href="<?php echo  esc_url(home_url('/news'));  ?>" class="btn  more">一覧を見る<span class="btn-circle"></span></a>
                        </div>

                    </div>

                </section>
                <!-- #news-home -->

            </section>
            <!-- #news -->

    <?php endwhile;
    endif; ?>


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