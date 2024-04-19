<?php
$class = $block['className'] ?? 'py-5';
$colour = get_field('colour') ?: 'white';

switch ($colour) {
    case 'green-deep':
        $content = 'text-white';
        $btn = 'btn-white--tx';
        $title = '';
        break;
    case 'green-soft':
        $content = 'text-white';
        $btn = 'btn-white--tx';
        $title = '';
        break;
    case 'green-crisp-200':
        $content = 'text-green-deep';
        $btn = 'btn-white';
        $title = '';
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

$overlayField = get_field('overlay');
$overlay = (is_array($overlayField) && !empty($overlayField) && $overlayField[0] == 'Yes') ? '<div class="title_text__overlay"></div>' : '';

// $btn = $colour == 'green-crisp-200' ? 'btn-white' : 'btn-white--tx';
// $content = $colour == 'green-deep' ? 'text-white' : 'text-green-deep';
?>
<section
    class="title_text <?=$class?> bg-<?=$colour?>">
    <?=$overlay?>
    <div class="container-xl py-4">
        <div class="row g-4">
            <div class="col-md-4">
                <h2 class="<?=$title?>">
                    <?=get_field('title')?></h2>
            </div>
            <div class="col-md-8">
                <div class="<?=$content?>">
                    <?=get_field('content')?>
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
        </div>
    </div>
</section>