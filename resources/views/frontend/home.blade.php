@extends('layouts.frontend')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section accent-background">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2><span>{{__('home.welcome_to')}} </span><span class="accent">{{ __('home.ags')}}</span></h2>
                <p>{{__('home.hero_welcome_message')}}</p>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started">{{__('home.get_started')}}</a>
                    {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center">
                        <i class="bi bi-play-circle"></i><span>{{__('home.watch_video')}}</span>
                    </a> --}}
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <img src="{{ asset('impact/assets/img/hero-img.svg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-easel"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">{{ __('home.home_icon_box_1_title') }}</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-gem"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">{{ __('home.home_icon_box_2_title') }}</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-geo-alt"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">{{ __('home.home_icon_box_3_title') }}</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-command"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">{{ __('home.home_icon_box_4_title') }}</a></h4>
                    </div>
                </div><!--End Icon Box -->

            </div>
        </div>
    </div>

</section><!-- End Hero Section -->


<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{__('home.about_us')}}<br></h2>
        <p>{{__('home.about_message')}}</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3>{{__('home.about_main_heading')}}</h3>
                <img src="{{ asset('impact/assets/img/about.jpg') }}" class="img-fluid rounded-4 mb-4" alt="">
                <p style="font-size: 1.2em">{{__('home.about_para_1')}}</p>
                <p style="font-size: 1.2em">{{__('home.about_para_2')}}</p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic">
                        {{__('home.about_quote')}}
                    </p>
                    <ul class="list-unstyled">
                        <li class="row"><i class="bi bi-check-circle-fill"></i> <span><b class="pe-3">{{__('home.about_uo_list_item_1_bold') }}</b> {{__('home.about_uo_list_item_1_text')}}</span></li>
                        <li class="row"><i class="bi bi-check-circle-fill"></i> <span><b class="pe-3">{{__('home.about_uo_list_item_2_bold') }}</b> {{__('home.about_uo_list_item_2_text')}}</span></li>
                        <li class="row"><i class="bi bi-check-circle-fill"></i> <span><b class="pe-3">{{__('home.about_uo_list_item_3_bold') }}</b> {{__('home.about_uo_list_item_3_text')}}</span></li>
                        <li class="row"><i class="bi bi-check-circle-fill"></i> <span><b class="pe-3">{{__('home.about_uo_list_item_4_bold') }}</b> {{__('home.about_uo_list_item_4_text')}}</span></li>
                    </ul>


                    <div class="position-relative mt-4">
                        <img src="{{ asset('impact/assets/img/about-2.jpg') }}" class="img-fluid rounded-4" alt="">
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /About Section -->


<!-- Clients Section -->
{{-- <section id="clients" class="clients section">

    <div class="container">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 2,
                            "spaceBetween": 40
                        },
                        "480": {
                            "slidesPerView": 3,
                            "spaceBetween": 60
                        },
                        "640": {
                            "slidesPerView": 4,
                            "spaceBetween": 80
                        },
                        "992": {
                            "slidesPerView": 6,
                            "spaceBetween": 120
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="{{ asset('impact/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('impact/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('impact/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('impact/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('impact/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('impact/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('impact/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('impact/assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
            </div>
        </div>
        
    </div>
    
</section><!-- End Clients Section --> --}}


<!-- Stats Section -->
<section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">

            <div class="col-lg-5">
                <img src="{{ asset('impact/assets/img/stats-img.svg') }}" alt="" class="img-fluid">
            </div>

            <div class="col-lg-7">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="stats-item d-flex">
                            <i class="bi bi-emoji-smile flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="5300" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>{{__('home.stats_2_title')}}</strong> <span>{{__('home.stats_2_message')}}</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-6">
                        <div class="stats-item d-flex">
                            <i class="bi bi-calendar-event flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>{{__('home.stats_1_title')}}</strong> <span>{{__('home.stats_1_message')}}</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-6">
                        <div class="stats-item d-flex">
                            <i class="bi bi-briefcase flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>{{__('home.stats_3_title')}}</strong> <span>{{__('home.stats_3_message')}}</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-6">
                        <div class="stats-item d-flex">
                            <i class="bi bi-headset flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="150526" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>{{__('home.stats_4_title')}}</strong> <span>{{__('home.stats_4_message')}}</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </div>

    </div>

</section><!-- /Stats Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

    <div class="container">
        <img src="{{ asset('impact/assets/img/cta-bg.jpg') }}" alt="">
        <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox play-btn"></a> --}}
                    <h3>{{__('home.call_to_action_heading')}}</h3>
                    <p>{{__('home.call_to_action_message')}}</p>
                    <a class="cta-btn" href="#">{{__('home.call_to_action_button')}}</a>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Call To Action Section -->

