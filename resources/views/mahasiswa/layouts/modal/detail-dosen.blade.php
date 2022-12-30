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
                <form>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Nama</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $item->nama }}" name="nama" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Bidang Keahlian</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="bidang_keahlian" value="{{$item->bidang_keahlian}}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Gender</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="gender" value="{{$item->gender}}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Pendidikan Terakhir</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="pendidikan_terakhir" value="{{$item->pendidikan_terakhir}}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Ketersediaan Waktu</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="ketersediaan_waktu" value="{{$item->ketersediaan_waktu}} hari" required readonly >
                        </div>
                    </div>
                    <div id="accordion" class="accordion">
                            <div class="accordion-item">
                                <a href="#" class="accordion-head" data-bs-toggle="collapse" data-bs-target="#accordion-item-1">
                                    <h6 class="title text-center">Detail Perhitungan</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-1" data-bs-parent="#accordion">
                                    <div class="accordion-inner">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Core Faktor Akademik</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="akademik_ncf" value="{{$item->akademik_ncf}}" required readonly >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Core Faktor Non Akademik</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="non_akademik_ncf" value="{{$item->non_akademik_ncf}}" required readonly >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Secondary Faktor Akademik</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="akademik_nsf" value="{{$item->akademik_nsf}}" required readonly >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Secondary Faktor Non Akademik</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="non_akademik_nsf" value="{{$item->non_akademik_nsf}}" required readonly >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">N1</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="n_satu" value="{{$item->n1}}" required readonly >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">N2</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="n_dua" value="{{$item->n2}}" required readonly >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Ranking</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="rank" value="{{$item->rank}}" required readonly >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                </form>
            </div>
            <div class="modal-footer bg-light">
                <!-- <span class="sub-text">Modal Footer Text</span> -->
            </div>
        </div>
    </div>
</div>
