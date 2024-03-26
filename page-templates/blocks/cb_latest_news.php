<?php
$colour = get_field('colour') ?: 'white';
switch ($colour) {
    case 'green-deep':
        $content = 'text-white';
        $btn = 'btn-white--tx';
        break;
    case 'green-soft':
        $content = 'text-white';
        $btn = 'btn-white--tx';
        break;
    case 'green-crisp-200':
        $content = 'text-green-deep';
        $btn = 'btn-white';
        break;
    case 'white':
        $content = 'text-green-deep';
        $btn = 'btn-green-deep';
        break;
    default:
        $content = 'text-green-deep';
        $btn = 'btn-white--tx';
        break;
}
?>
<section class="latest_news py-5 bg-<?=$colour?>">
    <div class="container-xl">
        <h2 class="text-center mb-4 <?=$content?>">Latest News</h2>
        <div class="news_index related mb-5">
            <?php
            $q = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3
            ));
while ($q->have_posts()) {
    $q->the_post();
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
                    <div class="related__date mt-2"><?=$the_date?>
                    </div>
                </div>
            </a>
            <?php
}
?>
        </div>
        <div class="text-center">
            <a href="/news/" class="btn <?=$btn?>">View More</a>
        </div>
    </div>
</section>