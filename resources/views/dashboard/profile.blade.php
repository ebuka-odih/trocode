@extends('dashboard.layout.app')
@section('content')

    <main class="main-content-wrap style-two">
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Profile</h3>
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
                                                <h3>Total Campaign</h3>
                                                <h2>{{ $camp_num }}</h2>
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
                            <ul class="list-inline profile-menu">
                                <li>
                                    <a  class="active">Profile</a>
                                </li>
                            </ul>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Personal Information</h3>
                                </div>

                                <div class="col-lg-10">
                                    <div class="personal-info">
                                        <ul class="list-inline">
                                            <li>
                                                <span>Full Name :</span>
                                                {{ $user->name }}
                                            </li>
                                            <li>
                                                <span>Email :</span>
                                                {{ $user->email }}
                                            </li>
                                            <li>
                                                <span>Balance :</span>
                                                ${{ $user->balance }}
                                            </li>
                                            <li>
                                                <span>Joined At :</span>
                                                {{ date('d M, Y', strtotime($user->created_at)) }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

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
