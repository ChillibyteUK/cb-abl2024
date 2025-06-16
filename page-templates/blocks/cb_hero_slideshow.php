<?php
/**
 * Block template for LC Hero.
 *
 * @package cb-abl2024
 */

defined( 'ABSPATH' ) || exit;

$images = get_field( 'slides' );

$block_id = 'lc-hero-' . $block['id'];
?>
<section class="hero_slideshow" id="<?php echo esc_attr( $block_id ); ?>">
	<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner">
			<?php
			$active = 'active';
			foreach ( $images as $index => $image ) {
				?>
				<div class="carousel-item <?= esc_attr( $active ); ?>">
					<?=
					wp_get_attachment_image(
						$image['ID'],
						'full',
						false,
						array(
							'class' => 'd-block w-100 h-100',
						),
					);
					?>
				</div>
				<?php
				$active = '';
			}
			?>
		</div>
	</div>
	<div class="container position-relative">
		<div class="hero_slideshow__title">
			<h1><?= esc_html( get_field( 'title' ) ); ?></h1>
		</div>
	</div>
</section>