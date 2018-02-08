<?php
/**
 * Created by PhpStorm.
 * User: 002
 * Date: 08.01.2018
 * Time: 12:41
 */
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );