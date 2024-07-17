<?php
// header file
//echo get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wordpress Theme</title>
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylee.css">
   <!-- goofle fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
   <?php wp_head(); ?>
</head>

<body>
   <?php wp_body_open(); ?>

   <?php
   //call the header image path 
   $logoImage = get_header_image();
   ?>
   <header class="header_container">
      <div class="logo_image">
         <a href="<?php echo site_url();?>">
            <img class="logo_img" src="<?php echo $logoImage; ?>">
         </a>
      </div>
      <nav>
         <!-- call the menus  -->
         <?php wp_nav_menu(array('them_location' => 'primary-menu', 'menu_class' => 'nav')) ?>
      </nav>
   </header>