@extends('dashboard.layout.app')
@section('content')
    <style>
        .frb-group {
            margin: 15px 0;
        }

        .frb ~ .frb {
            margin-top: 15px;
        }

        .frb input[type="radio"]:empty,
        .frb input[type="checkbox"]:empty {
            display: none;
        }

        .frb input[type="radio"] ~ label:before,
        .frb input[type="checkbox"] ~ label:before {
            font-family: FontAwesome;
            content: '\f096';
            position: absolute;
            visibility: hidden;
            top: 50%;
            margin-top: -11px;
            left: 15px;
            font-size: 22px;
        }

        .frb input[type="radio"]:checked ~ label:before,
        .frb input[type="checkbox"]:checked ~ label:before {
            content: '\f046';
        }

        .frb input[type="radio"] ~ label,
        .frb input[type="checkbox"] ~ label {
            /*position: relative;*/
            cursor: pointer;
            width: 100%;
            /*border: 1px solid #ccc;*/
            border-radius: 5px;
            /*background-color: #f2f2f2;*/

            background: #FFFFFF 0% 0% no-repeat padding-box;
            /*box-shadow: 0px 5px 25px rgb(202 214 242 / 40%);*/
            border: -3px solid #DFE9FF;

        }

        .single-website-performance {
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 5px 25px rgb(202 214 242 / 40%);
            border: -3px solid #DFE9FF;
            border-radius: 20px;
            padding: 28px 30px;
            transition: all ease 0.5s;
            margin-bottom: 20px;
            border: 1px solid rgba(121, 121, 146, 0.64);
        }

        .frb input[type="radio"] ~ label:focus,
        .frb input[type="radio"] ~ label:hover,
        .frb input[type="checkbox"] ~ label:focus,
        .frb input[type="checkbox"] ~ label:hover {
            /*box-shadow: 0px 0px 3px #333;*/
        }

        .frb input[type="radio"]:checked ~ label,
        .frb input[type="checkbox"]:checked ~ label {
            color: #fafafa;
        }

        .frb input[type="radio"]:checked ~ label,
        .frb input[type="checkbox"]:checked ~ label {
            background-color: #f2f2f2;
        }

        .frb.frb-default input[type="radio"]:checked ~ label,
        .frb.frb-default input[type="checkbox"]:checked ~ label {
            color: #333;
        }

        .frb.frb-primary input[type="radio"]:checked ~ label,
        .frb.frb-primary input[type="checkbox"]:checked ~ label {
            background-color: #337ab7;
        }

        .frb.frb-success input[type="radio"]:checked ~ label,
        .frb.frb-success input[type="checkbox"]:checked ~ label {
            background-color: #2883dd;
        }

        .frb input[type="radio"]:empty ~ label span,
        .frb input[type="checkbox"]:empty ~ label span {
            display: inline-block;
        }

        .frb input[type="radio"]:empty ~ label span.frb-title,
        .frb input[type="checkbox"]:empty ~ label span.frb-title {
            font-size: 16px;
            font-weight: 700;
            margin: 5px 5px 5px 50px;
        }

        .frb input[type="radio"]:empty ~ label span.frb-description,
        .frb input[type="checkbox"]:empty ~ label span.frb-description {
            font-weight: normal;
            font-style: italic;
            color: #999;
            margin: 5px 5px 5px 50px;
        }

        .frb input[type="radio"]:empty:checked ~ label span.frb-description,
        .frb input[type="checkbox"]:empty:checked ~ label span.frb-description {
            color: #fafafa;
        }

        .frb.frb-default input[type="radio"]:empty:checked ~ label span.frb-description,
        .frb.frb-default input[type="checkbox"]:empty:checked ~ label span.frb-description {
            color: #999;
        }
    </style>
    <style>

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            /*padding: 40px;*/
            /*width: 70%;*/
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
            background-color: #04AA6D;
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
        @media only screen and (max-width: 600px) {
            .push {
                padding-right: 20px;
            }
        }
    </style>

    <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .custom-file-input::before {
            content: 'Select some files';
            display: inline-block;
            background: linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
        .custom-file-input:hover::before {
            border-color: black;
        }
        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }
    </style>
    <main class="main-content-wrap style-two">

        <!-- Start Student Progress Area -->
        <div class="student-progress-area">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="col-lg-10 col-md-12 offset-lg-1">

                        <div style="padding: 0px" class="device-content website card-box-style">
                            <form id="regForm" action="{{ route('user.getData') }}" method="POST" enctype="multipart/form-data">
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
                                    <h5 style="font-size: 26px;" class="text-center fw-light">Select a Campaign Objective:</h5>
                                    <div class="justify-content-center">
                                        <div class="col-xs-12 col-sm-10 col-md-10">
                                            <div class="frb-group">
                                                <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                    <input type="radio" id="radio-button-1" name="objective" value="Increase Purchase">
                                                    <label style="padding: 12px" for="radio-button-1">
                                                        <div style="position: relative; ">
                                                            <img src="{{ asset('img/dollar.svg') }}" height="50" width="50" alt="">
                                                            <span style="margin-left: 2px" class="frb-title">Increase Purchase <span class="badge bg-danger">Popular</span></span>
                                                            <p class="description">Reach people who are likely to purchase</p>
                                                        </div>
                                                        <a style="background-color: #e2eef8"  class="btn text-primary">
                                                            Sales Campaign
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                    <input type="radio" id="radio-button-2" name="objective" value="Increase Website Visit">
                                                    <label style="padding: 12px" for="radio-button-2">
                                                        <div style="position: relative; ">
                                                            <img src="{{ asset('img/web.svg') }}" height="50" width="50" alt="">
                                                            <span style="margin-left: 2px" class="frb-title">Increase Website Visit </span>
                                                            <p class="description">Get more traffic from potential customers</p>
                                                        </div>
                                                        <a style="background-color: #e2eef8"  class="btn text-primary">
                                                            Website Traffic
                                                        </a>
                                                    </label>
                                                </div>
                                                <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                    <input type="radio" id="radio-button-2" name="objective" value="Get Engagements">
                                                    <label style="padding: 12px" for="radio-button-2">
                                                        <div style="position: relative; ">
                                                            <img src="{{ asset('img/star.png') }}" height="50" width="50" alt="">
                                                            <span style="margin-left: 2px" class="frb-title">Get Engagements </span>
                                                            <p class="description">Reach a Broad Audience, Get more Followers, likes, and clout.</p>
                                                        </div>
                                                        <a style="background-color: #e2eef8"  class="btn text-primary">
                                                            Engagements
                                                        </a>
                                                    </label>
                                                </div>

                                                <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                    <input type="radio" id="radio-button-3" name="objective" value="Increase App Install">
                                                    <label style="padding: 12px" for="radio-button-3">
                                                        <div style="position: relative; ">
                                                            <img src="{{ asset('img/mobile.svg') }}" height="50" width="50" alt="">
                                                            <span style="margin-left: 2px" class="frb-title">Increase App Install </span>
                                                            <p class="description">Get more people to install your app</p>
                                                        </div>
                                                        <a style="background-color: #e2eef8"  class="btn text-primary">
                                                            App Installs
                                                        </a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab">
                                    <h5 style="font-size: 26px;" class="text-center fw-light">Choose Number of Days:</h5>
                                    <div class="justify-content-center">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="radio-button-4" name="days" value="3">
                                                        <label style="padding: 12px" for="radio-button-4">
                                                            <span class="frb-title">3 Days</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="radio-button-5" name="days" value="7">
                                                        <label style="padding: 12px" for="radio-button-5">
                                                            <span class="frb-title">7 Days</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="radio-button-6" name="days" value="15">
                                                        <label style="padding: 12px" for="radio-button-6">
                                                            <span class="frb-title">15 Days</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="radio-button-6" name="days" value="30">
                                                        <label style="padding: 12px" for="radio-button-6">
                                                            <span class="frb-title">30 Days</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                 </div>

                                <div class="tab">
                                    <h5 style="font-size: 26px;" class="text-center fw-light">Who's Your Target Audience?:</h5>
                                    <div class="card-box-style">


                                        <div class="row mb-3">
                                            <label for="website" class="col-sm-2 col-form-label">Location</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="autocomplete" class="">
                                                <ul>
                                                  <li>
                                                      Use AI Smart Interface To Get the best and converting Locations for Your Ad
                                                  </li>
                                                </ul>

                                                <p>
                                                </p>

