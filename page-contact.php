<?php get_header();  ?>
<main id="contact">
    
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