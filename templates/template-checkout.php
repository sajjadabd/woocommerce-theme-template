<?php

/*
  Template Name: Checkout
*/

?>

<?php get_header() ?>

<div class="wrapper">

  <?php #get_template_part('../includes/content' , 'cart') ?>

  <?php echo do_shortcode('[woocommerce_checkout]'); ?>

</div>

<?php #previous_posts_link(); ?>
<?php #next_posts_link(); ?> 

<?php get_footer(); ?>



