<?php
/* Template Name: Profile */
get_header(); ?>
<div class="profile-container">
<h2>My Profile</h2>
<?php
$current_user = wp_get_current_user();
if($current_user->ID == 0){
    echo '<p>Please <a href="'.wp_login_url().'">login</a> to view profile.</p>';
} else {
    echo '<p>Name: '.$current_user->display_name.'</p>';
    echo '<p>Email: '.$current_user->user_email.'</p>';
    echo '<p><a href="'.wp_logout_url().'">Logout</a></p>';
}
?>
</div>
<?php get_footer(); ?>