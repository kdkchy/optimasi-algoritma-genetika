<!-- Modal Form -->
<div class="modal fade" id="editJadwal_{{$item->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Jadwal</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <h6 class="mb-5">{{ hari_jam($item->hari_jam) }}</h6>
                <form method="POST" action="{{ route('admin.jadwal.update') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="hidden" name="person_id" value="{{ $person->id }}">
                    <div class="form-group">
                        <label class="form-label" for="full-name">Status Kelas (Kosong/Kelas)</label>
                        <div class="form-control-wrap">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" name="status"  class="custom-control-input" id="kelas_{{$item->id}}" value="1" {{ $item->status == 1 ? 'checked' : ''}}>
                                <label class="custom-control-label" for="kelas_{{$item->id}}"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Kelas</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="desk_kegiatan" value="{{ $item->desk_kegiatan }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Apakah sedang dinas? (Tidak/Ya)</label>
                        <div class="form-control-wrap">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" name="dinas" class="custom-control-input" id="dinas_{{$item->id}}" value="1" {{ $item->dinas == 1 ? 'checked' : ''}}>
                                <label class="custom-control-label" for="dinas_{{$item->id}}"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="simpan" class="btn btn-lg btn-primary">Simpan Jadwal</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer bg-light">
                <!-- <span class="sub-text">Modal Footer Text</span> -->
            </div>
        </div>
    </div>
</div>
