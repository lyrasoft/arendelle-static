@extends('global.body')

@section('banner')
    @include('components.banner', [
        'titleEn' => 'News & Events',
        'title' => '最新消息 & 活動'
    ])
@stop

@section('content')
    <div class="container l-article-list pb-7" style="margin-top: 50px">

        <div class="l-article-nav d-flex justify-content-center my-6">
            <div class="btn-group">
                <a class="c-button c-button--news btn btn-outline-secondary active"
                    href=""
                >
                    <div class="c-button__zh">
                        最新消息
                    </div>
                    <div class="c-button__en">
                        News
                    </div>
                </a>
                <a class="c-button c-button--events btn btn-outline-secondary"
                    href="#"
                >
                    <div class="c-button__zh">
                        最新活動
                    </div>
                    <div class="c-button__en">
                        Events
                    </div>
                </a>
            </div>
        </div>

        <div class="l-article-items row gy-5">
            @foreach (range(1, 6) as $i)
                <div class="col-lg-4 col-md-6">
                    <div class="c-article-item card h-std-card h-100">
                        <div class="card-body d-flex flex-column gap-3"
                            style="--bs-card-spacer-x: 2rem; --bs-card-spacer-y: 2rem;">
                            <div class="c-article-item__image">
                                <img class="img-fluid rounded-3" src="https://picsum.photos/seed/picsum/800/520" alt="Image">
                            </div>

                            <div class="c-article-item__header ">
                                <h4 class="m-0" style="font-family: var(--main-font)">
                                    <a href="articles/item.html"
                                        class="link-dark stretched-link"
                                    >
                                        和寶貝一起探索「白努利的秘密」🔍
                                    </a>
                                </h4>
                            </div>

                            <div class="c-article-item__desc text-dark line-clamp mt-auto"
                                style="--clamp-lines: 2">
                                科學，並不是課本上的理論，而是在生活中不斷發現的驚奇！ 老師！老師！我想知道... 「為什麼飛機會在天上飛呢？」
                                「為什麼樂透機的球會被吸管吸出來？」 「為什麼投球時會旋轉呢？」
                            </div>

                            <div class="c-article-item__date text-secondary text-end">
                                2025.02.10
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            @include('components.pagination')
        </div>
    </div>
@stop

