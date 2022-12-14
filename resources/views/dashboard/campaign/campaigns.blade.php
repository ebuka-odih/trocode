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
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($camp as $item)
                                <tr class="table-info">
                                    <th >#{{ $item->transId() }}</th>
                                    <td >{{ date('d m, Y', strtotime($item->created_at)) }}</td>
                                    <td>@convert($item->budget)</td>
                                    <td>NGN</td>
                                    <td>{!! $item->status() !!}</td>
                                    <td>
                                        <a href="{{ route('user.review',$item->id) }}" class="btn btn-primary">View</a>
                                    </td>
                                </tr>
                                @endforeach

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



@endsection
