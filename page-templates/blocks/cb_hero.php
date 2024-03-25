<?php
$title = get_field('title') ?: get_the_title();
$bg = wp_get_attachment_image_url(get_field('background'), 'full') ?: get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<section class="hero" style="background-image:url(<?=$bg?>)">
    <div class="overlay"></div>
    <div class="container-xl my-auto">
        <h1><?=$title?></h1>
    </div>
</section>