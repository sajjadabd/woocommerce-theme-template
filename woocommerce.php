<?php get_header() ?>

<div class="wrapper">
  <?php 
  
    #get_template_part('includes/content' , 'single') 
    get_template_part('includes/content' , 'product') 
    #get_template_part('includes/content' , 'woocommerce'); 
    
    
    // if (wc_get_loop_prop('total')) {
    //   while (have_posts()) {
    //       the_post();
    //       do_action('woocommerce_shop_loop');
    //       wc_get_template_part('content', 'product');
    //   }
    // }


    // defined('ABSPATH') || exit;
    // //get_header('shop');
    // do_action('woocommerce_before_main_content');
    // if (woocommerce_product_loop()) {
    //     do_action('woocommerce_before_shop_loop');
    //     // here we’ve deleted the loop
    //     do_action('woocommerce_after_shop_loop');
    // } else {
    //     do_action('woocommerce_no_products_found');
    // }
    // do_action('woocommerce_after_main_content');
    // do_action('woocommerce_sidebar');
    //get_footer('shop');
  
  ?>


</div>

<?php get_footer(); ?>
