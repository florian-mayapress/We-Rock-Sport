<?php
/* pixwell child theme */
add_action( 'admin_menu', 'adjust_the_wp_menu' );
function adjust_the_wp_menu() {
    remove_menu_page( 'edit.php?post_type=rb-portfolio' );
    remove_menu_page( 'edit.php?post_type=rb-deal' );
    remove_menu_page( 'edit.php?post_type=rb-gallery' );
}