<?php
function remove_storefront_sidebar() {
    remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
}

add_action( 'get_header', 'remove_storefront_sidebar' );
?>
