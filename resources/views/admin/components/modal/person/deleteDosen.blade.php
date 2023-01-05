<!-- Modal Form -->
<div class="modal fade" id="deleteDosen_{{$item->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white">Hapus Data Dosen</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.dosen.destroy', $item->id) }}" class="form-validate is-alter">
                    @method('DELETE')
                    @csrf
                    <div class="form-group text-center">
                        <h5 class="ff-base fw-medium">
                            <small class="text-soft">Yakin menghapus data dengan nama : </small>
                            <br>
                            {{ $item->name }}?
                        </h5>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-lg btn-danger">Delete</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <!-- <span class="sub-text">Modal Footer Text</span> -->
            </div>
        </div>
    </div>
</div>
