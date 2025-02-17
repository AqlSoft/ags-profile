<!DOCTYPE html>
<html lang="{{ session('locale') }}" dir="{{ session('locale') == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AGS')</title>

    <link href="{{ asset('impact/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('impact/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('impact/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('impact/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('impact/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('impact/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('impact/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('impact/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    @if(session('locale') == 'ar')
    @endif
    <style>
        * {
            font-family: 'Cairo', sans-serif !important;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:sales@ag-stores.com">sales@ag-stores.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+966547660005</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->
        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">{{__('home.ags')}}</h1>
                    <span>.</span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero">{{ __('messages.home') }}</a></li>
                        <li><a href="#about">{{ __('messages.about') }}</a></li>
                        <li><a href="#services">{{ __('messages.services') }}</a></li>
                        <li><a href="#portfolio">{{ __('messages.portfolio') }}</a></li>
                        <li><a href="#team">{{ __('messages.team') }}</a></li>
                        <li><a href="#contact">{{ __('messages.contact') }}</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link">
                                <i class="me-3 bi bi-translate"></i>
                                <span>{{ session('locale') === 'ar' ? 'العربية' : 'English' }}</span>
                                <i class="ms-3 bi bi-chevron-down dropdown-indicator"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('/locale/ar') }}" class="{{ session('locale') === 'ar' ? 'active' : '' }}">
                                        العربية
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/locale/en') }}" class="{{ session('locale') === 'en' ? 'active' : '' }}">
                                        English
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>


                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>
        </div>

    </header>

    <main id="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>{{ __('home.ags') }}</span>
                    </a>
                    <p>{{ __('home.footer_about') }}</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>{{ __('home.useful_links') }}</h4>
                    <ul>
                        <li><a class="text-light" href="#hero">{{ __('home.home') }}</a></li>
                        <li><a class="text-light" href="#about">{{ __('home.about_us') }}</a></li>
                        <li><a class="text-light" href="#services">{{ __('home.services') }}</a></li>
                        <li><a class="text-light" href="#contact">{{ __('home.contact') }}</a></li>
                        @if (auth()->user())
                        <li><a class="text-light" href="{{ route('admin-dashboard') }}">{{ __('home.admin_dashboard') }}</a></li>
                        @else
                        <li><a class="text-light" href="{{ route('admin-login') }}">{{ __('home.admin_login') }}</a></li>
                        @endif
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>{{ __('home.our_services') }}</h4>
                    <ul>
                        <li><a href="#">{{ __('home.service_1_title') }}</a></li>
                        <li><a href="#">{{ __('home.service_2_title') }}</a></li>
                        <li><a href="#">{{ __('home.service_3_title') }}</a></li>
                        <li><a href="#">{{ __('home.service_4_title') }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>{{ __('home.contact_us') }}</h4>
                    <p>{{ __('home.address') }}</p>
                    <p class="mt-4"><strong>{{ __('home.phone') }}:</strong> <span dir="ltr">+966 54 766 0005</span></p>
                    <p><strong>{{ __('home.email') }}:</strong> <span dir="ltr">sales@ag-stores.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>&copy; <span>{{ __('home.copyright') }}</span> <strong class="px-1">{{ __('home.ags') }}</strong> <span>{{ __('home.all_rights_reserved') }}</span></p>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('impact/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('impact/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('impact/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('impact/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('impact/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('impact/assets/js/main.js') }}"></script>

    @php
    $messageTypes = ['success', 'error', 'warning', 'info', 'status'];
    $message = null;
    $messageType = null;

    foreach ($messageTypes as $type) {
    if (session($type)) {
    $message = session($type);
    $messageType = $type;
    break;
    }
    }
    @endphp

    @if ($message)
    <div class="toast-container position-fixed {{ app()->getLocale() === 'ar' ? 'top-start' : 'top-end' }} p-3">
        <div id="globalToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header {{ $messageType === 'error' ? 'bg-danger text-white' : 
                                        ($messageType === 'warning' ? 'bg-warning text-dark' : 
                                        ($messageType === 'success' ? 'bg-success text-white' : 
                                        ($messageType === 'info' ? 'bg-info text-white' : 'bg-light'))) }}">
                <strong class="me-auto">
                    @switch($messageType)
                    @case('success')
                    {{ app()->getLocale() === 'ar' ? 'نجاح' : 'Success' }}
                    @break
                    @case('error')
                    {{ app()->getLocale() === 'ar' ? 'خطأ' : 'Error' }}
                    @break
                    @case('warning')
                    {{ app()->getLocale() === 'ar' ? 'تحذير' : 'Warning' }}
                    @break
                    @case('info')
                    {{ app()->getLocale() === 'ar' ? 'معلومات' : 'Information' }}
                    @break
                    @default
                    {{ app()->getLocale() === 'ar' ? 'إشعار' : 'Notification' }}
                    @endswitch
                </strong>
                <button type="button" class="btn-close {{ $messageType === 'error' || $messageType === 'success' || $messageType === 'info' ? 'btn-close-white' : '' }}" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ $message }}
            </div>
        </div>
    </div>
    @endif
    @if($message)
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var toastEl = document.getElementById('globalToast');
            var toast = new bootstrap.Toast(toastEl);
            toast.show();
        });
    </script>
    @endif
</body>

</html>