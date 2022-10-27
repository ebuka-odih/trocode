@extends('dashboard.layout.app')
@section('content')

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
                        <form class="row row-cols-lg-auto g-3 align-items-center" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                            <div class="col-lg-6">
                                <label class="mb-2">Campaign Objective</label>
                                <select name="objective" id="" class="form-control form-control-bg">
                                    <option value="Increase Purchase">Increase Purchase (Popular)</option>
                                    <option value="Increase Website Visit">Increase Website Visit</option>
                                    <option value="Increase App Install">Increase App Install</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="mb-2">Number Of Days</label>
                                <input type="number" min="4" required class="form-control form-control-bg" id="example-if-password" name="days" placeholder="Enter Days">
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

@endsection
