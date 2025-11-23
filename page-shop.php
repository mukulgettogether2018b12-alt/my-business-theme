<?php
/* Template Name: Shop */
get_header(); ?>
<div class="shop-container">
<h2>Shop</h2>
<div class="product-grid">
<?php
$args = array('post_type'=>'product','posts_per_page'=>-1);
$loop = new WP_Query($args);
while($loop->have_posts()): $loop->the_post(); ?>
<div class="product-card">
<?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
<h3><?php the_title(); ?></h3>
<p><?php echo get_post_meta(get_the_ID(),'price',true); ?> USD</p>
<button class="buy-btn">Buy Now</button>
</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>
<script>
gsap.from(".product-card",{opacity:0,y:50,stagger:0.2,duration:0.6});
</script>
<?php get_footer(); ?>