<?php get_header();  ?>

<!--  MAIN  -->
<main id="ponte">



    <?php
    $args  =  [
        "top-wave"  =>  "orange",
        "background"  =>  "pink",
        "service"  =>  true
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>
</main>
<!--  MAIN  -->


<?php get_footer();  ?>