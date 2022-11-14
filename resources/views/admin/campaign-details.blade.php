
@extends('admin.layout.app')
@section('content')

    <div class="content">
        <div class="block block-rounded text-center">
            <div class="block-content">
                <h3 class="text-center">Campaign Details</h3>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded text-center">
            <div class="block-content">
                <!-- Inline Layout -->
                <div class="row">
                    <div class="col-lg-12 space-y-2">

                        <div class="col-md-10 col-xl-10 offset-1">
                            <!-- House -->
                            <div class="block block-rounded">
                                <div class="block-content p-0 overflow-hidden">
                                    <a class="img-link img-fluid-100" data-toggle="layout" data-action="side_overlay_open" href="javascript:void(0)">
                                        <img class="img-fluid rounded-top" src="{{ asset('files/'.$camp->media) }}" alt="">
                                    </a>
                                </div>
                                <div class="block-content">
                                    <h4 class="h6 mb-2">{{ $camp->objective }}</h4>
                                    <h5 class="h2 fw-light push">
                                        ${{ $camp->budget }} <span class="fs-3 text-muted">per day | {{ $camp->days }} Days</span>
                                    </h5>
                                </div>
                                <h4>Audience</h4>
                                <div class="container">
                                    @if(session()->has('declined'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Insufficient Balance:</strong>  {{ session()->get('declined') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
                                <div class="block-content p-0">
                                    <div class="row text-center m-0 border-top border-bottom bg-body-light">
                                        <table class="table" style="width:100%">
                                            <tr>
                                                <th>Platform:</th>
                                                <td>{{ optional($camp->ads)->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Age:</th>
                                                <td>{{ $camp->start_age }}yo => {{ $camp->end_age }}yo</td>
                                            </tr>
                                            <tr>
                                                <th>Gender:</th>
                                                <td>{{ $camp->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status:</th>
                                                <td>  {!! $camp->status() !!}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row">
                                        <div class="col-6">
                                            <a class="btn btn-sm btn-primary w-100" href="{{ route('admin.campaigns') }}">
                                                Back
                                            </a>
                                        </div>
                                        @if($camp->status == 1)
                                        <div class="col-6">
                                            <a class="btn btn-sm btn-alt-primary w-100"  href="{{ route('admin.approve', $camp->id) }}">
                                                Publish
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- END House -->
                        </div>

                    </div>

                </div>
                <!-- END Inline Layout -->


            </div>
        </div>
    </div>

@endsection
