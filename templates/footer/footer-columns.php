<div id="footer-columns" class="container mt-5">

    <div class="row">

        <div class="col-md-3 mb-4">
            
            <?php if ( has_custom_logo() ) { 

                the_custom_logo();

            } else { ?>

                <a href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>

            <?php } ?>
  
        </div>

        <div class="col-md-3 mb-4">

            <h3 class="h4 mb-4"><?php esc_html_e('Contacts', 'sb-base-theme') ?></h3>

            <ul class="list-unstyled">

                <li class="media mb-3">
                    <i class="fas fa-map-marker-alt fa-fw mt-1"></i>
                    <div class="media-body ml-3">
                        <a href="<?php echo get_theme_mod('sb_mapurl') ?>" target="_blank"><?php echo get_theme_mod('sb_company').', <br>'.get_theme_mod('sb_address_1').', <br>'.get_theme_mod('sb_address_2') ?>
                    </div>
                </li>

                <li class="media mb-3">
                    <i class="fas fa-phone fa-fw mt-1"></i>
                    <div class="media-body ml-3">
                        <a href="tel:<?php echo get_theme_mod('sb_phone') ?>"><?php echo get_theme_mod('sb_phone') ?></a>
                    </div>
                </li>

                <li class="media mb-3">
                    <i class="fas fa-envelope fa-fw mt-1"></i>
                    <div class="media-body ml-3">
                        <a href="mailto:<?php echo get_theme_mod('sb_email', '') ?>"><?php echo get_theme_mod('sb_email', '') ?></a>
                    </div>
                </li>

            </ul>

            <?php get_template_part( 'templates/elements/socialicons', '' ); ?>
            
        </div>

        <div class="col-md-3 mb-4">

            <h3 class="h4 mb-4"><?php esc_html_e('Pages', 'sb-base-theme') ?></h3>

            <?php wp_nav_menu(array(
                'theme_location'    => 'header',
                'depth'             => 1,
                'container'         => 'nav',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'footer-menu list-unstyled',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            )); ?>

        </div>

        <div class="col-md-3 mb-4">

            <h3 class="h4 mb-4"><?php esc_html_e('Privacy', 'sb-base-theme') ?></h3>

            <?php wp_nav_menu(array(
                'theme_location'    => 'footer',
                'depth'             => 1,
                'container'         => 'nav',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'footer-menu list-unstyled',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            )); ?>

        </div>

    </div>

</div> <!-- #footer-columns -->