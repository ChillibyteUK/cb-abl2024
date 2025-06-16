<?php
/**
 * Footer template for the CB-ABL2024 WordPress theme.
 *
 * @package CB-ABL2024
 */

defined( 'ABSPATH' ) || exit;
?>
</div> <!-- end page -->
<div id="footer-top"></div>
<footer>
    <div class="footer container-xl pt-5 pb-4">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/abl-logo.svg' ); ?>"
					width="200" height="200"
                    class="footer__logo mx-auto ms-lg-0" alt="Angela Barker-Lewis Planting Design & Horticulture">
                <?php /* <p><?=do_shortcode('[social_icons]')?></p> */ ?>
            </div>
            <div class="col-lg-2 pt-2">
                <?= wp_nav_menu( array( 'theme_location' => 'footer_menu1' ) ); ?>
            </div>
            <div class="col-lg-2 pt-2">
                <?= wp_nav_menu( array( 'theme_location' => 'footer_menu2' ) ); ?>
            </div>
            <div class="col-lg-2 pt-2 text-center text-lg-start">
                <?= wp_nav_menu( array( 'theme_location' => 'footer_menu3' ) ); ?>
                <div class="footer__heading fs-300 mb-2">AWARDS</div>
                <img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/sgd-awards-finalist-2024.jpg' ); ?>" class="w-50 w-lg-75">
                <div class="footer__heading">Contact</div>
                <div class="menu-item"><i class="fa-solid fa-phone"></i>
                    <?= do_shortcode( '[contact_phone]' ); ?>
                </div>
                <div class="menu-item"><i class="fa-regular fa-envelope"></i>
                    <?= do_shortcode( '[contact_email]' ); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="colophon">
        <div class="container-xl py-2">
            <div class="d-flex flex-wrap justify-content-center justify-content-md-between">
                <div class="col-md-6 text-center text-md-start">
                    &copy; <?= esc_html( gmdate( 'Y' ) ); ?> Angela
                    Barker-Lewis
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end flex-wrap gap-1">
                    <div><a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookies-policy/">Cookies</a></div> |
                    <a href="/terms/">Terms &amp; conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</body>

</html>