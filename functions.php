<?php

include('includes/custom-post-types.php');
include('includes/custom-meta-boxes.php');
include('includes/pagination.php');

register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'categories_menu' => 'Categories Menu'
) );