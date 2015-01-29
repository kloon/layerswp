<?php get_template_part( 'partials/header' , 'logo' ); ?>

<nav class="nav nav-horizontal">
    <?php do_action( 'layers_before_header_nav' ); ?>
    <?php wp_nav_menu( array( 'theme_location' => LAYERS_THEME_SLUG . '-primary' ,'container' => FALSE, 'fallback_cb' => 'layers_menu_fallback' )); ?>
    <a href="" class="responsive-nav"  data-toggle="#off-canvas-right" data-toggle-class="open">
        <span class="l-menu"></span>
    </a>
    <?php do_action( 'layers_after_header_nav' ); ?>
</nav>