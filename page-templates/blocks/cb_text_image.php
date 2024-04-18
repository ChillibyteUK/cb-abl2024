<?php
$txtcol = get_field('order') == 'Text/Image' ? 'order-2 order-md-1' : 'order-2 order-md-2';
$imgcol = get_field('order') == 'Text/Image' ? 'order-1 order-md-2' : 'order-1 order-md-1';

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
        $title = 'text-green-deep';
        break;
    default:
        $content = 'text-green-deep';
        $btn = 'btn-white--tx';
        $title = '';
        break;
}

$img = wp_get_attachment_image_url(get_field('image'), 'large') ?: get_stylesheet_directory_uri() . '/img/missing-image.png';

?>
<section class="text_image py-5 bg-<?=$colour?>">
    <div class="container-xl">
        <?php
        if (get_field('title') ?? null) {
            ?>
        <div class="h2 text-center d-md-none <?=$title?>">
            <?=get_field('title')?>
        </div>
        <?php
        }
?>
        <div class="row g-4">
            <div
                class="col-md-6 <?=$txtcol?> d-flex flex-column justify-content-center">
                <?php
        if (get_field('title') ?? null) {
            ?>
                <h2 class="d-none d-md-block h2 <?=$title?>">
                    <?=get_field('title')?>
                </h2>
                <?php
        }
?>
                <div><?=get_field('content')?>
                </div>
                <?php
if (get_field('link') ?? null) {
    $l = get_field('link');
    ?>
                <a href="<?=$l['url']?>"
                    target="<?=$l['target']?>"
                    class="mt-4 btn <?=$btn?>"><?=$l['title']?></a>
                <?php
}
?>
            </div>
            <div
                class="col-md-6 <?=$imgcol?> d-flex align-items-center">
                <img src="<?=$img?>"
                    alt="<?=get_field('title')?>"
                    class="feature__img mx-auto">
            </div>
        </div>
    </div>
</section>