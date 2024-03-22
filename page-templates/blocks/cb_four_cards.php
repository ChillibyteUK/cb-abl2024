<section class="four_cards py-5">
    <div class="container-xl py-4">
        <h2 class="text-center mb-4">
            <?=get_field('section_title')?>
        </h2>
        <div class="row g-4 justify-content-center">
            <?php
            while (have_rows('cards')) {
                the_row();
                $l = get_sub_field('link');
                ?>
            <div class="col-md-3">
                <a href="<?=$l['url']?>"
                    target="<?=$l['target']?>"
                    class="four_cards__card">
                    <img class="four_cards__image"
                        src="<?=wp_get_attachment_image_url(get_sub_field('image'), 'large')?>">
                    <div class="four_cards__inner">
                        <h3 class="four_cards__title">
                            <?=get_sub_field('title')?>
                        </h3>
                        <div class="four_cards__link">Read more</div>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>