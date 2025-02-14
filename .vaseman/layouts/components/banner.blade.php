<?php
$title ??= '標題';
$titleEn ??= 'title EN';

?>

<div class="l-banner l-banner--page text-bg-primary">

    @if ($top ?? null)
        {!! $top() !!}
    @endif

    @if ($slot ?? null)
        {!! $slot !!}
    @else
        <div class="l-banner__content container">
            <div class="l-banner__title-en">
                {{ $titleEn }}
            </div>
            <div class="l-banner__title mt-1">
                <h2 class="m-0">
                    {{ $title }}
                </h2>
            </div>
        </div>
    @endif

    <img class="l-banner__deco-bottom" src="assets/images/banners/page-banner-deco-bottom.png">
</div>
