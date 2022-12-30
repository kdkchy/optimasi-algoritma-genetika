<!-- Modal Form -->
<div class="modal fade" id="simpanPencarian_{{$rank->dosen_id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Simpan Hasil Pencarian</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('mahasiswa.pencarian.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="full-name">Nama</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="nama" value="{{$rank->dosen_nama}}" required readonly>
                            <input type="hidden" class="form-control" name="dosen_id" value="{{$rank->dosen_id}}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Bidang Keahlian</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="bidang_keahlian" value="{{$bidang_keahlian}}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Gender</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="gender" value="{{$gender}}" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full-name">Pendidikan Terakhir</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="pendidikan_terakhir" value="{{$pendidikan_terakhir}}" required readonly>
                        </div>
                    </div>

                    <!-- hidden  -->
                    <div class="form-group">
                        <!-- <label class="form-label" for="full-name">Ketersediaan Waktu</label> -->
                        <div class="form-control-wrap">
                            <input type="hidden" class="form-control" name="ketersediaan_waktu" value="{{$ketersediaan_waktu}}" required readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label class="form-label" for="full-name">Core Faktor Akademik</label> -->
                        <div class="form-control-wrap">
                            <input type="hidden" class="form-control" name="akademik_ncf" value="{{$nilai_total_akademik->ncf}}" required readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label class="form-label" for="full-name">Core Faktor Non Akademik</label> -->
                        <div class="form-control-wrap">
                            <input type="hidden" class="form-control" name="non_akademik_ncf" value="{{$nilai_total_non_akademik->ncf}}" required readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label class="form-label" for="full-name">Secondary Faktor Akademik</label> -->
                        <div class="form-control-wrap">
                            <input type="hidden" class="form-control" name="akademik_nsf" value="{{$nilai_total_akademik->nsf}}" required readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label class="form-label" for="full-name">Secondary Faktor Non Akademik</label> -->
                        <div class="form-control-wrap">
                            <input type="hidden" class="form-control" name="non_akademik_nsf" value="{{$nilai_total_non_akademik->nsf}}" required readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label class="form-label" for="full-name">N1</label> -->
                        <div class="form-control-wrap">
                            <input type="hidden" class="form-control" name="n_satu" value="{{$rank->n_satu}}" required readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label class="form-label" for="full-name">N2</label> -->
                        <div class="form-control-wrap">
                            <input type="hidden" class="form-control" name="n_dua" value="{{$rank->n_dua}}" required readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label class="form-label" for="full-name">Ranking</label> -->
                        <div class="form-control-wrap">
                            <input type="hidden" class="form-control" name="rank" value="{{$rank->ranking}}" required readonly >
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="simpan" class="btn btn-lg btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <!-- <span class="sub-text">Modal Footer Text</span> -->
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#simpan").click(function(e){
        e.preventDefault();

        var dataJson = {
                "_token": "{{ csrf_token() }}",

                "name": $("input[name=nama]").val(),
                "dosen_pembimbing_id": $("input[name=dosen_id]").val(),
                "gender": $("input[name=gender]").val(),
                "pendidikan_terakhir": $("input[name=pendidikan_terakhir]").val(),
                "bidang_keahlian": $("input[name=bidang_keahlian]").val(),
                "ketersediaan_waktu": $("input[name=ketersediaan_waktu]").val(),

                "akademik_ncf": $("input[name=akademik_ncf]").val(),
                "akademik_nsf": $("input[name=akademik_nsf]").val(),
                "non_akademik_ncf": $("input[name=non_akademik_ncf]").val(),
                "non_akademik_nsf": $("input[name=non_akademik_nsf]").val(),
                "n_satu": $("input[name=n_satu]").val(),
                "n_dua": $("input[name=n_dua]").val(),
                "rank": $("input[name=rank]").val(),
            }
        $.ajax({
           type:'POST',
           method : "POST",
           dataType: 'json',
           url:"{{ route('mahasiswa.pencarian.store') }}",
           data: dataJson,
           success:function(data){
              alert(data.success);
           }
        });

    });
</script> -->



