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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="edit-profile-content card-box-style">
                                    <h3>Edit Profile Info</h3>

                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Fullname</label>
                                                    <input type="text" name="name" class="form-control" value="{{ old('name', optional($user)->name) }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control" value="{{ old('email', optional($user)->email) }}">
                                                </div>
                                            </div>

                                            <div class="save-update">
                                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                                <a href="{{ route('user.dashboard') }}" class="btn btn-danger">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="edit-profile-content card-box-style">
                                    <h3>Change Password</h3>
                                    <form action="{{ route('user.storePassword') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" name="current_password" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" name="new_password" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control" name="new_confirm_password">
                                                </div>
                                            </div>

                                            <div class="save-update">
                                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                                <a href="{{ route('user.dashboard') }}" class="btn btn-danger">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
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
