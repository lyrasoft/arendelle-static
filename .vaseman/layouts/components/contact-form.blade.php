@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.5.13/vue.global.min.js"></script>
    <script src="assets/js/contact-form.js?{{ $asset->v }}"></script>
@endpush

<div id="c-contact-form-app">
    <div class="l-contact-form">
        <nav class="l-contact-form__nav c-contact-nav nav nav-rounded-tabs">
            <div class="nav-item">
                <div class="nav-link c-contact-nav-link c-contact-nav-link--line"
                    :class="tabActive(1)">
                    <div class="c-contact-nav-link__step">01</div>
                    <div class="c-contact-nav-link__text">小朋友資訊</div>
                </div>
            </div>
            <div class="nav-item">
                <div class="nav-link c-contact-nav-link c-contact-nav-link--line"
                    :class="tabActive(2)">
                    <div class="c-contact-nav-link__step">02</div>
                    <div class="c-contact-nav-link__text">家長資訊</div>
                </div>
            </div>
            <div class="nav-item">
                <div class="nav-link c-contact-nav-link c-contact-nav-link--line"
                    :class="tabActive(3)">
                    <div class="c-contact-nav-link__step">03</div>
                    <div class="c-contact-nav-link__text">其他</div>
                </div>
            </div>
            <div class="nav-item">
                <div class="nav-link c-contact-nav-link"
                    :class="tabActive(4)">
                    <div class="c-contact-nav-link__step">04</div>
                    <div class="c-contact-nav-link__text">完成</div>
                </div>
            </div>
        </nav>

        <div class="l-contact-form__nav l-contact-form-body h-std-form mt-5 pt-3">
            <form ref="form" :class="formValidated ? 'was-validated' : ''" novalidate>
                <div class="l-contact-cards" :class="reachedClasses">
                    {{-- Step 1 --}}
                    <div class="c-contact-card c-contact-card--step1 card h-std-card"
                        :class="cardClass(1)">
                        <div v-if="currentStep === 1" class="card-body p-5 m-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="input-kid-name"
                                            class="form-label">
                                            小朋友姓名
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input
                                            id="input-kid-name"
                                            name="contact[details][kid_name]"
                                            v-model="data.details.kid_name"
                                            type="text"
                                            class="form-control"
                                            placeholder="請輸入小朋友姓名"
                                            required
                                        />
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="input-transfer"
                                            class="form-label">
                                            是否為轉學生
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="contact[details][transfer]"
                                                    v-model="data.details.transfer"
                                                    id="input-transfer-y"
                                                    value="1"
                                                >
                                                <label class="form-check-label" for="input-transfer-y">
                                                    是
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="contact[details][transfer]"
                                                    v-model="data.details.transfer"
                                                    id="input-transfer-n"
                                                    value="0"
                                                    checked
                                                >
                                                <label class="form-check-label" for="input-transfer-n">
                                                    否
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="input-origin-school"
                                            class="form-label">
                                            小朋友原就讀學校
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input
                                            id="input-origin-school"
                                            name="contact[details][origin_school]"
                                            v-model="data.details.origin_school"
                                            type="text"
                                            class="form-control"
                                            placeholder="請輸入"
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="input-birthday"
                                            class="form-label">
                                            小朋友出生日期
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input
                                            id="input-birthday"
                                            name="contact[details][birthday]"
                                            v-model="data.details.birthday"
                                            type="date"
                                            class="form-control"
                                            placeholder="請選擇"
                                            required
                                        />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="input-enter-date"
                                            class="form-label">
                                            預計入學時間
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input
                                            id="input-enter-date"
                                            name="contact[details][enter_date]"
                                            v-model="data.details.enter_date"
                                            type="date"
                                            class="form-control"
                                            placeholder="請選擇"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>

                            {{-- Step1 Actions--}}
                            <div class="mt-5 text-center">
                                <button type="button" class="btn btn-feature btn-lg"
                                    style="min-width: 170px"
                                    @click="next"
                                >
                                    下一步
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Step 2 --}}
                    <div class="c-contact-card c-contact-card--step2 card h-std-card"
                        :class="cardClass(2)">
                        <div class="card-body p-5 m-3">
                            <div v-if="currentStep === 2" class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="input-name"
                                            class="form-label">
                                            家長姓名
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input
                                            id="input-name"
                                            name="contact[name]"
                                            v-model="data.name"
                                            type="text"
                                            class="form-control"
                                            placeholder="請輸入"
                                            required
                                        />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="input-phone"
                                            class="form-label">
                                            家長電話
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input
                                            id="input-phone"
                                            name="contact[phone]"
                                            v-model="data.phone"
                                            type="tel"
                                            class="form-control"
                                            placeholder="請輸入"
                                            required
                                        />
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="input-available-timing"
                                            class="form-label">
                                            可參加說明會時段
                                            <span class="text-danger">*</span>
                                        </label>

                                        <?php
                                        $timingOptions = [
                                            '平日上午(10:00-11:30)',
                                            '平日下午(14:00-15:30)',
                                            '假日上午(09:30-11:30)',
                                            '假日上午(14:00-16:30)',
                                        ];
                                        ?>

                                        <div class="">
                                            @foreach ($timingOptions as $i => $timingOption)
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="contact[details][available_timing]"
                                                        v-model="data.details.available_timing"
                                                        id="input-available-timing-{{ $i + 1 }}"
                                                        value="{{ $timingOption }}"
                                                        :required="data.details.available_timing.length === 0"
                                                    >
                                                    <label class="form-check-label"
                                                        for="input-available-timing-{{ $i + 1 }}">
                                                        {{ $timingOption }}
                                                    </label>
                                                </div>
                                            @endforeach

                                            <div class="invalid-feedback d-block"
                                                v-if="formValidated && data.details.available_timing.length === 0">
                                                請勾選一項
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="input-email"
                                            class="form-label">
                                            家長 Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input
                                            id="input-email"
                                            name="contact[email]"
                                            v-model="data.email"
                                            type="email"
                                            class="form-control"
                                            placeholder="請輸入"
                                            required
                                        />
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="input-tut-content"
                                            class="form-label">
                                            在意的教學內容
                                            <span class="text-danger">*</span>
                                        </label>

                                        <?php
                                        $contentOptions = [
                                            '美語教學',
                                            '硬體設施',
                                            '環境清潔',
                                            '師資',
                                            '親師溝通',
                                        ];
                                        ?>

                                        <div class="d-flex gap-3 flex-wrap">
                                            @foreach ($contentOptions as $i => $contentOption)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="contact[details][tut_content]"
                                                        v-model="data.details.tut_content"
                                                        id="input-tut-content-{{ $i + 1 }}"
                                                        value="{{ $contentOption }}"
                                                        :required="data.details.tut_content.length === 0"
                                                    >
                                                    <label class="form-check-label"
                                                        for="input-tut-content-{{ $i + 1 }}">
                                                        {{ $contentOption }}
                                                    </label>
                                                </div>
                                            @endforeach

                                            <div class="w-100">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="contact[details][tut_content]"
                                                        v-model="data.details.tut_content"
                                                        id="input-tut-content-other"
                                                        value="其他"
                                                        :required="data.details.tut_content.length === 0"
                                                    >
                                                    <label class="form-check-label" for="input-tut-content-other">
                                                        其他：
                                                    </label>
                                                </div>
                                                <input type="text" class="form-control" placeholder="請輸入"
                                                    :disabled="!data.details.tut_content.includes('其他')"
                                                    v-model="data.details.tut_content_other"
                                                    required
                                                />
                                            </div>

                                            <div class="invalid-feedback d-block"
                                                v-if="formValidated && data.details.tut_content.length === 0">
                                                請勾選一項
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Step2 Actions--}}
                            <div class="mt-5 text-center d-flex justify-content-center gap-3">
                                <button type="button" class="btn btn-outline-secondary btn-lg"
                                    style="min-width: 170px"
                                    @click="prev"
                                >
                                    上一步
                                </button>
                                <button type="button" class="btn btn-feature btn-lg"
                                    style="min-width: 170px"
                                    @click="next"
                                >
                                    下一步
                                </button>
                            </div>

                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="c-contact-card c-contact-card--step3 card h-std-card"
                        :class="cardClass(3)">
                        <div class="card-body p-5 m-3">
                            <div v-if="currentStep === 3">
                                <div class="form-group mb-4">
                                    <label for="input-content"
                                        class="form-label">
                                        備註事項
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea
                                        id="input-content"
                                        name="contact[content]"
                                        v-model="data.content"
                                        class="form-control"
                                        rows="8"
                                        placeholder="請輸入文字內容"
                                        required
                                    ></textarea>
                                </div>
                            </div>

                            {{-- Step2 Actions--}}
                            <div class="mt-5 text-center d-flex justify-content-center gap-3">
                                <button type="button" class="btn btn-outline-secondary btn-lg"
                                    style="min-width: 170px"
                                    @click="prev"
                                    :disabled="loading"
                                >
                                    上一步
                                </button>
                                <button type="button" class="btn btn-feature btn-lg"
                                    style="min-width: 170px"
                                    @click="submit"
                                    :disabled="loading"
                                >
                                    @{{ loading ? '發送中' : '提交' }}
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Step 4 --}}
                    <div class="c-contact-card c-contact-card--step4 card h-std-card"
                        :class="cardClass(4)">
                        <div class="card-body p-0 m-3">
                            <div class="c-deco-h-line"
                                style="top: 130px; left: 180px;"
                            ></div>

                            <div class="c-deco-star c-deco-star--3"
                                style="--deco-size: 35px; top: 250px; left: 70px;"
                            ></div>

                            <div class="c-deco-star c-deco-star--4"
                                style="--deco-size: 40px; top: 390px; left: 190px;"
                            ></div>

                            <div class="c-deco-star c-deco-star--4"
                                style="--deco-size: 40px; top: 100px; right: 200px;"
                            ></div>

                            <div class="c-deco-star c-deco-star--2"
                                style="--deco-size: 20px; top: 270px; right: 100px;"
                            ></div>

                            <div class="c-deco-h-line"
                                style="--deco-width: 55px; top: 435px; right: 200px;"
                            ></div>

                            <div class="c-img-deco">
                                <div class="c-img-deco__inner">
                                    <div class="d-flex flex-column align-items-center justify-content-center gap-3"
                                        style="height: 420px; letter-spacing: 2px;">
                                        <img src="assets/images/home/thank-you-script.svg" alt="Thank You"
                                            style="height: 180px;">
                                        <h3 class="h2 m-0 text-primary">
                                            非常感謝您的提交！
                                        </h3>
                                        <div class="fs-5 text-primary">我們將會儘快聯繫您！</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
