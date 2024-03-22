<?php
$colour = get_field('colour') ?: 'white';
?>
<section class="three_cards py-5 bg-<?=$colour?>">
    <div class="container-xl py-4">
        <h2 class="text-center mb-4">
            <?=get_field('section_title')?>
        </h2>
        <div class="row g-5 justify-content-center">
            <?php
            while (have_rows('cards')) {
                the_row();
                $l = get_sub_field('link');
                ?>
            <div class="col-md-4">
                <a href="<?=$l['url']?>"
                    target="<?=$l['target']?>"
                    class="three_cards__card">
                    <img class="three_cards__image"
                        src="<?=wp_get_attachment_image_url(get_sub_field('image'), 'large')?>">
                    <div class="three_cards__inner">
                        <h3 class="three_cards__title">
                            <?=get_sub_field('title')?>
                        </h3>
                        <div class="three_cards__content">
                            <?=get_sub_field('content')?>
                        </div>
                        <div class="three_cards__link">Read more</div>
                    </div>
                </a>
            </div>
            <?php
            }
?>
        </div>
    </div>
</section>