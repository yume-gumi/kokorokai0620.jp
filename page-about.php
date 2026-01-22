<?php get_header(); ?>
<main id="about">
    <section class="about__top">
        <div class="about__top--inner">

            <picture>
                <source srcset="<?= get_theme_file_uri() ?>/assets/images/about_message.png" media="(min-width: 640px)" />
                <img src="<?= get_theme_file_uri() ?>/assets/images/about_message_sp.png" alt="MDN" />
            </picture>

        </div>

        <div class="wave-top wave-blue"></div>
    </section>
    <section class="about__company">
        <h2>会社概要</h2>
    </section>
    <?php 
        $args = [
            "background" => "yellow",
            "top-wave" => "blue",
        ];
        get_template_part("parts/footer_top", null ,$args); 
    ?>
</main>

<?php get_footer(); ?>