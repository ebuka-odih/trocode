@extends('admin.layout.app')
@section('content')

        <!-- Hero -->
        <div class="bg-image" style="background-image: url('client/assets/media/photos/photo17@2x.jpg');">
            <div class="bg-black-25">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <a class="img-link" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                        </a>
                        <h1 class="fw-bold my-2 text-white">{{ $user->name }}</h1>
{{--                        <h2 class="h4 fw-bold text-white-75">--}}
{{--                            {!! $user->status() !!}--}}
{{--                        </h2>--}}

                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <!-- Latest Friends -->
            <h2 class="content-heading">
                <i class="si si-users me-1"></i> Profile Details
            </h2>

            <!-- END Latest Friends -->
            <div class="card">
                <table class="table ">
                    <tr>
                        <th>Name:</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Balance:</th>
                        <td>${{ $user->balance ? : "0.00" }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- END Page Content -->

@endsection
