@extends('admin.layout.app')
@section('content')

    <div class="content">
        <div class="block block-rounded text-center">
            <div class="block-content">
                <h3 class="text-center">Users</h3>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded text-center">

            <div class="block block-rounded">
                <div class="block-content">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 25%;">
                                    <i class="far fa-calendar"></i>
                                </th>
                                <th style="width: 25%">Name</th>
                                <th style="width: 25%;">Email</th>
                                <th class="text-center" style="width: 25%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                                <tr>
                                    <td><em class="text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}</em></td>

                                    <td class="text-center">
                                        {{ $item->name }}
                                    </td>
                                    <td class="fw-semibold">
                                        {{ $item->email }}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <a href="{{ route('admin.profile', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"  data-bs-original-title="Delete">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
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

@endsection
