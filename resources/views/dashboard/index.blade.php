@extends('dashboard.layout.app')
@section('content')
    <style>
        @media only screen and (min-width: 1400px) and (max-width: 1700px)
            .single-audience {
                /* padding: 15px 10px; */
            }
    </style>

    <main class="main-content-wrap style-two">

        <!-- Start Welcome Back Area -->
        <div class="welcome-back-area">
            <div class="container-fluid">
                <div class="welcome-back-content">
                    <span>Welcome Back</span>
                    <h2>{{ auth()->user()->name }}</h2>
                    <img class="welcome-img" src="{{ asset('assets/images/welcome.png') }}" alt="welcome image">
                </div>
            </div>
        </div>
        <!-- End Welcome Back Area -->

        <!-- Start Student Progress Area -->
        <div class="student-progress-area">
            <h5 style="font-size: 25px" class="text-center m-4 fw-light">Select at least one platform</h5>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="row">
                            @foreach($ads as $item)

                           <div class="col-lg-6 col-sm-12">
                               <a href="{{ route('user.campaign', $item->id) }}">
                                   <div class="single-audience d-flex justify-content-between align-items-center">
                                       <div class="icon">
                                           <img  src="{{ asset('files/'.$item->image) }}" alt="{{ $item->name }}">
                                       </div>
                                       <div class="audience-content">
                                           <h4>{{ $item->name }}</h4>
                                           <span>{{ $item->description }}</span>
                                       </div>

                                   </div>
                               </a>
                             </div>
                            @endforeach

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
