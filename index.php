<?php
// Including WordPress header
get_header();
?>
<div class="content">

</div>


<!-- post section -->
 <div class="post_wrapper">
<?php
while (have_posts()) {
    the_post();//counting the post and set the limit
    ?>
    <div class="post_container">
        <img src="<?php echo get_template_directory_uri(); ?>/image/post.jpg">
        <h1><?php the_title();?></h1>
        <p>Discription</p>
        <p><?php the_date();?></p>
    </div>
    <?php
}
?>
</div>
<?php
// Including WordPress footer
get_footer();
?>