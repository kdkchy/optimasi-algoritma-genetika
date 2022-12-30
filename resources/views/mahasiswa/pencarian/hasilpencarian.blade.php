@extends('layouts.master')
@section('pencarian', 'active')

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title text-center">Pencarian Dosen Pembimbing</h4>

                <h6> Dengan data masukan :</h6>
                <div class="row mt-4">
                    <div class="col-md-2 px-auto">
                        <p>Bidang Keahlian</p>
                        <p style="margin-top: -10px;">Gender</p>
                        <p style="margin-top: -10px;">Pendidikan Terakhir</p>
                        <p style="margin-top: -10px;">Ketersediaan Waktu</p>
                    </div>
                    <div class="col-md-2">
                        <p><strong>: {{ $bidang_keahlian->kriteria }}</strong></p>
                        <p style="margin-top: -10px;"><strong>: {{ konversi_gender($gender) }}</strong></p>
                        <p style="margin-top: -10px;"><strong>: {{ $pendidikan_terakhir }}</strong></p>
                        <p style="margin-top: -10px;"><strong>: {{ $ketersediaan_waktu }} hari</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <ul class="nav nav-tabs mt-n3">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem2">Hasil Pembobotan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem3">Nilai Core Factor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem4">Nilai Secondary Factor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem5">Nilai Total</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1">Ranking</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabItem1">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">N1</th>
                                            <th scope="col">N2</th>
                                            <th scope="col">Ranking</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai_ranking as $item)
                                            @if($loop->iteration < 6 )
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $item->dosen_nama }}</td>
                                                    <td>{{ $item->n_satu }}</td>
                                                    <td>{{ $item->n_dua }}</td>
                                                    <td>{{ $item->ranking }}</td>
                                                    <td><a data-bs-toggle="modal" data-bs-target="#simpanPencarian_{{ $item->dosen_id }}" class="btn btn-outline-primary">Simpan</a></td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="accordion" class="accordion">
                            <div class="accordion-item">
                                <a href="#" class="accordion-head" data-bs-toggle="collapse" data-bs-target="#accordion-item-1">
                                    <h6 class="title text-center">6 ...</h6>
                                    <span class="accordion-icon"></span>
                                </a>
                                <div class="accordion-body collapse" id="accordion-item-1" data-bs-parent="#accordion">
                                    <div class="accordion-inner">
                                    <table class="table table-hover">
                                        <tbody>
                                            @foreach($nilai_ranking as $item)
                                                @if($loop->iteration > 5 )
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $item->dosen_nama }}</td>
                                                        <td>{{ $item->n_satu }}</td>
                                                        <td>{{ $item->n_dua }}</td>
                                                        <td>{{ $item->ranking }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabItem2">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Akademik</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">Bidang Keahlian</th>
                                            <th scope="col">Pendidikan Terakhir</th>
                                            <th scope="col">Jml Kelulusan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($aspek_akademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->dosen_nama }}</td>
                                            <td>{{ $item->bidang_keahlian }}</td>
                                            <td>{{ $item->pendidikan_terakhir }}</td>
                                            <td>{{ $item->mahasiswa_lulus }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <h5>Non Akademik</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">Ketersediaan Waktu</th>
                                            <th scope="col">Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($aspek_non_akademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->dosen_nama }}</td>
                                            <td>{{ $item->ketersediaan_waktu }}</td>
                                            <td>{{ $item->gender }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabItem3">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Akademik</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">NCF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai_core_factor_akademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->dosen_nama }}</td>
                                            <td>{{ $item->ncf_akademik }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <h5>Non Akademik</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">NCF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai_core_factor_non_akademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->dosen_nama }}</td>
                                            <td>{{ $item->ncf_non_akademik }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabItem4">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Akademik</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">NSF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai_secondary_factor_akademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->dosen_nama }}</td>
                                            <td>{{ $item->nsf_akademik }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <h5>Non Akademik</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">NSF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai_secondary_factor_non_akademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->dosen_nama }}</td>
                                            <td>{{ $item->nsf_non_akademik }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabItem5">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Akademik</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">NCF</th>
                                            <th scope="col">NSF</th>
                                            <th scope="col">N1</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai_total_akademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->dosen_nama }}</td>
                                            <td>{{ $item->ncf }}</td>
                                            <td>{{ $item->nsf }}</td>
                                            <td>{{ $item->n_satu }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <h5>Non Akademik</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Dosen</th>
                                            <th scope="col">NCF</th>
                                            <th scope="col">NSF</th>
                                            <th scope="col">N2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai_total_non_akademik as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->dosen_nama }}</td>
                                            <td>{{ $item->ncf }}</td>
                                            <td>{{ $item->nsf }}</td>
                                            <td>{{ $item->n_dua }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .card-preview -->
    </div>

    @foreach($nilai_ranking as $modalItem)
        @component('mahasiswa.layouts.modal.simpandosen', [
            'rank' => $modalItem,
            'nilai_total_akademik' => $nilai_total_akademik[$modalItem->dosen_id],
            'nilai_total_non_akademik' => $nilai_total_non_akademik[$modalItem->dosen_id],
            'bidang_keahlian' => $bidang_keahlian->kriteria,
            'gender' => konversi_gender($gender),
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'ketersediaan_waktu' => $ketersediaan_waktu
        ])
        @endcomponent
    @endforeach

@endsection


