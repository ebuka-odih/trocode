@extends('dashboard.layout.app')
@section('content')

    <style>

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #353743;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }
    </style>

    <div class="content">
        <div class="block block-rounded text-center">
            <div class="block-content">
                <h3 class="text-center">Enter Campaign Details</h3>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded text-center">
            <div class="block-content">
                <!-- Inline Layout -->
                <div class="row">
                    <div class="col-lg-12 space-y-2">
                        <!-- Form Inline - Default Style -->
                        <form id="regForm" method="POST" action="{{ route('user.getData') }}" class="js-validation" novalidate="novalidate" enctype="multipart/form-data">
                            <!-- One "tab" for each step in the form: -->
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="hidden" value="{{ $ad->id }}" name="ad_id">
                            <div class="tab">
                                <h4>Campaign Objective:</h4>
                                <div class="row items-push">
                                    <div class="col-md-4">
                                        <div class="form-check form-block">
                                            <input type="radio" required="" class="form-check-input" value="Increase Purchase" id="example-radio-block1" name="objective">
                                            <label class="form-check-label" for="example-radio-block1">
                                                <span class="d-block fw-normal text-center my-3">

                                                  <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded"><i class="fa fa-dollar-sign"></i></span>
                                                     <span class="fs-4 fw-semibold text-primary">Increase Purchase <small class="badge bg-secondary">Sales Campaign</small></span>
                                                </span>
                                                <small>Reach people more likely to purchase.</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-block">
                                            <input type="radio" required=""  class="form-check-input" value="Increase Website Visit" id="example-radio-block2" name="objective">
                                            <label class="form-check-label" for="example-radio-block2">
                                                <span class="d-block fw-normal text-center my-3">

                                                  <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded"><i class="fa fa-globe"></i></span>
                                                     <span class="fs-4 fw-semibold text-primary">Increase Website Visit <br><small class="badge bg-secondary">Website Traffic</small></span>
                                                </span>
                                                <small>Get more traffic from more potential customers</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-block">
                                            <input type="radio" required=""  class="form-check-input" value="Increase App Install"  id="example-radio-block3" name="objective">
                                            <label class="form-check-label" for="example-radio-block3">
                                                <span class="d-block fw-normal text-center my-3">

                                                  <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded"><i class="fa fa-mobile-alt"></i></span>
                                                     <span class="fs-4 fw-semibold text-primary">Increase App Install <br><small class="badge bg-secondary">Website Traffic</small></span>
                                                </span>
                                                <small>Get more more people to install your app</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab">
                                <h4>Choose Number of Days:</h4>
                                <div class="row items-push">
                                    <div class="col-md-3">
                                        <div class="form-check form-block">
                                            <input type="radio" required="" class="form-check-input" value="7" id="7days" name="days">
                                            <label class="form-check-label" for="7days">
                                                <span class="d-block fw-normal text-center my-3">
                                                  <span class="d-block fw-bold py-3 m-3 bg-body-light rounded">7 Days</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check form-block">
                                            <input type="radio" required="" class="form-check-input" value="30" id="30days" name="days">
                                            <label class="form-check-label" for="30days">
                                                <span class="d-block fw-normal text-center my-3">
                                                  <span class="d-block fw-bold py-3 m-3 bg-body-light rounded">30 Days</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check form-block">
                                            <input type="radio" required="" class="form-check-input" value="60" id="60days" name="days">
                                            <label class="form-check-label" for="60days">
                                                <span class="d-block fw-normal text-center my-3">
                                                  <span class="d-block fw-bold py-3 m-3 bg-body-light rounded">60 Days</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check form-block">
                                            <input type="radio" required="" class="form-check-input" value="90" id="90days" name="days">
                                            <label class="form-check-label" for="90days">
                                                <span class="d-block fw-normal text-center my-3">
                                                  <span class="d-block fw-bold py-3 m-3 bg-body-light rounded">90 Days</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab">
                                <div class="row items-push">
                                    <h4>What's Your Monthly Budget:</h4>
                                    <div class="col-md-4">
                                        <div class="form-check form-block">
                                            <input type="radio" required="" class="form-check-input" value="500" id="high" name="budget">
                                            <label class="form-check-label" for="high">
                                                <span class="d-block fw-normal text-center my-3">
                                                <span class="fs-4 fw-semibold text-primary"><small class="badge bg-success">Mid</small></span>
                                                  <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded">$500/day</span>
                                                </span>
                                                <small><i class="fa fa-dot-circle text-primary"></i>Big business with multiple teams</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-block">
                                            <input type="radio" required="" class="form-check-input" value="150" id="mid" name="budget">
                                            <label class="form-check-label" for="mid">
                                                <span class="d-block fw-normal text-center my-3">
                                                <span class="fs-4 fw-semibold text-primary"><small class="badge bg-warning">Mid</small></span>
                                                  <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded">$150/day</span>
                                                </span>
                                                <small><i class="fa fa-dot-circle text-primary"></i>Startup</small>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-block">
                                            <input type="radio" required="" class="form-check-input" value="25" id="low" name="budget">
                                            <label class="form-check-label" for="low">
                                                <span class="d-block fw-normal text-center my-3">
                                                <span class="fs-4 fw-semibold text-primary"><small class="badge bg-danger">Low</small></span>
                                                  <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded">$25/day</span>
                                                </span>
                                                <small><i class="fa fa-dot-circle text-primary"></i>Freelance Business</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="row items-push">
                                    <h4>Who are your target audience</h4>
                                    <div class="col-md-2">
                                        <h4>Age</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-">
                                            <select name="start_age" id="" class="form-select">
                                                <option value="16">16</option>
                                                <option value="above">Above 16</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-">
                                            <select name="end_age" id="" class="form-select">
                                                <option value="40">40</option>
                                                <option value="below">Below 40</option>
                                                <option value="above">Above 40</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row items-push">
                                    <div class="col-md-2">
                                        <h4>Gender</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form">
                                            <select name="gender" id="" class="form-select">
                                                <option value="All">All</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row items-push">
                                    <div class="col-md-2">
                                        <h4>Ad Media</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form">
                                            <input type="file" name="media" class="form-control-file">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab">

                            </div>
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" class="btn btn-info" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                        </form>
                        <!-- END Form Inline - Default Style -->

                        <br><br>
                    </div>

                </div>
                <!-- END Inline Layout -->


            </div>
        </div>
    </div>


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
                document.getElementById("nextBtn").type = "submit";
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
@endsection
