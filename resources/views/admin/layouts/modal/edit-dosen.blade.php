<!-- Modal Form -->
<div class="modal fade" id="editDosen_{{$item->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Dosen Pembimbing</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.dosen.update') }}" class="form-validate is-alter">
                    @csrf
                    <input type="hidden" class="form-control" value="{{ $item->id }}" name="dosen_id" required>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Nama</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $item->nama }}" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Gender</label>
                        <div class="form-control-select">
                            <select class="form-control" name="gender" required>
                                <option value="" disabled>Pilih Gender</option>
                                <option value="1" {{ $item->gender == 1 ? 'selected' : ''}}>Laki - laki</option>
                                <option value="0" {{ $item->gender == 0 ? 'selected' : ''}}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Pendidikan Terakhir</label>
                        <div class="form-control-select">
                            <select class="form-control" name="pendidikan_terakhir" required>
                                <option value="" disabled>Pilih Pendidikan Terakhir</option>
                                @foreach(pendidikan_terakhir() as $key => $value)
                                    <option value="{{ $key }}" {{ $item->pendidikan_terakhir == $key ? 'selected' : ''}}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Bidang Keahlian</label>
                        <div class="form-control-select">
                            <select class="form-control" name="bidang_keahlian_id" required>
                                    <option value="" disabled>Pilih Bidang Keahlian</option>
                                @foreach($bidang_keahlians as $itm)
                                    <option value="{{ $itm->id }}" {{ $item->bidang_keahlian_id == $itm->id ? 'selected' : ''}}>{{ $itm->kriteria }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Jumlah Kelulusan</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="mahasiswa_lulus" value="{{ $item->mahasiswa_lulus }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Ketersediaan Waktu</label>
                        <div class="form-control-select">
                            <select class="form-control" name="ketersediaan_waktu" required>
                                <option value="" selected disabled>Ketersediaan Waktu / Minggu</option>
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" {{ $item->ketersediaan_waktu == $i ? 'selected' : '' }}>{{ $i }} hari</option>
                                @endfor
                            </select>
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
