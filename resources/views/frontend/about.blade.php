@extends('layouts.frontend')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>{{ __('messages.about_us') }}</h2>
                <p>{{ __('messages.about_description') }}</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <h3>{{ __('messages.company_vision') }}</h3>
                    <img src="{{ asset('impact/assets/img/about.jpg') }}" class="img-fluid rounded-4 mb-4" alt="">
                    <p>{{ __('messages.vision_text') }}</p>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <h3>{{ __('messages.why_choose_us') }}</h3>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('messages.feature_1') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('messages.feature_2') }}</li>
                            <li><i class="bi bi-check-circle-fill"></i> {{ __('messages.feature_3') }}</li>
                        </ul>
                        <div class="position-relative mt-4">
                            <img src="{{ asset('impact/assets/img/about-2.jpg') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ __('messages.clients') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ __('messages.projects') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ __('messages.years_experience') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ __('messages.awards') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Stats Counter Section -->
@endsection
