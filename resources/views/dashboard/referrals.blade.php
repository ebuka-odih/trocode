@extends('dashboard.layout.app')
@section('content')

    <main class="main-content-wrap style-two">
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>My Referrals</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Start Student Progress Area -->
        <div class="student-progress-area">
            <div class="container-fluid">

                <div class="profile-area">
                    <div class="container-fluid">
                        <div class="card-box-style">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="profile-info d-flex align-items-center">
                                        <img class="w-25 rounded-4" src="{{ asset('img/avatar.svg') }}" alt="profile-img">
                                        <div class="profile-name ms-4">
                                            <h4>{{ $user->name }}</h4>
                                            <span>Member Since: {{ date('M Y', strtotime($user->created_at)) }}</span>
                                            <div class="follow-email">
                                                <a href="{{ route('user.settings') }}" class="btn btn-secondary">
                                                   Edit Profile
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="profile-activity">
                                                <i class="bx bx-repost"></i>
                                                <h3>Total Referrals</h3>
                                                <h2>{{ $user->referrals()->count() }}</h2>
                                            </div>
                                        </div>
{{--                                        <div class="col-lg-4 col-sm-6">--}}
{{--                                            <div class="profile-activity">--}}
{{--                                                <i class="bx bx-user"></i>--}}
{{--                                                <h3>Followers</h3>--}}
{{--                                                <h2>40,5487</h2>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="profile-details card-box-style">

                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>All Referrals</h3>
                                </div>

                                @foreach($referrals as $user)
                                <div class="col-lg-6 col-sm-12">
                                        <div class="single-audience d-flex justify-content-between align-items-center">
                                            <div class="icon">
                                                <img  src="{{ $user->avatar }}" alt="{{ $user->name }}">
                                            </div>
                                            <div class="audience-content">
                                                <h4>{{ $user->name }}</h4>
                                            </div>

                                        </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Student Progress Area -->

        <!-- Start Footer Area -->
       @include('dashboard.layout.footer')
        <!-- End Footer Area -->

    </main>

@endsection
