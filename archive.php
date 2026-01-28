<?php get_header();  ?>

<!--  MAIN  -->
<main id="news">



    <?php
    $args  =  [
        "top-wave"  =>  "yellow",
        "background"  =>  "green",
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>
</main>
<!--  MAIN  -->


<?php get_footer();  ?>