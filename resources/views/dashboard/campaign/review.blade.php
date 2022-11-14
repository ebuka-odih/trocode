@extends('dashboard.layout.app')
@section('content')

    <main class="main-content-wrap style-two">

        <!-- Start Student Progress Area -->
        <div class="student-progress-area">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="container">
                        @if(session()->has('lowbal'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Insufficient Balance:</strong>  {{ session()->get('lowbal') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                    <div class="blog-details-content card-box-style">
                        <div class="related-articles">
                            <div class="related-title d-flex justify-content-between">
                                <h3 class="text text-center">Campaign Details</h3>
                            </div>
                            <div class="row justify-content-between">

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog">
                                        <div class="blog-img">
                                            <a >
                                                <img src="{{ asset('files/'.$camp->media) }}" alt="Image">
                                            </a>

                                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog">

                                        <div class="blog-content">
                                            <table class="table" style="width:100%">
                                                <tr>
                                                    <th>Platform:</th>
                                                    <td>{{ optional($camp->ads)->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Objective:</th>
                                                    <td>{{ $camp->objective }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Budget:</th>
                                                    <td>${{ $camp->budget }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Duration:</th>
                                                    <td>{{ $camp->days }} Days</td>
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
                                                    <td>{!! $camp->status() !!}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        @if($camp->status == 1)
                                       <div class="row">
                                           <div class="col-md-6">
                                               <a href="" class="btn btn-warning">Edit</a>
                                           </div>
                                           <div class="col-md-6">
                                               <form action="{{ route('user.proceed') }}" method="POST">
                                                   @csrf
                                                   <input type="hidden" value="{{ $camp->id }}" name="camp_id">
                                                   <button type="submit" class="btn btn-primary">Proceed</button>
                                               </form>
                                           </div>
                                       </div>
                                        @endif
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- End Student Progress Area -->

        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("tab");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false
                        valid = false;
                    }
                }
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
                //... and adds the "active" class on the current step:
                x[n].className += " active";
            }
        </script>
        <!-- Start Footer Area -->
        @include('dashboard.layout.footer')
        <!-- End Footer Area -->

    </main>

@endsection
