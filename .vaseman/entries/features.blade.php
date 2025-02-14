@extends('global.body')

@push('style')
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css" />
@endpush

@push('script')
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/pages/features.js?{{ $asset->v }}"></script>
@endpush

@section('banner')
    @include('components.banner', ['titleEn' => 'Campus Features', 'title' => '校園特色'])
@stop

@section('content')
    <div class="container l-portfolio-list my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="l-categories container mb-5">
                    <nav class="nav nav-tags">
                        <div class="nav-item">
                            <a href="javascript://"
                                class="nav-link active">
                                全部
                            </a>
                        </div>
                        @foreach (range(1, 12) as $category)
                            <div class="nav-item">
                                <a href="javascript://"
                                    class="nav-link ">
                                    標籤名稱
                                </a>
                            </div>
                        @endforeach
                    </nav>
                </div>

                @foreach (range(1, 6) as $item)
                    <article class="c-portfolio-item card h-std-card my-5"
                        style="
                        --bs-card-spacer-y: 2rem;
                        --bs-card-spacer-x: 2rem;
                        ">
                        <div class="card-body row gy-5 gx-5" style="">
                            <div class="col-lg-6 c-portfolio-item__images">
                                <div class="c-portfolio-images swiper">
                                    <div class="swiper-wrapper">
                                        @foreach (range(1, 8) as $i)
                                            <div class="swiper-slide">
                                                <div class="ratio" style="--bs-aspect-ratio: 64%;">
                                                    <img class="rounded-4" src="https://picsum.photos/1600/800"
                                                        style="object-fit: cover"
                                                        alt="cover">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="c-portfolio-item-action mt-4 d-flex align-items-center justify-content-between">
                                    <div class="c-portfolio-item-action__prev">
                                        <a href="javascript://" data-task="prev">
                                            <img src="assets/images/deco/arrow-left.svg" alt="Prev" loading="lazy">
                                        </a>
                                    </div>

                                    <div class="c-portfolio-item-action__page c-page"
                                        style="color: var(--bs-golden-light); font-family: var(--title-font)">
                                        <span class="c-page__current" style="font-size: 32px">01</span>
                                        <span style="font-size: 26px">/</span>
                                        <span class="c-page__total" style="font-size: 13px">
                                            08
                                        </span>
                                    </div>

                                    <div class="c-portfolio-item-action__next">
                                        <a href="javascript://" data-task="next">
                                            <img src="assets/images/deco/arrow-right.svg" alt="Prev" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 c-portfolio-item__text d-flex flex-column justify-content-center">
                                <header class="c-portfolio-item__header card-title d-flex slign-items-center gap-2">
                                    <div class="c-deco-star c-deco-star--1"
                                        style="position: static"
                                    ></div>
                                    <h3 class="c-portfolio-item__title text-primary-dark"
                                        style="font-family: var(--main-font)"
                                    >感覺統合教室</h3>
                                </header>
                                <div class="text-feature text-dark">
                                    除了室外的操場外，艾倫戴爾也規劃室內運動空間，透過精心設計的協調運動與設備，
                                    幫助孩子在遊戲中自發地刺激和調整自己的感官反應， 增強大、小肌肉群的協調性，
                                    提升情緒穩定性與自我調節能力，為他們的成長奠定穩固的基礎，更好地應對學習與生活中的挑戰。
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach

                <div class="mt-5 d-flex justify-content-center">
                    @include('components.pagination')
                </div>
            </div>
        </div>
    </div>
@stop
