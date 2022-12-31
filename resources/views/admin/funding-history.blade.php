@extends('admin.layout.app')
@section('content')

    <div class="content">
        <div class="block block-rounded text-center">
            <div class="block-content">
                <h3 class="text-center">Funding History</h3>
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
                                <th style="width: 25%;">History</th>
                                <th class="text-center" style="width: 25%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fundings as $item)
                                <tr>
                                    <td><em class="text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}</em></td>

                                    <td class="text-center">
                                        {{ $item->user->name }}
                                    </td>
                                    <td class="fw-semibold">
                                        ${{ $item->amount }}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                                <i class="fa fa-times"></i>
                                            </button>
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
