<?php
/**
 * Displays header site branding
 *
 * @package Rodolfo Rivera
 * @since 1.0.0
 */
?>
<div class="site-branding">
    <div class="hamburger-container">
        <div id="hamburger-menu" class="hamburger-menu left-side">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </div>
	<?php if ( has_custom_logo() ) : ?>
			<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>
	<?php if ( has_nav_menu( 'main' ) ) : ?>
        <nav class="header-menu" aria-label="<?php esc_attr_e( 'Menu Principal', 'rodolfo_rivera' ); ?>">
            <?php
                wp_nav_menu(
                        array(
                            'theme_location' => 'main',
                            'menu_class'     => 'menu',
                            'depth'          => 2
                    )
                );
            ?>
        </nav><!-- .footer-navigation -->
    <?php endif; ?>
</div><!-- .site-branding -->

