@extends('layouts.frontend')

@section('content')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>{{ __('messages.our_services') }}</h2>
                <p>{{ __('messages.services_description') }}</p>
            </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <h3>{{ __('messages.service_1_title') }}</h3>
                        <p>{{ __('messages.service_1_description') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <h3>{{ __('messages.service_2_title') }}</h3>
                        <p>{{ __('messages.service_2_description') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <h3>{{ __('messages.service_3_title') }}</h3>
                        <p>{{ __('messages.service_3_description') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <h3>{{ __('messages.service_4_title') }}</h3>
                        <p>{{ __('messages.service_4_description') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <h3>{{ __('messages.service_5_title') }}</h3>
                        <p>{{ __('messages.service_5_description') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <h3>{{ __('messages.service_6_title') }}</h3>
                        <p>{{ __('messages.service_6_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
@endsection
