@extends('dashboard.layout.app')
@section('content')

    <div class="content ">
        <!-- Overview -->
        <div class="d-flex justify-content-between align-items-center py-3">
            <h2 class="h3 fw-normal mb-0">Overview</h2>
        </div>
        <div class="row items-push">
            <div class="col-sm-6 col-xl-3">
                <a class="block block-rounded block-fx-pop text-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-primary-lighter mx-auto my-3">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="display-4 fw-bold">35.8k</div>
                        <div class="text-muted mt-1">Visitors</div>
                        <div class="py-3 fs-4 fw-bold text-success">
                            <i class="fa fa-caret-up me-1"></i>
                            15.7%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a class="block block-rounded block-fx-pop text-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-xinspire-lighter mx-auto my-3">
                            <i class="fa fa-eye text-xinspire-dark"></i>
                        </div>
                        <div class="display-4 fw-bold">98.5k</div>
                        <div class="text-muted mt-1">Page views</div>
                        <div class="py-3 fs-4 fw-bold text-danger">
                            <i class="fa fa-caret-down me-1"></i>
                            2.4%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a class="block block-rounded block-fx-pop text-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-xsmooth-lighter mx-auto my-3">
                            <i class="fa fa-columns text-xsmooth"></i>
                        </div>
                        <div class="display-4 fw-bold">25</div>
                        <div class="text-muted mt-1">Pages per visit</div>
                        <div class="py-3 fs-4 fw-bold text-success">
                            <i class="fa fa-caret-up me-1"></i>
                            52.5%
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a class="block block-rounded block-fx-pop text-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-xplay-lighter mx-auto my-3">
                            <i class="fa fa-level-up-alt text-xplay"></i>
                        </div>
                        <div class="display-4 fw-bold">12.5%</div>
                        <div class="text-muted mt-1">Bounce Rate</div>
                        <div class="py-3 fs-4 fw-bold text-danger">
                            <i class="fa fa-caret-down me-1"></i>
                            5.7%
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Overview -->


        <!-- Quick Statistics -->
        <div class="d-flex justify-content-between align-items-center pt-5 pb-3">
            <h2 class="h3 fw-normal mb-0">Select Your Ads Type</h2>
        </div>
        <div class="row items-push">
            @foreach($ads as $item)
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-fx-pop h-100 mb-0" href="{{ route('user.campaign', $item->id) }}">
                        <div class="block-content block-content-full">
                            <div class="fs-5 fw-semibold text-muted mb-3">{{ $item->name }}</div>

                            <div class="fs-4 fw-bold text-success">
                                <img style="height: 80px; width: 120px" src="{{ asset('files/'.$item->image) }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <!-- END Quick Statistics -->
    </div>

@endsection
