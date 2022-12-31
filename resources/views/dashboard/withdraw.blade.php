@extends('dashboard.layout.app')
@section('content')

    <main class="main-content-wrap style-two">
        <div class="page-title-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
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
                            <div class="col-lg-8 offset-lg-2">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="profile-activity">
                                            <i class="bx bx-money"></i>
                                            <h3>Balance</h3>
                                            <h2>NGN @convert($user->balance)</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="profile-activity">
                                            <i class="bx bx-money"></i>
                                            <h3>Earned</h3>
                                            <h2>NGN @convert($user->ref_bonus)</h2>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-8 offset-lg-2">
                                <h3>Withdraw Funds</h3>
                                <div class="edit-profile-content card-box-style">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif

                                    <form action="{{ route('user.proWithdraw') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Bank Name</label>
                                                    <input type="text" name="bank" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Account Name</label>
                                                    <input type="text" autocomplete="off" name="acct_name" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Account Number</label>
                                                    <input type="text" name="acct_number" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <input type="number" class="form-control" name="amount">
                                                </div>
                                            </div>

                                            <div class="save-update">
                                                <button type="submit" class="btn btn-primary me-2">Send</button>
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
