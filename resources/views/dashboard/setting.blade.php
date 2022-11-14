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
                            <div class="col-lg-8">
                                <div class="edit-profile-content card-box-style">
                                    <h3>Edit Profile Info</h3>

                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Fullname</label>
                                                    <input type="text" class="form-control" value="{{ old('name', optional($user)->name) }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>




                                            <div class="save-update">
                                                <button class="btn btn-primary me-2">Update</button>
                                                <button class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="edit-profile-content card-box-style">
                                    <h3>Change Password</h3>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" class="form-control" value="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control" value="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control" value="password">
                                                </div>
                                            </div>

                                            <div class="save-update">
                                                <button class="btn btn-primary me-2">Update</button>
                                                <button class="btn btn-danger">Cancel</button>
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
