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
    <main class="main-content-wrap style-two">


        <!-- Start Student Progress Area -->
        <div class="student-progress-area">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="col-lg-10 col-md-12 offset-lg-1">

                        <div style="padding: 0px" class="device-content website card-box-style">
                            <form id="regForm" action="">
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
                                                        <input type="radio" id="radio-button-4" name="days" value="7">
                                                        <label style="padding: 12px" for="radio-button-4">
                                                            <span class="frb-title">7 Days</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="radio-button-5" name="days" value="30">
                                                        <label style="padding: 12px" for="radio-button-5">
                                                            <span class="frb-title">30 Days</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="radio-button-6" name="days" value="60">
                                                        <label style="padding: 12px" for="radio-button-6">
                                                            <span class="frb-title">60 Days</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-12 col-lg-6">
                                                <div class="frb-group">
                                                    <div class="frb frb-success single-website-performance d-flex justify-content-between align-items-center">
                                                        <input type="radio" id="radio-button-7" name="days" value="90">
                                                        <label style="padding: 12px" for="radio-button-7">
                                                            <span class="frb-title">90 Days</span>
                                                        </label>
                                                    </div>
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
        <!-- Start Footer Area -->
       @include('dashboard.layout.footer')
        <!-- End Footer Area -->

    </main>

@endsection
