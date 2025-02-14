

@extends('global.body')

@section('banner')
    @include('components.banner', ['titleEn' => 'Educational Vision', 'title' => '教育願景'])
@stop

@section('content')
    <section class="l-section l-section--vision py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center order-2 order-lg-0">
                    <div class="c-img-deco">
                        <div class="c-img-deco__inner">
                            <img class="img-fluid rounded-4"
                                src="assets/images/about/vision.jpg" alt="vision" loading="lazy">
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

    <section class="l-section l-section--features l-section--decorated text-bg-primary"
        style="
            --deco-img-top: url(../../images/front/home/features-deco-top.svg);
            --deco-padding-top: 15%;
            --deco-img-bottom: url(../../images/front/home/features-deco-bottom.svg);
            --deco-padding-bottom: 15%;
            ">
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

        <div class="container mt-6 pb-6 py-lg-0">
            <div class="l-feature-list d-flex flex-column gap-6 px-3 px-lg-5">
                @foreach ($features as $index => $feature)
                    <article class="c-feature-item d-flex flex-column flex-lg-row gap-4">
                        <div class="c-feature-item__num">
                            {{ $index }}
                        </div>
                        <div class="c-feature-item__text flex-grow-1 d-flex flex-column gap-3 pe-3">
                            <header>
                                <div class="c-feature-item__title-zh">{{ $feature['title_zh'] }}</div>
                                <div class="c-feature-item__title-en">{{ $feature['title_en'] }}</div>
                            </header>

                            <div class="h-text h-text--zh">
                                {{ $feature['content_zh'] }}
                            </div>
                            <div class="h-text h-text--en">
                                {{ $feature['content_en'] }}
                            </div>
                        </div>
                        <div class="c-feature-item__image">
                            <img class="img-fluid rounded-4"
                                src="assets/images/about/{{ $index }}.jpg" alt="{{ $feature['title_zh'] }}">
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

    </section>
@stop
