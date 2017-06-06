<?php
/*
Plugin Name: AD User Name 
Description: Ask & Displays user name in website where needed
Version: 0.1
Author: Oliver Cera
Author URI: http://olivercera.com
*/

function adun_ask() {
    return 'here will go form for name';
}

add_shortcode('adun-ask', 'adun_ask');

function adun_display() {
    return 'here will go user name';
}

add_shortcode('adun-display', 'adun_display');



?>