<section class="testimonials py-5">
    <div class="container-xl py-4">
        <div class="row g-4">
            <div class="col-md-4">
                <h2 class="text-green-soft">What our clients say</h2>
            </div>
            <div class="col-md-8">
                <div class="testimonials__inner">
                    <?php
                    global $post;
                    $args = array(
                        'post_type' => 'testimonial',
                        'numberposts' => 4,
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) {
                        setup_postdata($post);
                        ?>
                    <div class="tetimonial">
                        <div class="testimonial__content">
                            <?=get_the_content()?>
                        </div>
                        <div class="testimonial__attr">
                            <?=get_the_title()?>
                        </div>
                    </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.testimonials__inner').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 4000,
        });
    });
</script>
<?php
}, 9999);
