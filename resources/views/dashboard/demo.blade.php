@extends('dashboard.layout.app')
@section('content')

    <main class="main-content-wrap style-two">

        <!-- Start Student Progress Area -->
        <div class="student-progress-area">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <a href="{{ route('user.addCamp') }}" class="btn btn-primary">Add Campaign</a>

                        <div class="card-box-style">
                            <div class="others-title">
                                <h3>Campaign History</h3>
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Currency</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-info">
                                    <th >#3</th>
                                    <td >12/4/22</td>
                                    <td>$300</td>
                                    <td>NGN</td>
                                </tr>

                                </tbody>
                            </table>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Amount to Fund</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.pay') }}" method="POST" target="_blank" >
                    @csrf
                    <div class="modal-body">
                        <div class="card-box-style">

                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <input type="number" name="amount" class="form-control"  aria-label="City">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Amount to Fund</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.pay') }}" method="POST" target="_blank" >
                    @csrf
                    <div class="modal-body">
                        <div class="card-box-style">

                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <input type="number" name="amount" class="form-control"  aria-label="City">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
