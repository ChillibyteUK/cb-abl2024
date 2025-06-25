<?php
/**
 * Template Name: Four Cards Block
 *
 * @package cb-abl2024
 */

defined( 'ABSPATH' ) || exit;

$block_id = $block['anchor'];

?>
<section class="four_cards py-5" id="<?= esc_attr( $block_id ); ?>">
    <div class="container-xl py-4">
        <h2 class="text-center mb-4">
            <?= esc_html( get_field( 'section_title' ) ); ?>
        </h2>
        <div class="row g-4 justify-content-center">
			<?php
            while ( have_rows( 'cards' ) ) {
                the_row();
                $l = get_sub_field( 'link' ) ?: [
					'url'    => '#',
					'target' => '_self',
				];
                ?>
            <div class="col-md-3">
                <a href="<?= esc_url( $l['url'] ); ?>"
                    target="<?= esc_attr( $l['target'] ); ?>"
                    class="four_cards__card">
                    <img class="four_cards__image"
                        src="<?= esc_html( wp_get_attachment_image_url( get_sub_field( 'image' ), 'large' ) ); ?>">
                    <div class="four_cards__inner">
                        <h3 class="four_cards__title">
                            <?= esc_html( get_sub_field( 'title' ) ); ?>
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