@extends('dashboard.layout.app')
@section('content')

    <div class="content ">



        <!-- Quick Statistics -->
        <div class="d-flex justify-content-between align-items-center pt-5 pb-3">
            <h2 class="h3 fw-normal mb-0 ">Add at least one platform</h2>
        </div>
        <div class="row items-push">

            @foreach($ads as $item)
                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-content block-content-full">
                            <div class="d-sm-flex">
                                <div class="ms-sm-2 me-sm-4 py-2">
{{--                                    bg-body-dark--}}
                                    <a class="item item-rounded  text-dark fs-2 mb-2 mx-auto" href="{{ route('user.campaign') }}">
{{--                                        <i class="fab fa-fw fa-facebook"></i>--}}
                                        <img height="70" width="70" src="{{ asset('files/'.$item->image ) }}" alt="">
                                    </a>
                                </div>
                                <div class="py-2">
                                    <a class="link-fx h4 mb-1 d-inline-block text-dark" href="{{ route('user.campaign', $item->id) }}">
                                        {{ $item->name }}
                                    </a>

                                    <p class="text-muted mb-2">
                                        {{ $item->description ? : "" }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        <!-- END Quick Statistics -->
    </div>

@endsection
