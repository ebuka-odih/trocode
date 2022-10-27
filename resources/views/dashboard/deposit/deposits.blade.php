@extends('dashboard.layout.app')
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Funding History</h1>

            </div>
        </div>
    </div>

    <div class="content">
        <!-- Striped Table -->
        <div class="block block-rounded">
            <div class="block-content">
{{--                <a href="" class="btn btn-primary">Add Fund</a>--}}
                <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-fadein">Add Fund</button>
                <table class="table table-striped table-vcenter">
                    <thead>

                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($deposits as $item)
                    <tr>
                        <th class="text-center" scope="row">{{ $item->transId() }}</th>
                        <td class="fw-semibold">
                            {{ date('d/m/Y', strtotime($item->created_at)) }}
                        </td>
                        <td class="fw-semibold">
                           ${{ $item->amount }}
                        </td>
                        <td class="fw-semibold">
                            {{ $item->status() }}
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                    <i class="fa fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
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
        <!-- END Striped Table -->

    </div>

    <div class="modal fade" id="modal-block-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add Fund</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{ route('user.pay') }}" method="POST" target="_blank" >
                        @csrf
                    <div class="block-content">
                        <div class="col-12">
                            <label for="fund">Enter Amount</label>
                            <input name="amount" type="number" id="fund" class="form-control">
                        </div>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Proceed</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
