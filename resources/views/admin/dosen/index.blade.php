@extends('layouts.master')
@section('dosen', 'active')

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Dosen Pembimbing</h4>
                <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mb-5">
                <form method="GET" action="{{ route('admin.dosen.index') }}">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="search" value="{{ request()->search }}" placeholder="Cari Dosen, Bidang Keahlian">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <button type="submit" class="btn btn-secondary btn-dim"><em class="icon ni ni-search"></em><span>Cari Dosen</span> </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 mb-5 text-end">
                <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDosen"><em class="icon ni ni-plus"></em><span>Tambah Dosen</span> </button>
            </div>
        </div>

        <div class="card card-preview">
            <table class="table table-orders">
                <thead class="tb-odr-head">
                    <tr class="tb-odr-item">
                        <th class="tb-odr-info">
                            <span class="tb-odr-id">#</span>
                            <span class="tb-odr-date d-none d-md-inline-block">Nama</span>
                        </th>
                        <th class="tb-odr-amount">
                            <span class="tb-odr-total">Gender</span>
                            <span class="tb-odr-status d-none d-md-inline-block">Bidang Keahlian</span>
                        </th>
                        <th class="tb-odr-action">Aksi</th>
                    </tr>
                </thead>
                <tbody class="tb-odr-body">
                    @forelse($dosen_pembimbings as $item)
                    <tr class="tb-odr-item">
                        <td class="tb-odr-info">
                            <span class="tb-odr-id"><a href="#">{{ ($dosen_pembimbings->currentpage()-1) * $dosen_pembimbings->perpage() + $loop->index + 1 }}</a></span>
                            <span class="amount">{{ $item->nama }}</span>
                        </td>
                        <td class="tb-odr-amount">
                            <span class="tb-odr-total">
                                <span class="amount">{{ konversi_gender($item->gender) }}</span>
                            </span>
                            <span class="tb-odr-status">
                                <span class="amount">{{ $item->kriteria }}</span>
                            </span>
                        </td>
                        <td class="tb-odr-action">
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#editDosen_{{ $item->id }}" class="text-primary">View / Edit</a></li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#deleteDosen_{{ $item->id }}" class="text-danger">Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                        <td class="text-center" colspan="4">Tidak ada data</td>
                    @endforelse
                </tbody>
            </table>
        </div><!-- .card -->
        <br>
        <div class="d-flex justify-content-center">
            {!! $dosen_pembimbings->appends($_GET)->links() !!}
        </div>
    </div><!-- nk-block -->

    <!-- component goes here -->
    @component('admin.layouts.modal.tambah-dosen', [
            'bidang_keahlians' => $bidang_keahlians
        ])
    @endcomponent

    @foreach($dosen_pembimbings as $item)
        @component('admin.layouts.modal.edit-dosen', [
            'item' => $item,
            'bidang_keahlians' => $bidang_keahlians
        ])
        @endcomponent
    @endforeach

    @foreach($dosen_pembimbings as $item)
        @component('admin.layouts.modal.delete-dosen', [
            'item' => $item,
        ])
        @endcomponent
    @endforeach

@endsection
