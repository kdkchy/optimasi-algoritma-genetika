<!-- Modal Form -->
<div class="modal fade" id="tambahDosen">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Dosen Pembimbing</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.dosen.store') }}" class="form-validate is-alter">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="full-name">Nama</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Gender</label>
                        <div class="form-control-select">
                            <select class="form-control" name="gender" required>
                                <option value="" selected disabled>Pilih Gender</option>
                                <option value="1">Laki - laki</option>
                                <option value="0">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Pendidikan Terakhir</label>
                        <div class="form-control-select">
                            <select class="form-control" name="pendidikan_terakhir" required>
                                <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                @foreach(pendidikan_terakhir() as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Bidang Keahlian</label>
                        <div class="form-control-select">
                            <select class="form-control" name="bidang_keahlian_id" required>
                                    <option value="" selected disabled>Pilih Bidang Keahlian</option>
                                @foreach($bidang_keahlians as $item)
                                    <option value="{{ $item->id }}">{{ $item->kriteria }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Jumlah Kelulusan</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="mahasiswa_lulus" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Ketersediaan Waktu</label>
                        <div class="form-control-select">
                            <select class="form-control" name="ketersediaan_waktu" required>
                                <option value="" selected disabled>Ketersediaan Waktu / Minggu</option>
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }} hari</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="simpan" type="submit" class="btn btn-lg btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <!-- <span class="sub-text">Modal Footer Text</span> -->
            </div>
        </div>
    </div>
</div>
