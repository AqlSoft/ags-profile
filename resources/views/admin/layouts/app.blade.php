<!DOCTYPE html>
<html lang="{{App::getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ __('admin.admin_panel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    @if(app()->getLocale() == 'ar')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    @else
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #008374;
            --primary-color-hover: #006c5d;
            --sidebar-width: 250px;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: var(--sidebar-width);
            padding: 1rem;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            z-index: 1000;
        }

        [dir="rtl"] .sidebar {
            left: auto;
            right: 0;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }

        [dir="rtl"] .main-content {
            margin-left: 0;
            margin-right: var(--sidebar-width);
        }

        .nav-link {
            color: #333;
            padding: 0.5rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 5px;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: var(--primary-color);
            color: #fff;
        }

        .nav-link i {
            margin-right: 0.5rem;
        }

        [dir="rtl"] .nav-link i {
            margin-right: 0;
            margin-left: 0.5rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-color-hover);
            border-color: var(--primary-color-hover);
        }

        .language-switcher {
            position: fixed;
            top: 1rem;
            right: 1rem;
            z-index: 1001;
        }

        [dir="rtl"] .language-switcher {
            right: auto;
            left: 1rem;
        }
    </style>

    @stack('styles')
</head>

<body>
    <!-- Language Switcher -->
    <div class="language-switcher">
        <a href="{{ route('locale.switch', ['locale' => app()->getLocale() == 'ar' ? 'en' : 'ar']) }}"
            class="btn btn-light btn-sm">
            {{ app()->getLocale() == 'ar' ? 'English' : 'العربية' }}
        </a>
    </div>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-md-2">
                <nav class="sidebar">
                    <div class="d-flex align-items-center mb-4 px-3">
                        <h4 class="mb-0">{{ __('home.ags') }}</h4>
                    </div>

                    <nav class="nav flex-column">
                        <a href="{{ route('admin-dashboard') }}" class="nav-link {{ request()->routeIs('admin-dashboard') ? 'active' : '' }}">
                            <i class="bi bi-speedometer2"></i> {{ __('admin.dashboard') }}
                        </a>
                        <a href="{{ route('admin-users') }}" class="nav-link {{ request()->routeIs('admin-users') ? 'active' : '' }}">
                            <i class="bi bi-people"></i> {{ __('admin.users') }}
                        </a>
                        <a href="#" class="nav-link">
                            <i class="bi bi-gear"></i> {{ __('admin.settings') }}
                        </a>
                        <form action="{{ route('admin-logout') }}" method="POST" class="mt-auto">
                            @csrf
                            <button type="submit" class="nav-link border-0 bg-transparent w-100 text-start">
                                <i class="bi bi-box-arrow-right"></i> {{ __('admin.logout') }}
                            </button>
                        </form>
                    </nav>
                </nav>
            </div>

            <!-- Main content -->
            <div class="col-md-10 main-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Flash Messages Data -->
    <div id="flash-messages" style="display: none;"
        data-success="{{ session('success') }}"
        data-error="{{ session('error') }}"
        data-warning="{{ session('warning') }}"
        data-info="{{ session('info') }}"
        data-validation-errors="{{ json_encode($errors->all()) }}"
        data-locale="{{ app()->getLocale() }}"></div>

    <script>
        // Toastr Configuration
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": document.getElementById('flash-messages').dataset.locale === 'ar' ? "toast-top-left" : "toast-top-right",
            "preventDuplicates": false,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "rtl": document.getElementById('flash-messages').dataset.locale === 'ar'
        };

        // Show Flash Messages
        document.addEventListener('DOMContentLoaded', function() {
            const flashMessages = document.getElementById('flash-messages');

            // Show Success Message
            const success = flashMessages.dataset.success;
            if (success) {
                toastr.success(success);
            }

            // Show Error Message
            const error = flashMessages.dataset.error;
            if (error) {
                toastr.error(error);
            }

            // Show Warning Message
            const warning = flashMessages.dataset.warning;
            if (warning) {
                toastr.warning(warning);
            }

            // Show Info Message
            const info = flashMessages.dataset.info;
            if (info) {
                toastr.info(info);
            }

            // Show Validation Errors
            const validationErrors = JSON.parse(flashMessages.dataset.validationErrors || '[]');
            validationErrors.forEach(error => {
                toastr.error(error);
            });
        });
    </script>
    @stack('scripts')
</body>

</html>