<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

$page_for_posts = get_option('page_for_posts');
$bg = get_the_post_thumbnail_url($page_for_posts, 'full');

get_header();
?>
<main id="main">
    <section class="hero" style="background-image:url(<?=$bg?>)">
        <div class="overlay"></div>
        <div class="container-xl my-auto">
            <h1>News</h1>
        </div>
    </section>

    <div class="container-xl py-5">
        <?php
        if (get_the_content(null, false, $page_for_posts)) {
            echo '<div class="mb-5">' . get_the_content(null, false, $page_for_posts) . '</div>';
        }

?>
        <div class="news_index related mb-5">
            <?php
    while (have_posts()) {
        the_post();
        $img = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_stylesheet_directory_uri() . '/img/missing-image.png';
        $the_date = get_the_date('jS F, Y');

        ?>
            <a href="<?=get_the_permalink(get_the_ID())?>"
                class="related__card">
                <div class="related__image_container">
                    <img class="related__image" src="<?=$img?>">
                </div>
                <div class="related__content">
                    <h3 class="related__title mb-0">
                        <?=get_the_title()?>
                    </h3>
                    <div class="related__date mb-2"><?=$the_date?>
                    </div>
                </div>
            </a>
            <?php
    }
?>
        </div>
        <?php
        numeric_posts_nav();
?>
    </div>
    </div>
</main>
<?php

get_footer();
?>