@extends('layouts.frontend')

@section('content')
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>{{ __('messages.our_team') }}</h2>
                <p>{{ __('messages.team_description') }}</p>
            </div>

            <div class="row gy-4">
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ asset('impact/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                        <h4>{{ __('messages.team_member_1_name') }}</h4>
                        <span>{{ __('messages.team_member_1_position') }}</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="{{ asset('impact/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                        <h4>{{ __('messages.team_member_2_name') }}</h4>
                        <span>{{ __('messages.team_member_2_position') }}</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('impact/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        <h4>{{ __('messages.team_member_3_name') }}</h4>
                        <span>{{ __('messages.team_member_3_position') }}</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <img src="{{ asset('impact/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                        <h4>{{ __('messages.team_member_4_name') }}</h4>
                        <span>{{ __('messages.team_member_4_position') }}</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
@endsection
