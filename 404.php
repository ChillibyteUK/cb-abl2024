<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<main id="main" class="padding-top">
    <?php
$bg = wp_get_attachment_image_url(get_field('hero_image', 'options'), 'full');


$homepage_id = get_option('page_on_front');
$blocks = parse_blocks(get_post_field('post_content', $homepage_id));
foreach ($blocks as $block) {
    if ($block['blockName'] === 'acf/cb-hero-slideshow') {
        $images = $block['attrs']['data']['slides'];
        if ($images) {
            $first_image = $images[0];
            $bg = wp_get_attachment_image_url($first_image, 'full');
            break;
        }
    }
}

?>
    <!-- hero -->
    <section class="hero" style="background-image:url(<?=$bg?>)">
        <div class="overlay"></div>
        <div class="container-xl my-auto">
            <h1 class="text-start">404 - Page Not Found</h1>
            <div class="hero__content fs-5 mb-4 text-white">We can't seem to find the page you're looking for</div>
            <div class="hero__cta">
                <a class="btn btn-green-deep mb-4" href="/">Return to Homepage</a>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
?>