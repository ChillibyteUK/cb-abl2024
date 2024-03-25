<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>
<main id="main" class="portfolio">
    <div class="container-xl py-5">
        <div class="breadcrumbs"><a href="/">Home</a> / <a href="/portfolio/">Portfolio</a> /
            <?=get_the_title()?>
        </div>
        <h1><?=get_the_title()?></h1>
        <div class="pb-4"><?=get_the_content()?></div>
        <div class="portfolio__grid">
            <?php
        $r = random_str(4);
foreach (get_field('images') as $i) {
    ?>
            <a href="<?=wp_get_attachment_image_url($i, 'full')?>"
                class="glightbox" data-gallery="gallery<?=$r?>">
                <img src="<?=wp_get_attachment_image_url($i, 'large')?>"
                    alt="">
            </a>
            <?php
}
?>
        </div>
    </div>
</main>
<?php
get_footer();
?>