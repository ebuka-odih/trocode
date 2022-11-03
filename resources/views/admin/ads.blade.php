@extends('admin.layout.app')
@section('content')

    <div class="content">
        <!-- Layouts -->
        <div class="block block-rounded">
            <div class="block-content">

                <!-- Label on top Layout -->
                <h2 class="content-heading">Ads</h2>
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-1">
                        <!-- Form Labels on top - Alternative Style -->
                        <form action="{{ route('admin.ads.store') }}" method="POST" enctype="multipart/form-data">
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

                            <div class="mb-4">
                                <label class="form-label" for="example-ltf-email2">Ad Name</label>
                                <input type="text" class="form-control form-control-alt" id="example-ltf-email2" name="name" >
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-ltf-password2">Ad Image</label>
                                <input type="file" class="form-control-file form-control-alt" id="example-ltf-password2" name="image" >
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                        </form>
                        <!-- END Form Labels on top - Alternative Style -->
                    </div>
                </div>
                <!-- END Label on top Layout -->

            </div>
        </div>
        <!-- END Layouts -->
    </div>

    <div class="content">
        <div class="block block-rounded">
        <div class="block-content">

            <!-- Label on top Layout -->
            <h2 class="content-heading">Ads List</h2>
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach($ads as $item)
                            <tr>
                                <td>{{ date('d m, Y', strtotime($item->created_at)) }}</td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset('files/'.$item->image) }}" height="80" width="80" alt=""></td>
                                <td></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Label on top Layout -->

        </div>
        </div>
    </div>

@endsection
