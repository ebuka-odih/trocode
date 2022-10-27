@extends('admin.layout.app')
@section('content')

    <div id="content" class="main-content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row layout-top-spacing">

                    <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Users</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-4">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date</th>

                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <p class="align-self-center mb-0">{{ $item->name }}</p>
                                                </div>
                                            </td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>

                                            <td class="text-center">
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                                <a href="{{ route('admin.profile', $item->id) }}" class="btn btn-sm btn-primary">View</a>
                                            </td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection