<?php
// Theme Functions.

//add the munu option in the admin panel 
register_nav_menus(
   array('primary-manu' => 'Main Menu')
);

// add the featured image option to admin 
add_theme_support('post-thumbnails');

//add the header option to admin
add_theme_support('custom-header');

//add the widgets optio to admin
register_sidebar(
   array(
      'name'=>"Sidebar Location",
      'id'=> 'Sidebar'
   )
)
?>