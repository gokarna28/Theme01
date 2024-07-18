<?php
// Including WordPress header
get_header();
?>
<div class="content">

</div>

<!--sidebar section-->
<div>
    <?php dynamic_sidebar('Sidebar');?>
</div>
<!-- post section -->
<div class="post_wrapper">
    <?php
    while (have_posts()) {
        the_post();//counting the post and set the limit
        ?>
        <div class="post_container">
            <?php
            $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

            ?>
            <img src="<?php echo $imagepath[0]; ?>">

            <!-- <p><// the_excerpt();?></p> //short discription  -->

            <h1><?php the_title(); ?></h1><!--title of the post-->

            <p><?php echo get_the_date(); ?></p><!--post date-->

            <a href="<?php the_permalink() ?>"><button>Read more</button></a>
        </div>

        <?php
    }
    ?>
</div>
<!-- pagination wp-pageNavi plugin-->
<?php wp_pagenavi(); ?>

<?php
// Including WordPress footer
get_footer();
?>