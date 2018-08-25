<?php
    /*
        Plugin Name: YouTube Subs
        Plugin URI: http://www.shaikhrizwan.ml/
        Description: Display YouTube Sub Button and Count
        Version: 1.0.0
        Author: Rizwan Shaikh
        Author URI: http://www.shaikhrizwan.ml/
    */
    
    //Exit if accessed Directly
    if(!defined('ABSPATH'))
    {
        exit;
    }

    //Load Scripts
    require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-scripts.php');
    
    //Load Class
    require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-class.php');

    // Register Widget
    function register_youtubesubs()
    {
        register_widget('Youtube_Subs_Widget');
    }

    // Hook in function
    add_action('widgets_init','register_youtubesubs');
?>