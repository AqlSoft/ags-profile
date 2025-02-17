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
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center">
                        <i class="bi bi-play-circle"></i><span>{{__('home.watch_video')}}</span>
                    </a>
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
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /About Section -->


<!-- Clients Section -->
<section id="clients" class="clients section">

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

</section><!-- End Clients Section -->

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
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox play-btn"></a>
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

<!-- Portfolio Section 
<section id="portfolio" class="portfolio section">

    {{-- Section Title --}}
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>{{-- End Section Title --}}

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Product</li>
                <li data-filter=".filter-branding">Branding</li>
                <li data-filter=".filter-books">Books</li>
            </ul>{{-- End Portfolio Filters --}}

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/app-1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/app-1.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/product-1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/product-1.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/branding-1.jpg') }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('impact/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/books-1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/books-1.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/app-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/app-2.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/product-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/product-2.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/branding-2.jpg') }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('impact/assets/img/portfolio/branding-2.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/books-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/books-2.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/app-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/app-3.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/product-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/product-3.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/branding-3.jpg') }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('impact/assets/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/books-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/books-3.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div>{{-- End Portfolio Item --}}

            </div>{{-- End Portfolio Container --}}

        </div>

    </div> 

</section>{{--End Portfolio Section--}}-->

<!-- Team Section -->
<!-- <section id="team" class="team section">

    {{-- Section Title --}}
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>{{-- End Section Title --}}

    <div class="container">

        <div class="row gy-4">

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src="{{ asset('impact/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                    <h4>Walter White</h4>
                    <span>Web Development</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>{{-- End Team Member --}}

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <img src="{{ asset('impact/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                    <h4>Sarah Jhinson</h4>
                    <span>Marketing</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>{{-- End Team Member --}}

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <img src="{{ asset('impact/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                    <h4>William Anderson</h4>
                    <span>Content</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>{{-- End Team Member --}}

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="member">
                    <img src="{{ asset('impact/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>{{-- End Team Member --}}

        </div>

    </div>

</section>-->{{--End Team Section--}}

<!-- Pricing Section -->

<!-- Section Title -->
<!-- End Section Title -->
<!-- End Pricing Item -->
<!-- <section id="pricing" class="pricing section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <div class="row g-4">

            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>Free Plan</h3>
                    <div class="icon">
                        <i class="bi bi-box"></i>
                    </div>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                    </ul>
                    <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-item featured">
                    <h3>Business Plan</h3>
                    <div class="icon">
                        <i class="bi bi-rocket"></i>
                    </div>

                    <h4><sup>$</sup>29<span> / month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                    </ul>
                    <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>Developer Plan</h3>
                    <div class="icon">
                        <i class="bi bi-send"></i>
                    </div>
                    <h4><sup>$</sup>49<span> / month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                    </ul>
                    <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Pricing Item -->
<!-- End Pricing Item -->



<!-- /Pricing Section -->

<!-- Faq Section -->
<section id="faq" class="faq section">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="content px-xl-5">
                    <h3><span>{{__('home.faq_normal')}} </span><strong>{{__('home.faq_bold')}}</strong></h3>
                    <p>
                       {{__('home.faq_message')}}
                    </p>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-container">
                    <div class="faq-item faq-active">
                        <h3><span class="num">1.</span> <span>{{__('home.faq_question_1')}}</span></h3>
                        <div class="faq-content">
                            <p>{{__('home.faq_answer_1')}}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->
                    <div class="faq-item">
                        <h3><span class="num">2.</span> <span>{{__('home.faq_question_2')}}</span></h3>
                        <div class="faq-content">
                            <p>{{__('home.faq_answer_2')}}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">3.</span> <span>{{__('home.faq_question_3')}}</span></h3>
                        <div class="faq-content">
                            <p>{{__('home.faq_answer_3')}}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">4.</span> <span>{{__('home.faq_question_4')}}</span></h3>
                        <div class="faq-content">
                            <p>{{__('home.faq_answer_4')}}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">5.</span> <span>{{__('home.faq_question_5')}}</span></h3>
                        <div class="faq-content">
                            <p>{{__('home.faq_answer_5')}}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div>
        </div>

    </div>

</section><!-- /Faq Section -->

<!-- Recent Posts Section -->
<!--<section id="recent-posts" class="recent-posts section">

    
    <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container">

        <div class="row gy-4">

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article>

                    <div class="post-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Politics</p>

                    <h2 class="title">
                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div>

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article>

                    <div class="post-img">
                        <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Sports</p>

                    <h2 class="title">
                        <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Allisa Mayer</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 5, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div>

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article>

                    <div class="post-img">
                        <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Entertainment</p>

                    <h2 class="title">
                        <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Mark Dower</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 22, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div>

        </div>

    </div>

</section> Recent Posts Section -->

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
                        <div>
                            <h3>{{$contact['title'][app()->getLocale()]}}</h3>
                            <p>{{$contact['value']}}</p>
                        </div>
                    </div><!-- End Info Item -->
                    @endforeach
                </div>

            </div>

            <div class="col-lg-8">
                <form action="forms/contact" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
                    <div class="row gy-4">

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
<section id="newsletter" class="newsletter">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>{{ __('messages.newsletter') }}</h2>
            <p>{{ __('messages.newsletter_description') }}</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('newsletter-subscribe') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="{{ __('messages.enter_email') }}" required>
                        <button id="newsletter-subscribe-btn" type="submit" class="btn btn-primary">{{ __('messages.subscribe') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Newsletter Section -->
@endsection