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
<section class="three_cards py-5 bg-<?=$colour?>">
    <div class="container-xl py-4">
        <h2 class="text-center mb-4 <?=$content?>">
            Portfolio
        </h2>
        <div class="row g-5 justify-content-center">
            <?php
            $q = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3
            ));
while ($q->have_posts()) {
    $q->the_post();
    $l = get_the_permalink();
    $first = wp_get_attachment_image_url(get_field('images', get_the_ID())[0], 'large');
    ?>
            <div class="col-md-4">
                <a href="<?=$l?>" class="three_cards__card">
                    <img class="three_cards__image"
                        src="<?=$first?>">
                    <div class="three_cards__inner">
                        <h3 class="three_cards__title">
                            <?=get_the_title()?>
                        </h3>
                        <div class="three_cards__link">Read more</div>
                    </div>
                </a>
            </div>
            <?php
}
?>
        </div>
        <div class="text-center pt-4">
            <a href="/portfolio/" class="btn <?=$btn?>">View More</a>
        </div>
    </div>
</section>