{{--                                                use the form name addresses--}}
                                                <div id="addresses"></div>

                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
                                            <div class="col-sm-5">
                                                <select name="start_age" id="" class="form-control">
                                                    <option value="16">16</option>
                                                    <option value="above">Above 16</option>
                                                </select>
                                            </div>
{{--                                            <div style="padding: 5px" class="col-sm-2">--}}
{{--                                               <i class="fa fa-arrow-right"></i>--}}
{{--                                            </div>--}}
                                            <div class="col-sm-5">
                                                <select name="end_age" id="" class="form-control">
                                                    <option value="40">40</option>
                                                    <option value="below">Below 40</option>
                                                    <option value="above">Above 40</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                                            <div class="col-sm-10">
                                                <select name="gender" id="" class="form-control">
                                                    <option value="All">All</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="media" class="col-sm-2 col-form-label">Media</label>
                                            <div class="col-sm-10">
                                                <input type="file" id="media" name="media" class="custom-file-input">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Call to Action</label>
                                            <div class="col-sm-10">
                                                <select name="gender" id="" class="form-control">
                                                    <option value="Learn More">Learn More </option>
                                                    <option value="Shop Now">Shop Now</option>
                                                    <option value="Sign Up">Sign Up</option>
                                                    <option value="Apply Now">Apply Now </option>
                                                    <option value="Contact Us">Contact Us</option>
                                                    <option value="Book Now ">Book Now </option>
                                                    <option value="Subscribe Now">Subscribe Now</option>
                                                    <option value="Get Access">Get Access</option>
                                                    <option value="Watch More">Watch More</option>
                                                    <option value="Download">Download</option>
                                                    <option value="Get Offer">Get Offer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="website" class="col-sm-2 col-form-label">Website</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="website" name="website" class="custom-file-input">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab">
                                    <h5 style="font-size: 26px;" class="text-center fw-light">What's Your Monthly Budget:</h5>
                                    <div class="justify-content-center">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-10 col-lg-10">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="budget1" name="budget" value="250000">
                                                        <label style="padding: 12px" for="budget1">
                                                            <span class="badge bg-success">High</span>
                                                            <span style="font-size: 30px" class="frb-title">N250,000</span><br>
                                                            <span>Big business with multiple team </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-10 col-lg-10">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="budget3" name="budget" value="200000">
                                                        <label style="padding: 12px" for="budget3">
                                                            <span class="badge bg-warning">Mid</span>
                                                            <span style="font-size: 30px" class="frb-title">N200,000 </span><br>
                                                            <span>Startup Business </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-10 col-lg-10">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="budget2" name="budget" value="100000">
                                                        <label style="padding: 12px" for="budget2">
                                                            <span class="badge bg-danger">Low</span>
                                                            <span style="font-size: 30px" class="frb-title">N100,000</span><br>
                                                            <span>Freelancer Business </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-4 col-md-10 col-lg-10">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="budget4" name="budget" value="50000">
                                                        <label style="padding: 12px" for="budget4">
                                                            <span class="badge bg-danger">Low</span>
                                                            <span style="font-size: 30px" class="frb-title">N50,000</span><br>
                                                            <span>Freelancer Business </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-10 col-lg-10">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="budget5" name="budget" value="25000">
                                                        <label style="padding: 12px" for="budget5">
                                                            <span class="badge bg-danger">Low</span>
                                                            <span style="font-size: 30px" class="frb-title">N25,000</span><br>
                                                            <span>Freelancer Business </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-10 col-lg-10">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="budget6" name="budget" value="25000">
                                                        <label style="padding: 12px" for="budget6">
                                                            <span class="badge bg-danger">Low</span>
                                                            <span style="font-size: 30px" class="frb-title">N25,000</span><br>
                                                            <span>Freelancer Business </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-10 col-lg-10">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="budget7" name="budget" value="10000">
                                                        <label style="padding: 12px" for="budget7">
                                                            <span class="badge bg-danger">Low</span>
                                                            <span style="font-size: 30px" class="frb-title">N10,000</span><br>
                                                            <span>Freelancer Business </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-10 col-lg-10">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="budget8" name="budget" value="5000">
                                                        <label style="padding: 12px" for="budget8">
                                                            <span class="badge bg-danger">Low</span>
                                                            <span style="font-size: 30px" class="frb-title">N5000</span><br>
                                                            <span>Freelancer Business </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div style="overflow:auto;">
                                    <div class="push" style="float: right; padding-right: 150px" >
                                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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




        <script>


            function initAutocomplete() {

                var map = new google.maps.places.Autocomplete(
                    (document.getElementById('autocomplete')),
                    {types: ['geocode']}
                );

                google.maps.event.addListener(map, 'place_changed', function () {
                    var place = map.getPlace();

                    const latitude = place.geometry.location.lat();
                    const longitude = place.geometry.location.lng();

                    const latlng = new google.maps.LatLng(latitude, longitude);
                    let geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'latLng': latlng}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                // console.log(results[0])
                                var state = results[0].address_components[results[0].address_components.length - 3].long_name;
                                var city = results[0].address_components[results[0].address_components.length - 5].long_name;
                                var country = results[0].address_components[results[0].address_components.length - 2].long_name;

                                var address = city + ', '+country;
                                // console.log(country)
                                document.getElementById('autocomplete').value = '';
                                $("#addresses").append(
                                    '<div class="form-check"> <input class="form-check-input" type="checkbox" name="addresses[]" checked value="'+address+'"/>' + '<label class="form-check-label" >' + address + ' </label></div>'
                                );

                            }
                        }
                    });
                })


                // map.addListener('click',function(event) {
                //     console.log(event)
                //     console.log(event)
                //     document.getElementById('latitude').value = event.latLng.lat();
                //     document.getElementById('longitude').value = event.latLng.lng();
                // });
            }

        </script>




        <!-- Start Footer Area -->
       @include('dashboard.layout.footer')
        <!-- End Footer Area -->

    </main>

@endsection
