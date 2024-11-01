<?php

/*
Plugin Name: WP Easy Sharer
Plugin URI: http://takkk.tk/wp-easy-sharer.html
Description: WP Easy Sharer is a wordpress plugin that adds social media links to at the end of each post and page without having to deal with any code and editing your theme files.
Version: 1.0
Author: Mehmet Akyol
Author URI: http://takkk.tk
License: You can do what ever you want with this plugin :)
*/
function maa_add_wp_easy_sharer_stylesheet(){
    //<link rel="stylesheet" type="text/css" media="all" href="http://localhost/wordpress/wp-content/themes/twentyten/style.css" />
    echo '<br /><link rel="stylesheet" type="text/css" media="all" href="'.  get_home_url().'/wp-content/plugins/wp-easy-sharer/wp-easy-sharer-stylesheet.css"/><br />';
}

add_action('wp_head', 'maa_add_wp_easy_sharer_stylesheet');

function maa_add_social_sharing_sites($content){
    if(is_single () || is_page()){
        //by using get_permalink($ID) built-in function we get the url of the current page.
        $social_sharing_sites = '<div class="social_sharing_sites">
        <div class="social_sharing_sites_all">
            <ul>

                <li><div class="site1"><a href="http://www.facebook.com/sharer.php?u='.get_permalink($ID).'"><img src="'.  get_home_url().'/wp-content/plugins/wp-easy-sharer/social-media-icons/facebook.png" alt="facebook-sharing-button"></a></div>
                <li><div class="site2"><a href="http://www.stumbleupon.com/submit?url='.get_permalink($ID).'&title='.get_the_title($ID).'"><img src="'.  get_home_url().'/wp-content/plugins/wp-easy-sharer/social-media-icons/stumpleupon.png" alt="facebook-sharing-button"></a></div>
                <li><div class="site3"><a href="http://twitter.com/share?url='.get_permalink($ID).'"><img src="'.  get_home_url().'/wp-content/plugins/wp-easy-sharer/social-media-icons/twitter.png" alt="facebook-sharing-button"></a></div>
                <li><div class="site4"><a href="http://delicious.com/post?url='.get_permalink($ID).'"><img src="'.  get_home_url().'/wp-content/plugins/wp-easy-sharer/social-media-icons/delicious.png" alt="facebook-sharing-button"></a></div>
                <li><div class="site5"><a href="http://digg.com/submit?url='.get_permalink($ID).'"><img src="'.  get_home_url().'/wp-content/plugins/wp-easy-sharer/social-media-icons/digg.png" alt="facebook-sharing-button"></a></div>
                <li><div class="site6"><a href="http://www.reddit.com/submit?url='.get_permalink($ID).'"><img src="'.  get_home_url().'/wp-content/plugins/wp-easy-sharer/social-media-icons/reddit.png" alt="facebook-sharing-button"></a></div>
            </ul>
        </div>
        </div>';
        $content .= $social_sharing_sites.'<br /><br />';
    }
    return $content;
}

add_action('the_content', 'maa_add_social_sharing_sites');

?>