<!-- Modal Form -->
<div class="modal fade" id="editBidang_{{$item->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Bidang Keahlian</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.bidang-keahlian.update') }}" class="form-validate is-alter">
                    @csrf
                    <input type="hidden" class="form-control" value="{{ $item->id }}" name="kriteria_id" required>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Bidang Keahlian</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $item->kriteria }}" name="kriteria" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-warning">Edit Data</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <!-- <span class="sub-text">Modal Footer Text</span> -->
            </div>
        </div>
    </div>
</div>