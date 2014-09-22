<?php

/*
Plugin Name: Nom Nom Nom
Description: Easily setup cookie policy popups
Author: @supertroels
*/

class nom3 {
    
    function __construct(){

        $this->path = plugin_dir_path(__FILE__);
        $this->url  = plugin_dir_url(__FILE__);

        $this->hooks();

    }

    function hooks(){
        if($_COOKIE['wp_accepted_cookies'] !== 'yes'){
            add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));
            add_action('wp_footer', array($this, 'do_popup'));
        }
    }

    function enqueue_assets(){

        wp_enqueue_style('nom3-style', $this->url.'assets/css/main.css');

        wp_register_script('jquery-cookie', $this->url.'assets/js/jquery.cookie.js', 'jquery', false, true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-cookie');
        wp_enqueue_script('nom3-main', $this->url.'assets/js/main.js', 'jquery', false, true);
    }

    function do_popup(){
        $file = apply_filters('nom3/popup/template', $this->path.'views/popup.php');
        include $file;
    }

    function accept_button_classes(){
        $classes = apply_filters('nom3/popup/accept_classes', array());
        if(is_array($classes))
            $classes = implode(' ', $classes);
        return $classes;
    }

    function info_button_classes(){
        $classes = apply_filters('nom3/popup/info_classes', array());
        if(is_array($classes))
            $classes = implode(' ', $classes);
        return $classes;
    }

}

/* Instance function */
function nom3(){
    if(!$GLOBALS['__nom3'])
        $GLOBALS['__nom3'] = new nom3();
    return $GLOBALS['__nom3'];
}

nom3();

?>