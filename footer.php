<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
</div> <!-- end page -->
<div id="footer-top"></div>
<footer>
    <div class="footer container-xl pt-5 pb-4">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?=get_stylesheet_directory_uri()?>/img/abl-logo.svg"
                    class="footer__logo mx-auto ms-lg-0" alt="Angela Barker-Lewis Planting Design & Horticulture">
                <?php /* <p><?=do_shortcode('[social_icons]')?></p> */ ?>
            </div>
            <div class="col-lg-2 pt-2">
                <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
            </div>
            <div class="col-lg-2 pt-2">
                <?=wp_nav_menu(array('theme_location' => 'footer_menu2'))?>
            </div>
            <div class="col-lg-2 pt-2">
                <?=wp_nav_menu(array('theme_location' => 'footer_menu3'))?>
                <div class="footer__heading">Awards</div>
                <img src="<?=get_stylesheet_directory_uri()?>/img/sgd-awards-finalist-2024.jpg">
                <?php /*
                <div class="footer__heading">Contact</div>
                <div class="menu-item"><i class="fa-solid fa-phone"></i>
                    <?=do_shortcode('[contact_phone]')?>
                </div>
                <div class="menu-item"><i class="fa-regular fa-envelope"></i>
                    <?=do_shortcode('[contact_email]')?>
                </div>
                */ ?>
            </div>
        </div>
    </div>
    </div>
    <div class="colophon">
        <div class="container-xl py-2">
            <div class="d-flex flex-wrap justify-content-center justify-content-md-between">
                <div class="col-md-6 text-center text-md-start">
                    &copy; <?=date('Y')?> Angela
                    Barker-Lewis
                </div>
                <!-- div class="col-md-6 d-flex align-items-center justify-content-end flex-wrap gap-1">
                    <div><a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookies-policy/">Cookies</a></div> |
                    <a href="/terms/">Terms &amp; conditions</a>
                </div -->
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>