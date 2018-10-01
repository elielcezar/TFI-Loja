<?php
/*
Template Name: Homepage Custom
*/

//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>

<!-- About Section -->
<section id="cta">
  <?php
    echo do_shortcode('[products]');
  ?>
</section>

<?php get_footer(); ?>
