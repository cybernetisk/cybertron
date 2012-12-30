<?php

register_nav_menus( array (
    'main_navigation' => 'Main navigation',
    'escape_navigation' => 'Escape navigation',
    'events_navigation' => 'Events navigation',
    'social_navigation' => 'Social navigation',
    'about_navigation' => 'About navigation',
    'footer_navigation' => 'Footer navigation'
) );

function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}
?>