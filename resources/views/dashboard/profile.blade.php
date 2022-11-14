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

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="profile-activity">
                                                <i class="bx bx-repost"></i>
                                                <h3>Posts</h3>
                                                <h2>15,2015</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="profile-activity">
                                                <i class="bx bx-user"></i>
                                                <h3>Followers</h3>
                                                <h2>40,5487</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="profile-activity">
                                                <i class="bx bx-wifi"></i>
                                                <h3>Followers</h3>
                                                <h2>50,1248</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end edit-massage">
                                        <a href="edit-profile.html" class="btn btn-primary">
                                            Edit Profile
                                        </a>
                                        <button class="btn btn-secondary">
                                            Massage
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-details card-box-style">
                            <ul class="list-inline profile-menu">
                                <li>
                                    <a href="profile.html" class="active">Profile</a>
                                </li>
                                <li>
                                    <a href="friends.html">Friends</a>
                                </li>
                                <li>
                                    <a href="followers.html">Followers</a>
                                </li>
                            </ul>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Personal Information</h3>
                                </div>

                                <div class="col-lg-6">
                                    <div class="personal-info">
                                        <ul class="list-inline">
                                            <li>
                                                <span>Full Name :</span>
                                                John Smilga
                                            </li>
                                            <li>
                                                <span>Profession :</span>
                                                Freelancer
                                            </li>
                                            <li>
                                                <span>Location :</span>
                                                6890 Blvd, The Bronx, NY 1058, USA
                                            </li>
                                            <li>
                                                <span>Languages :</span>
                                                English, China
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="personal-info">
                                        <ul class="list-inline">
                                            <li>
                                                <span>Website :</span>
                                                <a href="#" target="_blank">envytheme.com</a>
                                            </li>
                                            <li>
                                                <span>Email :</span>
                                                <a href="mailto:johnsmilga@hello.com">johnsmilga@hello.com</a>
                                            </li>
                                            <li>
                                                <span>Phone :</span>
                                                <a href="tel:+44-077-585-00-77">: +44 077 585 00 77</a>
                                            </li>
                                            <li>
                                                <span>Others Link :</span>
                                                <a href="#">Twitter, Facebook, Linkedin Etc</a>
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
