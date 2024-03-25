<div class="container-xl py-5">
    <div class="row g-4">
        <div class="col-lg-6">
            <p><?=get_field('contact_intro', 'options')?>
            </p>
            <ul class="fa-ul no-indent">
                <li class="mb-2"><span class="fa-li"><i class="far fa-envelope"></i></span>
                    <?=do_shortcode('[contact_email]')?>
                </li>
                <li class="mb-2"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>
                    <?=do_shortcode('[contact_phone]')?>
                </li>
                <?php
                if (get_field('contact_address', 'options') ?? null) {
                    ?>
                <li class="mb-2"><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span>
                    <?=get_field('contact_address', 'options')?>
                </li>
                <?php
                }
            ?>
            </ul>
        </div>
        <div class="col-lg-6">
            <?=do_shortcode('[gravityform id="' . get_field('contact_form_id', 'options') . '" title="false"]')?>
        </div>
    </div>
</div>