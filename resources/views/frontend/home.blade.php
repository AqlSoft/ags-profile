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
                        <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-gem"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-geo-alt"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-command"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
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
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-6">
                        <div class="stats-item d-flex">
                            <i class="bi bi-journal-richtext flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-6">
                        <div class="stats-item d-flex">
                            <i class="bi bi-headset flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-6">
                        <div class="stats-item d-flex">
                            <i class="bi bi-people flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
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
                    <h3>Call To Action</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
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
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                                Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                                malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                                minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                                velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                veniam.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('impact/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                                culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                                quid.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Product</li>
                <li data-filter=".filter-branding">Branding</li>
                <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->

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
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/product-1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/product-1.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/branding-1.jpg') }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('impact/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/books-1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/books-1.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/app-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/app-2.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/product-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/product-2.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/branding-2.jpg') }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('impact/assets/img/portfolio/branding-2.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/books-2.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/books-2.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/app-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/app-3.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/product-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/product-3.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/branding-3.jpg') }}" data-gallery="portfolio-gallery-app"
                            class="glightbox"><img src="{{ asset('impact/assets/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <a href="{{ asset('impact/assets/img/portfolio/books-3.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="{{ asset('impact/assets/img/portfolio/books-3.jpg') }}" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->

<!-- Team Section -->
<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

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
            </div><!-- End Team Member -->

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
            </div><!-- End Team Member -->

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
            </div><!-- End Team Member -->

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
            </div><!-- End Team Member -->

        </div>

    </div>

</section><!-- /Team Section -->

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
                    <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-container">
                    <div class="faq-item faq-active">
                        <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
                        <div class="faq-content">
                            <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                                gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a
                                pellentesque?</span></h3>
                        <div class="faq-content">
                            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet
                                id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                                elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span>
                        </h3>
                        <div class="faq-content">
                            <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                                elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                                eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                                sed odio morbi quis</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span>
                        </h3>
                        <div class="faq-content">
                            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet
                                id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                                elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor
                                consequat?</span></h3>
                        <div class="faq-content">
                            <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in.
                                Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.
                                Purus gravida quis blandit turpis cursus in</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div>
        </div>

    </div>

</section><!-- /Faq Section -->

<!-- Recent Posts Section -->
<section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

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
            </div><!-- End post list item -->

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
            </div><!-- End post list item -->

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
            </div><!-- End post list item -->

        </div><!-- End recent posts list -->

    </div>

</section><!-- /Recent Posts Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">
                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200" style="background: #94d82d;">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300" style="background: #94d82d;">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400" style="background: #94d82d;">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500" style="background: #94d82d;">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h3>Open Hours:</h3>
                            <p>Mon-Sat: 11AM - 23PM</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="8" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
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

<!-- ======= Newsletter Section ======= -->
<section id="newsletter" class="newsletter">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>{{ __('messagesnewsletter') }}</h2>
            <p>{{ __('messages.newsletter_description') }}</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('newsletter-subscribe') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="{{ __('messages.enter_email') }}" required>
                        <button type="submit" class="btn btn-primary">{{ __('messages.subscribe') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Newsletter Section -->
@endsection