<?php
/* Template Name: Packages */
get_header(); ?>
<div class="packages-container">
<h2>Packages</h2>
<div class="package-grid">
<?php
$args = array('post_type'=>'package','posts_per_page'=>-1);
$loop = new WP_Query($args);
while($loop->have_posts()): $loop->the_post(); ?>
<div class="package-card">
<?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
<h3><?php the_title(); ?></h3>
<p><?php the_content(); ?></p>
<button class="buy-btn">Subscribe</button>
</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>
<script>
gsap.from(".package-card",{opacity:0,y:50,stagger:0.2,duration:0.6});
</script>
<?php get_footer(); ?>