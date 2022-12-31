@extends('admin.layout.app')
@section('content')

    <div id="content" class="main-content">
        <div class="container-fluid">
            <div class="container-fluid">


                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Fund User Account</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <form action="{{ route('admin.storeFunding') }}" method="POST" enctype="multipart/form-data">
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
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="">User</label>
                                                    <select name="user_id" id="" class="form-control">
                                                        @foreach($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="">Amount</label>
                                                    <input type="number" name="amount" class="form-control" id="sPassword" >
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </form>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
