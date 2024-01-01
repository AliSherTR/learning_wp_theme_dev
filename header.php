<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    </head>
    <body>

    <header class="header">
        <div class="logo">
            LOGO
        </div>
    <ul class="header_menu">  
        <?php
            $menu_items = wp_get_nav_menu_items('Main Menu');
                foreach ($menu_items as $item) :
            ?>
                <li class="header_menu-item"><a href="<?php echo esc_url($item->url); ?>" class="header_menu-link"><?php echo esc_html($item->title); ?></a></li>
                <!-- // check if menu items have children or not if they have children then render those children in our custom markup -->
        <?php endforeach; ?>
    </header>
       

</ul>

