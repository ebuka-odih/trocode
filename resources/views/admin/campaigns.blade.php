@extends('admin.layout.app')
@section('content')


    <div class="content">
        <div class="block block-rounded text-center">
            <div class="block-content">
                <h3 class="text-center">All Campaigns</h3>
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
                                <th class="text-center" style="width: 100px;">
                                    <i class="far fa-calendar"></i>
                                </th>
                                <th style="width: 20%">User</th>
                                <th>Platform</th>
                                <th>Objective</th>
                                <th style="width: 10%;">Days</th>
                                <th style="width: 15%;">Status</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($camp as $item)
                            <tr>
                                <td class="text-center">
                                    {{ date('d-m-Y', strtotime($item->created_at)) }}
                                </td>
                                <td class="fw-semibold">
                                    {{ optional($item->user)->name }}
                                </td>
                                <td class="fw-semibold">
                                    {{ optional($item->ads)->name }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->objective }}
                                </td>
                                <td><em class="text-muted">{{ $item->days }}-Days</em></td>
                                <td>
                                    {!! $item->status() !!}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.preview', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        @if($item->status == 1)
                                        <a href="{{ route('admin.approve', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"  title="" data-bs-original-title="Edit">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $camp->links() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
