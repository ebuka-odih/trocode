<button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-fadein">Add Fund</button>


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
