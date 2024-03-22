<?php
function acf_blocks()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'				=> 'cb_hero',
            'title'				=> __('CB Hero'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hero.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_hero_slideshow',
            'title'				=> __('CB Hero Slideshow'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hero_slideshow.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_title_text',
            'title'				=> __('CB Title Text'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_title_text.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_three_cards',
            'title'				=> __('CB Three Cards'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_three_cards.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_four_cards',
            'title'				=> __('CB Four Cards'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_four_cards.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_testimonials',
            'title'				=> __('CB Testimonials'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_testimonials.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_instagram',
            'title'				=> __('CB Instagram'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_instagram.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        // acf_register_block_type(array(
        //     'name'				=> 'cb_text_image',
        //     'title'				=> __('CB Text Image'),
        //     'category'			=> 'layout',
        //     'icon'				=> 'cover-image',
        //     'render_template'	=> 'page-templates/blocks/cb_text_image.php',
        //     'mode'	=> 'edit',
        //     'supports' => array('mode' => false),
        // ));
        // acf_register_block_type(array(
        //     'name'				=> 'cb_contact',
        //     'title'				=> __('CB Contact'),
        //     'category'			=> 'layout',
        //     'icon'				=> 'cover-image',
        //     'render_template'	=> 'page-templates/blocks/cb_contact.php',
        //     'mode'	=> 'edit',
        //     'supports' => array('mode' => false),
        // ));
    }
}
add_action('acf/init', 'acf_blocks');

// Gutenburg core modifications
// add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);
function core_image_block_type_args($args, $name)
{
    if ($name == 'core/paragraph') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/heading') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/list') {
        $args['render_callback'] = 'modify_core_add_container';
    }

    return $args;
}

function modify_core_add_container($attributes, $content)
{
    ob_start();
    // $class = $block['className'];
    ?>
<div class="container-xl">
    <?=$content?>
</div>
<?php
    $content = ob_get_clean();
    return $content;
}
?>