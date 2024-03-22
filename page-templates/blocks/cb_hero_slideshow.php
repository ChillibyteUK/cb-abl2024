<?php

$slides = get_field('slides');

$link = get_field('cta');

?>
<section class="hero_slideshow">
    <div id="heroSlideshow" class="carousel slide">
        <div class="carousel-overlay"></div>
        <div class="carousel-title container-xl">
            <h1><?=get_field('title')?></h1>
            <?php
            if ($link ?? null) {
                ?>
            <div class="text-center pt-5">
                <a href="<?=$link['url']?>"
                    target="<?=$link['target']?>"
                    class="btn btn-white"><?=$link['title']?></a>
            </div>
            <?php
            }
?>
        </div>
        <div class="carousel-indicators">
            <?php
$active = 'active';
$curr = 'aria-current="true"';
for ($i = 1; $i <= count($slides); $i++) {
    ?>
            <button type="button" data-bs-target="#heroSlideshow"
                data-bs-slide-to="<?=$i - 1?>"
                class="<?=$active?>"
                <?=$curr?> aria-label="Slide
                <?=$i?>"></button>
            <?php
    $active = '';
    $curr = '';
}
?>
        </div>
        <div class="carousel-inner">
            <?php
            $active = 'active';
foreach ($slides as $s) {
    ?>
            <div class="carousel-item <?=$active?>">
                <img src="<?=wp_get_attachment_image_url($s, 'full')?>"
                    class="d-block w-100" alt="">
            </div>
            <?php
    $active = '';
}
?>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#heroSlideshow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlideshow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
</section>