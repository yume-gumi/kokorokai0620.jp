<?php get_header();  ?>

<!--  MAIN  -->
<main id="single">

    <section id="news-page">

        <h4 class="service-head">お知らせ</h4>

        <div class="wave-top wave-blue"></div>

        <section id="news-page-single" class="bg-blue">

            <div class="news-page-outer">

                <div class="news-page-inner">

                <span class="category">
                    <?= the_category(); ?>
                </span>

                    <span class="date">
                        <?= the_time('Y.m.d'); ?>
                    </span>

                    <p class="title">
                    <?= the_title(); ?>
                    </p>

                    <p class="text">
                    <?= the_content(); ?>
                    </p>

                </div>
                <!-- news-page-inner -->

            </div>
            <!-- news-outer -->


        </section>
        <!-- news-page -->


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