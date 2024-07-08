<?php
get_header();
// brings the data as post
the_post();
?>


<!-- brings the dynamic page title when a particular page is hit  -->
<h1><?php the_title();?></h1>

<!-- call the featured image set -->
<?php the_post_thumbnail('thumbnail');?>

<!-- display the content of particular pages -->
<?php the_content();?>

<?php
get_footer();
?>