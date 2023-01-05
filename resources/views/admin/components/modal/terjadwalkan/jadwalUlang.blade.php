<!-- Modal Form -->
<div class="modal fade" id="jadwalUlang_{{$item->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white">Jadwalkan Kembali</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.perancangan.jadwalUlang', $item->id) }}" class="form-validate is-alter">
                    @csrf
                    <div class="form-group text-center">
                        <h5 class="ff-base fw-medium">
                            <small class="text-soft">Yakin menjadwalkan ulang untuk : </small>
                            <br>
                            {{ $item->judul }}?
                        </h5>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-lg btn-warning">Yakin</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <!-- <span class="sub-text">Modal Footer Text</span> -->
            </div>
        </div>
    </div>
</div>
