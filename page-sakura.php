<?php get_header();  ?>

<!--  MAIN  -->
<main id="sakura">



    <?php
    $args  =  [
        "top-wave"  =>  "green",
        "background"  =>  "orange",
        "service"  =>  true
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>
</main>
<!--  MAIN  -->


<?php get_footer();  ?>