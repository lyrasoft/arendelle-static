@extends('global.body')

@push('style')
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css" />
@endpush

@push('script')
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/pages/article-item.js"></script>
@endpush

@section('banner')
    @component('components.banner')
        @slot('top')
            <div class="container">
                <x-breadcrumb class="" :breadcrumb="$breadcrumb"></x-breadcrumb>
                <div class="d-block d-lg-none mt-4">
                    <a href="."
                        style="color: var(--bs-golden-tint); opacity: .85;">
                        <i class="fa fa-chevron-left"></i>
                        分類標題
                    </a>
                </div>
            </div>
        @endslot

        @slot()
        @endslot
    @endcomponent
@stop

@section('content')
    <div class="container l-article-item" style="">
        <div class="row justify-content-center mb-6">
            <div class="col-lg-8">
                <div
                    class="c-article-card card h-std-card rounded-lg-5 rounded-4 p-3 px-lg-6 py-lg-5">
                    <article class="card-body py-4">
                        <header>
                            <h1 class="h2"
                                style="font-family: var(--main-font); color: var(--bs-brown)">
                                和寶貝一起探索「白努利的秘密」🔍
                            </h1>
                        </header>

                        <div class="text-muted my-4">
                            <div class="text-secondary">
                                2025.02.10
                            </div>
                        </div>

                        <hr class="border-secondary" style="opacity: 1; margin-bottom: 2rem;" />

                        <div class="c-article-card__images c-article-images swiper"
                            style="margin-bottom: 3rem;">
                            <div class="swiper-wrapper">
                                @foreach (range(1, 5) as $i)
                                    <div class="swiper-slide ratio"
                                        style="--bs-aspect-ratio: 66%;">
                                        <img class="rounded-4 object-fit-cover"
                                            src="https://picsum.photos/seed/picsum/800/520"
                                            alt="cover">
                                    </div>
                                @endforeach
                            </div>

                            <div
                                class="c-article-images-action mt-4 d-flex align-items-center justify-content-between">
                                <div class="c-article-images-action__prev">
                                    <a href="javascript://" data-task="prev">
                                        <img src="assets/images/deco/arrow-left.svg" alt="Prev"
                                            loading="lazy">
                                    </a>
                                </div>

                                <div class="c-article-images-action__page c-page"
                                    style="color: var(--bs-golden-light); font-family: var(--title-font)">
                                    <span class="c-page__current" style="font-size: 32px">01</span>
                                    <span style="font-size: 26px">/</span>
                                    <span class="c-page__total" style="font-size: 13px">
                                        05
                                    </span>
                                </div>

                                <div class="c-article-images-action__next">
                                    <a href="javascript://" data-task="next">
                                        <img src="assets/images/deco/arrow-right.svg"
                                            alt="Prev"
                                            loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="article-content" style="color: var(--bs-brown)">
                            <p>
                                孩子們輕輕一吹，水珠就灑落在白紙上，畫出獨特的水痕。水漬乾了，圖案會變化嗎？寶貝們帶著好奇心觀察，驚喜發現水痕的形狀竟然不一樣了！✨
                            </p>
                            <p>🔹 孩子們對著紙張輕輕一吹，觀察水珠灑落的軌跡，發現空氣能推動水滴！</p>
                            <p>🔹 水漬乾後，形狀會改變嗎？這讓孩子開始思考：水的蒸發與顏料的變化，會影響圖案嗎？</p>

                            <p>👉 透過這個幼兒科學遊戲，孩子們學會了如何觀察變化、表達假設，並動手驗證自己的想法！</p>
                        </div>

                        <div
                            class="c-article-card__actions mt-6 text-center d-flex justify-content-center"
                            style="gap: 20px">
                            <a href="#"
                                class="btn btn-outline-secondary btn-lg"
                                style="width: 170px"
                            >
                                上一則
                            </a>

                            <a href=""
                                class="btn btn-feature btn-lg"
                                style="width: 170px"
                            >
                                下一則
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@stop
