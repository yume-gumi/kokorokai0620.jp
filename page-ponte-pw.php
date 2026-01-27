<?php get_header(); ?>

<!-- MAIN -->
<main id="ponte-pw">


  
    <?php 
        $args = [
            "top-wave" => "yellow",
            "background" => "green",
            "service" => true
        ];
        get_template_part("parts/footer_top", null ,$args); 
    ?>
</main>
<!-- MAIN -->


<?php get_footer(); ?>