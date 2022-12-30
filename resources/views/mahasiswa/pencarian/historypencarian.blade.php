@extends('layouts.master')
@section('historypencarian', 'active')

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Dosen Tersimpan</h4>
                <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mb-5">
                <form method="GET" action="{{ route('mahasiswa.pencarian.historypencarian') }}">
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
                    @forelse($history as $item)
                    <tr class="tb-odr-item">
                        <td class="tb-odr-info">
                            <span class="tb-odr-id"><a href="#">{{ ($history->currentpage()-1) * $history->perpage() + $loop->index + 1 }}</a></span>
                            <span class="amount">{{ $item->nama }}</span>
                        </td>
                        <td class="tb-odr-amount">
                            <span class="tb-odr-total">
                                <span class="amount">{{ $item->gender }}</span>
                            </span>
                            <span class="tb-odr-status">
                                <span class="amount">{{ $item->bidang_keahlian }}</span>
                            </span>
                        </td>
                        <td class="tb-odr-action">
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#editDosen_{{ $item->id }}" class="text-primary">View</a></li>
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
            {!! $history->appends($_GET)->links() !!}
        </div>
    </div><!-- nk-block -->

    <!-- component goes here -->
    @foreach($history as $item)
        @component('mahasiswa.layouts.modal.detail-dosen', [
            'item' => $item,
        ])
        @endcomponent
    @endforeach

    @foreach($history as $item)
        @component('mahasiswa.layouts.modal.delete-dosen', [
            'item' => $item,
        ])
        @endcomponent
    @endforeach

@endsection