<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('home.services') }}</h2>
        <p>{{ __('home.services_message') }}</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h3>{{ __('home.service_1_title') }}</h3>
                    <p>{{ __('home.service_1_desc') }}</p>
                    <a href="#" class="readmore stretched-link">{{ __('home.read_more') }} <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-check2-circle"></i>
                    </div>
                    <h3>{{ __('home.service_2_title') }}</h3>
                    <p>{{ __('home.service_2_desc') }}</p>
                    <a href="#" class="readmore stretched-link">{{ __('home.read_more') }} <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h3>{{ __('home.service_3_title') }}</h3>
                    <p>{{ __('home.service_3_desc') }}</p>
                    <a href="#" class="readmore stretched-link">{{ __('home.read_more') }} <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-box2"></i>
                    </div>
                    <h3>{{ __('home.service_4_title') }}</h3>
                    <p>{{ __('home.service_4_desc') }}</p>
                    <a href="#" class="readmore stretched-link">{{ __('home.read_more') }} <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h3>{{ __('home.service_5_title') }}</h3>
                    <p>{{ __('home.service_5_desc') }}</p>
                    <a href="#" class="readmore stretched-link">{{ __('home.read_more') }} <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h3>{{ __('home.service_6_title') }}</h3>
                    <p>{{ __('home.service_6_desc') }}</p>
                    <a href="#" class="readmore stretched-link">{{ __('home.read_more') }} <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section><!-- End Services Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{__('home.testimonials')}}</h2>
        <p>{{__('home.testimonials_message')}}</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 10
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                        <h3>{{__('home.testimonials_1_client')}}</h3>
                        <h4>{{__('home.testimonials_1_position')}}</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{__('home.testimonials_1_message')}}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                        <h3>{{__('home.testimonials_2_client')}}</h3>
                        <h4>{{__('home.testimonials_2_position')}}</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{__('home.testimonials_2_message')}}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img style="object-fit: cover;" src="{{ asset('impact/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                        <h3>{{__('home.testimonials_3_client')}}</h3>
                        <h4>{{__('home.testimonials_3_position')}}</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{__('home.testimonials_3_message')}}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-6.jpg') }}" class="testimonial-img" alt="">
                        <h3>{{__('home.testimonials_4_client')}}</h3>
                        <h4>{{__('home.testimonials_4_position')}}</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{__('home.testimonials_4_message')}}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-9.jpg') }}" class="testimonial-img" alt="">
                        <h3>{{__('home.testimonials_5_client')}}</h3>
                        <h4>{{__('home.testimonials_5_position')}}</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{__('home.testimonials_5_message')}}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-7.jpg') }}" class="testimonial-img" alt="">
                        <h3>{{__('home.testimonials_6_client')}}</h3>
                        <h4>{{__('home.testimonials_6_position')}}</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{__('home.testimonials_6_message')}}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- End Testimonials Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{__('home.contact_us_section_title')}}</h2>
        <p>{{__('home.contact_us_section_message')}}</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">
                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    @foreach($contacts as $contact)
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200" style="background: #94d82d;">
                        <i class="{{$contact['icon']}} flex-shrink-0"></i>
                        <div dir="ltr">
                            <h3>{{$contact['title'][app()->getLocale()]}}</h3>
                            <p>{{$contact['value']}}</p>
                        </div>
                    </div><!-- End Info Item -->
                    @endforeach
                </div>

            </div>

            <div class="col-lg-8">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    <ul class="mb-0 list-unstyled">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{route('contact-message-store')}}" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
                    <div class="row gy-4">
                        @csrf
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" 
                            placeholder="{{__('home.contact_us_form_name_placeholder')}}" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" 
                            placeholder="{{__('home.contact_us_form_email_placeholder')}}" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" 
                            placeholder="{{__('home.contact_us_form_subject')}}" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="8" 
                            placeholder="{{__('home.contact_us_form_message_placeholder')}}" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">{{__('contact_us_form_meaasge_sent')}}</div>

                            <button type="submit">{{__('home.contact_us_form_send_button')}}</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
<!-- ======= Hero Section ======= -->
<!-- <section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>{{ __('messages.welcome_to') }} <span>{{ config('app.name') }}</span></h2>
                <p>{{ __('messages.hero_description') }}</p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{ asset('impact/assets/img/hero-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
    </div>
</section> -->
<!-- End Hero Section -->

<!-- ======= Products Section ======= -->
<!-- <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>{{ __('messages.our_products') }}</h2>
            <p>{{ __('messages.products_description') }}</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 portfolio-container">
                @foreach($products as $product)
                <div class="col-xl-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <a href="{{ asset($product->image) }}" data-gallery="portfolio-gallery-app" class="glightbox">
                            <img src="{{ asset($product->image) }}" class="img-fluid" alt="{{ $product->title }}">
                        </a>
                        <div class="portfolio-info">
                            <h4>{{ $product->title }}</h4>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> -->
<!-- End Products Section -->
@if(App::getLocale() == 'ar')
    <style>
        button#newsletter-subscribe-btn {
            border-radius: 0;
            border-top-left-radius: 2rem;
            border-bottom-left-radius: 2rem;
        }
    </style>
@endif

<!-- ======= Newsletter Section ======= -->
<section id="newsletter" class="newsletter-section py-5 accent-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="section-title mb-4">{{ __('home.newsletter_title') }}</h2>
                <p class="section-description mb-4">{{ __('home.newsletter_description') }}</p>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('newsletter-subscribe') }}" method="POST" class="newsletter-form">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control p-3 @error('email') is-invalid @enderror" 
                               placeholder="{{ __('home.newsletter_email_placeholder') }}" 
                               value="{{ old('email') }}" required>
                        <button class="btn btn-primary" type="submit">
                            {{ __('home.newsletter_subscribe_button') }}
                        </button>
                    </div>
                    @error('email')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Newsletter Section -->
@endsection