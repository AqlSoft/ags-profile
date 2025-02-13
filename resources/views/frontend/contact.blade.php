@extends('layouts.frontend')

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>{{ __('messages.contact') }}</h2>
                <p>{{ __('messages.contact_description') }}</p>
            </div>

            <div class="row gx-lg-0 gy-4">
                <div class="col-lg-4">
                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>{{ __('messages.location') }}:</h4>
                                <p>{{ __('messages.company_address') }}</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>{{ __('messages.email') }}:</h4>
                                <p>{{ __('messages.company_email') }}</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>{{ __('messages.call') }}:</h4>
                                <p>{{ __('messages.company_phone') }}</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>{{ __('messages.open_hours') }}:</h4>
                                <p>{{ __('messages.working_hours') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <form action="{{ route('contact.send') }}" method="post" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('messages.your_name') }}" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('messages.your_email') }}" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('messages.subject') }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="{{ __('messages.message') }}" required></textarea>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit">{{ __('messages.send_message') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection
