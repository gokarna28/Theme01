<?php
get_header();
the_post();
?>

<!-- post body -->
<div class="single_container">
    <h1><?php the_title(); ?></h1>

    <!--the post content-->
    <?php the_content(); ?>

    <!--get the post date and aurthor-->
    <div>
        <?php echo get_the_date(); ?>
        <?php echo get_the_author(); ?>

    </div>
 
    <!--comment form-->
    <div class="comment_container">
        <?php comments_template();?>
    </div>
</div>


<?PHP
get_footer();
?>