<?php

function getACFLink($item) {
    $linkUrl = null;
    $target = '_self';
    $linkType = $item->field('link-type')->selected();
    if ($linkType) {
        if ($linkType == 'internal') {
            $linkUrl = $item->field('page-link')->val();
        } else {
            $linkUrl = $item->field('link')->val();
            $target = '_blank';
        }
    }

    return [
        'url' => $linkUrl,
        'target' => $target
    ];
}
