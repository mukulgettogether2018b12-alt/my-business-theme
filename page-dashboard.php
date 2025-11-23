<?php
/* Template Name: Dashboard */
get_header(); ?>
<div class="dashboard-container">
    <h2>Dashboard</h2>
    <div class="widgets">
        <div class="widget">Revenue: $<span id="revenue">0</span></div>
        <div class="widget">Orders: <span id="orders">0</span></div>
        <div class="widget">Users: <span id="users">0</span></div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function(){
    gsap.fromTo("#revenue",{innerText:0},{innerText:5000,duration:1,snap:{innerText:1}});
    gsap.fromTo("#orders",{innerText:0},{innerText:120,duration:1,snap:{innerText:1}});
    gsap.fromTo("#users",{innerText:0},{innerText:75,duration:1,snap:{innerText:1}});
});
</script>
<?php get_footer(); ?>