@extends('global.body')

@push('style')
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css" />
@endpush

@push('script')
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/pages/home.js"></script>
@endpush

@section('content')
    <?php
    $banners = [
        [
            'src' => 'assets/images/home/banners/banner-1.jpg',
            'title' => '幸福成長從自主出發，點亮孩子的未來',
            'text' => 'Happy Growth tarts with Self-Determination, Lighting up Children\'s Future with Radiance.',
        ],
        [
            'src' => 'assets/images/home/banners/banner-2.jpg',
            'title' => '',
            'text' => '',
        ],
    ];
    ?>
    {{--  Banner  --}}
    <div class="l-banner l-banner--home text-bg-primary">
        <div id="main-banner" class="swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="l-swiper-banner-item position-relative">
                            <div class="d-none d-md-block"
                                style="">
                                <img class="img-fluid"
                                    style="width: 100%; object-fit: cover; aspect-ratio: 1920 / 1000"
                                    src="{{ $banner['src'] }}"
                                    alt="{{ $banner['title'] ?: 'img' }}"
                                >
                            </div>
                        </div>

                        @if ($banner['title'])
                            <div class="l-swiper-banner-item__text">
                                @if ($banner['title'])
                                    <div class="l-swiper-banner-item__subtitle">
                                        <h4>
                                            {{ $banner['title'] }}
                                        </h4>
                                    </div>
                                @endif
                                @if ($banner['text'])
                                    <div class="l-swiper-banner-item__desc">
                                        {{ $banner['text'] }}
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    {{--  News  --}}
    <section class="l-section l-section--news position-relative my-5">
        <header class="c-feature-title">
            <div class="c-feature-title__top">
                News
            </div>

            <h3 class="c-feature-title__text">
                最新消息
            </h3>
        </header>

        <div class="c-deco-star c-deco-star--1" style="--deco-size: 31px; top: 6px; left: 24%;"></div>
        <div class="c-deco-star c-deco-star--1" style="--deco-size: 21px; top: 75px; right: 16%;"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 l-news mt-5">
                    <div class="l-news__items px-4 px-lg-0">
                        @foreach (range(1, 3) as $i)
                            <div class="l-news-item position-relative d-flex flex-column flex-lg-row align-items-start align-items-lg-center gap-1 gap-lg-4">
                                <div class="l-news-item__date">
                                    <div class="text-dark d-none d-lg-block">
                                        2025.02.10
                                    </div>
                                    <div class="text-black-50 d-block d-lg-none">
                                        2025.02.10
                                    </div>
                                </div>

                                <div class="vr align-self-center d-none d-lg-block"
                                    style="color: var(--bs-golden-light); height: 30px; opacity: 1;"></div>

                                <div class="l-news-item__text flex-grow-1 overflow-hidden w-100">
                                    <a class="l-news-item__title link-dark stretched-link fs-5"
                                        href="#">
                                        和寶貝一起探索「白努利的秘密」🔍
                                    </a>

                                    <div class="l-news-item__summary text-dark text-truncate"
                                        style="opacity: .78;">
                                        科學，並不是課本上的理論，而是在生活中不斷發現的驚奇！ 老師！老師！我想知道...
                                        「為什麼飛機會在天上飛呢？」 「為什麼樂透機的球會被吸管吸出來？」
                                        「為什麼投球時會旋轉呢？」
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="l-news__actions text-center mt-5">
                        <a class="btn btn-lg btn-feature btn-arrow"
                            href="#">
                            查看更多
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="l-section l-section--about text-bg-primary">
        <div class="l-about-deco-top"></div>

        <div class="l-section__inner">
            <header class="c-feature-title">
                <div class="c-feature-title__top" style="color: var(--bs-golden-tint)">
                    About Us
                </div>

                <h3 class="c-feature-title__text" style="color: var(--bs-golden-tint)">
                    關於我們
                </h3>
            </header>

            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-7 col-md-10 col-11 text-center text-feature"
                        style="color: var(--bs-golden-tint)">
                        <p>
                            歡迎來到艾倫戴爾幼兒園，我們致力為孩子們創造一個「自主、自由、幸福」的環境。透過提供全面且多元化的教育體驗，培養孩子們的創造力、批判性思考能力和對學習的熱愛。
                        </p>
                        <p class="fs-6">
                            In Arendelle Preschool, we are committed to creating an environment of "autonomy, freedom and happiness" for our children.
                            Our preschool is dedicated to providing a comprehensive and diverse educational experience for our students,
                            with a focus on fostering creativity, critical thinking, and a love for learning.
                        </p>

                        <div class="l-section__actions text-center mt-5">
                            <a class="btn btn-lg btn-feature btn-arrow"
                                href="#">
                                查看更多
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="l-about-deco-bottom"></div>
    </section>

    {{-- Vision --}}
    <section class="l-section l-section--vision py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center order-2 order-lg-0">
                    <div class="c-img-deco">
                        <div class="c-img-deco__inner">
                            <img class="img-fluid rounded-4"
                                src="assets/images/home/vision.jpg" alt="vision" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <header class="c-feature-title">
                        <div class="c-feature-title__top">
                            Our Vision
                        </div>

                        <h3 class="c-feature-title__text">
                            我們的願景
                        </h3>
                    </header>

                    <div class="mt-4 text-dark text-center text-feature px-4 px-lg-5">
                        <p>
                            我們的願景，是希望在這個全球化的時代，透過最優質且創新的教學方式，培育立足台灣，放眼全球的世界公民。
                            我們致力於打造一個讓孩子成長、培養獨立人格的環境，從中培養他們的智慧、社交和情感技能。
                        </p>
                        <p class="fs-6">
                            Our vision is to empower the next generation of global citizens by providing a
                            well-rounded education that combines the best and innovative teaching methods.
                            We strive to create an environment where children can thrive and develop a strong sense
                            of self, while also cultivating their intellectual, social, and emotional skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="l-section l-section--features l-section--decorated text-bg-primary"
        style="
            --deco-img-top: url(../images/home/features-deco-top.svg);
            --deco-padding-top: 15%;
            --deco-img-bottom: url(../images/home/features-deco-bottom.svg);
            --deco-padding-bottom: 15%;
            ">
        <div class="container">
            <header class="c-feature-title">
                <div class="c-feature-title__top" style="color: var(--bs-golden-tint)">
                    Features
                </div>

                <h3 class="c-feature-title__text" style="color: var(--bs-golden-tint)">
                    教學特色
                </h3>
            </header>

            <?php
            $features = include PROJECT_DATA_ROOT . '/data/features.php';
            ?>

            <div class="l-feature-row row justify-content-center gy-5 mx-auto my-5"
                style="max-width: 1080px">
                <div class="c-feature-nav col-lg-4 d-flex flex-row flex-lg-column flex-wrap flex-lg-nowrap justify-content-center gap-3 gap-lg-2">
                    @foreach ($features as $index => $feature)
                        {{-- Feature Nav Item --}}
                        <a href="javascript://"
                            class="c-feature-nav-item c-feature-nav-item--{{ $index }} card h-std-card rounded-pill text-primary {{ $index === '01' ? 'active' : '' }}"
                            data-to="{{ (int) $index - 1 }}"
                        >
                            <div class="card-body d-flex gap-3 px-4 align-items-center justify-content-center justify-content-lg-start py-1"
                            >
                                <div class="c-feature-nav-item__num">
                                    <h4 class="m-0">
                                        {{ $index }}
                                    </h4>
                                </div>
                                <div class="c-feature-nav-item__text d-none d-lg-block">
                                    <div class="c-feature-nav-item__title c-feature-nav-item__title--zh"
                                        style="font-size: 1.125rem">
                                        {{ $feature['title_zh'] }}
                                    </div>
                                    <div
                                        class="c-feature-nav-item__title c-feature-nav-item__title--en small"
                                        style="line-height: 1.25">
                                        {{ $feature['title_en'] }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="col-lg-8">
                    <div class="c-feature-items ">
                        <div class="swiper" style="margin-top: -1rem">
                            <div class="swiper-wrapper">
                                @foreach ($features as $index => $feature)
                                    <div class="swiper-slide">
                                        <div class="card h-std-card mx-4 mx-lg-0">
                                            <div class="card-body p-5">
                                                {{-- Feature Card --}}
                                                <article
                                                    class="c-feature-item c-feature-item--{{ $index }} text-feature text-dark pt-3"
                                                >
                                                    <header class="d-flex flex-column align-items-center text-center mb-5">
                                                        <div class="position-relative">
                                                            <div class="c-deco-star c-deco-star--1" style="--deco-size: 20px; right: 0; top: -17px;"></div>
                                                            <div class="c-deco-book" style="left: -90px; top: 5px;"></div>
                                                            <div class="c-deco-pencil" style="right: -80px; top: 20px;"></div>
                                                            <div class="c-deco-h-line" style="--deco-width: 75px; right: 50px; bottom: -25px;"></div>

                                                            <div class="c-feature-item_title c-feature-item__title--zh"
                                                                style="font-size: 1.75rem">
                                                                {{ $feature['title_zh'] }}
                                                            </div>
                                                            <div class="c-feature-item__title c-feature-item__title--en"
                                                                style="line-height: 1.125rem">
                                                                {{ $feature['title_en'] }}
                                                            </div>
                                                        </div>
                                                    </header>

                                                    <div class="mb-3">
                                                        {{ $feature['content_zh'] }}
                                                    </div>
                                                    <div class="fs-6">
                                                        {{ $feature['content_en'] }}
                                                    </div>
                                                </article>

                                                <div class="c-feature-item-action mt-5 d-flex justify-content-between">
                                                    <div class="c-feature-item-action__prev">
                                                        <a href="javascript://" data-task="prev"
                                                            style="{{ $index === '01' ? 'visibility: hidden;' : ''  }}">
                                                            <img src="assets/images/deco/arrow-left.svg" alt="Prev" loading="lazy">
                                                        </a>
                                                    </div>

                                                    <div class="c-feature-item-action__page c-page"
                                                        style="color: var(--bs-golden-light)">
                                                        <span class="c-page__current" style="font-size: 32px">{{ $index }}</span>
                                                        <span style="font-size: 26px">/</span>
                                                        <span class="c-page__total" style="font-size: 13px">06</span>
                                                    </div>

                                                    <div class="c-feature-item-action__next">
                                                        <a href="javascript://" data-task="next"
                                                            style="{{ $index === '06' ? 'visibility: hidden;' : ''  }}">
                                                            <img src="assets/images/deco/arrow-right.svg" alt="Prev" loading="lazy">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- Swiper End --}}
                    </div>
                    {{-- Feature Items End --}}
                </div>
            </div>
            {{-- Feature Row End --}}
        </div>
    </section>

    {{-- Facility --}}
    <section class="l-section l-section--facility py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <header class="c-feature-title">
                        <div class="c-feature-title__top">
                            Facility
                        </div>

                        <h3 class="c-feature-title__text">
                            環境介紹
                        </h3>
                    </header>

                    <div class="mt-4 text-dark text-center text-feature px-4 px-lg-5">
                        <p>
                            艾倫戴爾幼兒園擁有寬敞且設備齊全的校園，設有各種專業教室，如烹飪館、工藝館、科學館、美術教室、音樂教室、感覺統合教室和舞蹈教室。
                            我們的戶外設施包括大草皮、親水舞台和生態魚池。教室無邊界的設計理念讓孩子們能在自由開放的空間中互動，愉快地學習成長。
                        </p>
                        <p class="fs-6" style="line-height: 1.5">
                            Arendelle Preschool boasts a spacious and well-equipped campus, featuring various specialized classrooms,
                            such as a cooking studio, arts and crafts room, science lab, art classroom, music room,
                            sensory integration classroom, and dance studio. Our outdoor facilities include a large grassy field,
                            water play area, and an ecological fish pond. The open design of our classrooms encourages interaction and
                            collaboration, promoting a joyful learning experience for our students.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="c-img-deco">
                        <div class="c-img-deco__inner">
                            <img class="img-fluid rounded-4"
                                src="assets/images/home/facility.jpg" alt="facility" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Transportation --}}
    <section class="l-section l-section--transport l-section--decorated text-bg-primary"
        style="
            --deco-img-top: url(../images/home/trans-deco-top.svg);
            --deco-padding-top: 17.5%;
            --deco-img-bottom: url(../images/home/trans-deco-bottom.svg);
            --deco-padding-bottom: 17.5%;
            --deco-height-bottom: 420px;
            ">
        <div class="container">
            <div class="d-none d-lg-block">
                <img src="assets/images/home/transportation.jpg" alt="transportation"
                    class="img-fluid rounded-5"
                    loading="lazy"
                >
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <header class="c-feature-title mt-5 mb-5 mb-lg-0">
                        <div class="c-feature-title__top" style="color: var(--bs-golden-tint)">
                            Transportation
                        </div>

                        <h3 class="c-feature-title__text" style="color: var(--bs-golden-tint)">
                            交通方式
                        </h3>
                    </header>
                </div>
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="l-transportation-text card rounded-5 rounded-lg-4 text-dark text-feature px-0 px-lg-3"
                        style="">
                        <div class="card-body p-4 p-lg-5">
                            <div class="d-block d-lg-none mb-3 text-center">
                                <img src="assets/images/home/transportation-mobile.jpg" alt="transportation"
                                    class="img-fluid rounded-4"
                                    loading="lazy">
                            </div>
                            <p>
                                艾倫戴爾幼兒園位於<span
                                    style="color: var(--bs-golden)">新北市新莊區中正路715號</span>，交通便利。
                                <br />
                                距離捷運丹鳳站2號出口僅需步行3分鐘，方便家長接送孩子。
                            </p>
                            <p class="fs-6 mb-0">
                                Arendelle Preschool is conveniently located at No. 715 Zhongzheng Road, Xinzhuang District,
                                New Taipei City. We are just a 3-minute walk from Exit 2 of the Danfeng MRT Station,
                                making it easy for parents to drop off and pick up their children.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Us --}}
    <section id="contact"
        class="l-section l-section--contact overflow-hidden"
        style="padding-top: 150px; padding-bottom: 140px">
        <header class="c-feature-title">
            <div class="c-feature-title__top">
                Contact Us
            </div>

            <h3 class="c-feature-title__text">
                聯繫我們
            </h3>
        </header>

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @include('components.contact-form')
                </div>
            </div>
        </div>
    </section>
@stop
