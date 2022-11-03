@extends('dashboard.layout.app')
@section('content')


    <div class="content">
        <div class="block block-rounded text-center">
            <div class="block-content">
                <h3 class="text-center">My Campaigns</h3>
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
                                <th class="text-center" style="width: 200px;">
                                    <i class="far fa-calendar"></i>
                                </th>
                                <th>Objective</th>
                                <th style="width: 30%;">Days</th>
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
                                    {{ $item->objective }}
                                </td>
                                <td><em class="text-muted">{{ $item->days }}-Days</em></td>
                                <td>
                                    {!! $item->status() !!}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        @if($item->status == 1)
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"  title="" data-bs-original-title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        @endif
                                        <a href="{{ route('user.review', $item->id) }}"  class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
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
