
<div class="grid-item page-sidebar">
    <aside class="grid-item">
        <?php get_search_form(); ?>
    </aside>
    <div class="row">
        <aside class="grid-item navigation-aside">
            <h3>Escape</h3>
            <?php
                wp_nav_menu( array(
                    'items_wrap' => '<ul id="%1$s" class="nav %2$s">%3$s</ul>',
                    'theme_location' => 'escape_navigation'
                ) );
                ?>
        </aside>
        <aside class="grid-item navigation-aside">
            <h3>Arrangementer</h3>
            <?php
                wp_nav_menu( array(
                    'items_wrap' => '<ul id="%1$s" class="nav %2$s">%3$s</ul>',
                    'theme_location' => 'events_navigation'
                ) );
                ?>
        </aside>
    </div>
    <div class="row">
        <aside class="grid-item navigation-aside">
            <h3>Sosialt</h3>
            <?php
                wp_nav_menu( array(
                    'items_wrap' => '<ul id="%1$s" class="nav %2$s">%3$s</ul>',
                    'theme_location' => 'social_navigation'
                ) );
                ?>
        </aside>
        <aside class="grid-item navigation-aside">
            <h3>Mer om CYB</h3>
            <?php
                wp_nav_menu( array(
                    'items_wrap' => '<ul id="%1$s" class="nav %2$s">%3$s</ul>',
                    'theme_location' => 'about_navigation'
                ) );
                ?>
        </aside>
    </div>
</div>