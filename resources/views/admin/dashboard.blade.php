@extends('layouts.master')
@section('home', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content text-center">
            <h4 class="nk-block-title">Si-Paris</h4>
            <h6 class="ff-base fw-medium text-soft">Sistem Penjadwalan Pra dan Skripsi dengan Algoritma Genetika</h6>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>
    <hr>

    <div class="card card-preview p-5">
        <h5 class="nk-block-title">Skripsi</h5>
        <table class="table table-hover">
        <thead>
                <tr>
                    <th>#</th>
                    <th width="200px">Waktu / Tanggal / Ruangan</th>
                    <th>Nama</th>
                    <th>Pembimbing</th>
                    <th>Narasumber I</th>
                    <th>Narasumber II</th>
                    <th>Judul</th>
                    <th width="190px">*</th>
                </tr>
            </thead>
            <tbody>
                @forelse($skripsi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ hari_jam($item->hari_jam) }} <br> {{  date('j \\ F Y', strtotime($item->tanggal)) }} <br> <span class="badge bg-primary rounded-pill">{{ $item->ruangan->label }}</span></td>
                    <td>{{ $item->peserta->name }} <br> ({{ $item->peserta->uniq_id }})</td>
                    <td>{{ $item->pembimbing->name }}</td>
                    <td>{{ $item->narsum->name }}</td>
                    <td>{{ $item->narsumNd->name }}</td>
                    <td>{{ $item->judul }}</td>
                    <th>
                        <a href="{{ route('admin.perancangan.terlaksana', $item->id) }}" class="btn btn-primary m-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Terlaksana"
                            onclick="event.preventDefault();
                            document.getElementById('terlaksana-form-skripsi').submit();">
                        <em class="ti ti-check"></em></a>
                        <form id="terlaksana-form-skripsi" action="{{ route('admin.perancangan.terlaksana', $item->id) }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        <a href="#" data-bs-toggle="modal" data-bs-target="#jadwalUlang_{{ $item->id }}" class="btn btn-warning m-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"title="Jadwalkan Kembali"><em class="ti ti-reload"></em></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteJadwal_{{ $item->id }}" class="btn btn-danger m-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><em class="ti ti-trash"></em></a>
                    </th>
                </tr>
                @empty
                    <td class="text-center" colspan="8">Tidak ada jadwal</td>
                @endforelse
            </tbody>
        </table>
    </div><!-- .card -->

    <div class="card card-preview p-5">
        <h5 class="nk-block-title">Pra Skripsi</h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="200px">Waktu / Tanggal / Ruangan</th>
                    <th>Nama</th>
                    <th>Pembimbing</th>
                    <th>Narasumber I</th>
                    <th>Narasumber II</th>
                    <th>Judul</th>
                    <th width="190px">*</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pra_skripsi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ hari_jam($item->hari_jam) }} <br> {{  date('j \\ F Y', strtotime($item->tanggal)) }} <br> <span class="badge bg-primary rounded-pill">{{ $item->ruangan->label }}</span></td>
                    <td>{{ $item->peserta->name }} <br> ({{ $item->peserta->uniq_id }})</td>
                    <td>{{ $item->pembimbing->name }}</td>
                    <td>{{ $item->narsum->name }}</td>
                    <td>{{ $item->narsumNd->name }}</td>
                    <td>{{ $item->judul }}</td>
                    <th>
                        <a href="{{ route('admin.perancangan.terlaksana', $item->id) }}" class="btn btn-primary m-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Terlaksana"
                            onclick="event.preventDefault();
                            document.getElementById('terlaksana-form-pra').submit();">
                        <em class="ti ti-check"></em></a>
                        <form id="terlaksana-form-pra" action="{{ route('admin.perancangan.terlaksana', $item->id) }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        <a href="#" data-bs-toggle="modal" data-bs-target="#jadwalUlang_{{ $item->id }}" class="btn btn-warning m-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"title="Jadwalkan Kembali"><em class="ti ti-reload"></em></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteJadwal_{{ $item->id }}" class="btn btn-danger m-1 btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><em class="ti ti-trash"></em></a>
                    </th>
                </tr>
                @empty
                    <td class="text-center" colspan="8">Tidak ada jadwal</td>
                @endforelse
            </tbody>
        </table>
    </div><!-- .card -->


    <!-- component -->
    @foreach($skripsi as $item)
        @component('admin.components.modal.terjadwalkan.delete', [
                'item' => $item
            ])
        @endcomponent

        @component('admin.components.modal.terjadwalkan.jadwalUlang', [
                'item' => $item
            ])
        @endcomponent
    @endforeach

    @foreach($pra_skripsi as $item_pra)
        @component('admin.components.modal.terjadwalkan.delete', [
                'item' => $item_pra
            ])
        @endcomponent

        @component('admin.components.modal.terjadwalkan.jadwalUlang', [
                'item' => $item_pra
            ])
        @endcomponent
    @endforeach


</div><!-- nk-block -->
@endsection


